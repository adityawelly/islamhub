<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Options extends CI_Controller {

	function __construct(){
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		if ($this->session->userdata('logged') == FALSE) {
			$this->session->set_flashdata('message','Session tidak tersedia.');
			$this->session->set_flashdata('type_message','danger');
			redirect('Auth/');
		}
		if ($this->session->userdata('is_admin') != 1) {
			$this->session->set_flashdata('message','Hak akses ditolak.');
			$this->session->set_flashdata('type_message','danger');
			redirect('Auth/Logout/');
		}

		$this->load->model('Tbl_options');
    }

	function index(){
        $rules = array(
            'select'    => null,
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
		$data = array(
            'content'       => 'backend/options/content',
            'css'           => 'backend/options/css',
            'javascript'    => 'backend/options/javascript',
            'modal'         => 'backend/options/modal',
			'tblOption'     => $this->Tbl_options->read($rules)->result(),
		);
		$this->load->view('backend/index',$data);
	}

	function Create(){
		$rules[] = array('field' => 'username',	'label' => 'Username',  'rules' => 'required');
		$rules[] = array('field' => 'password',	'label' => 'Password',  'rules' => 'required');
		$rules[] = array('field' => 'nama',     'label' => 'Nama',      'rules' => 'required');
		$rules[] = array('field' => 'level',	'label' => 'Level',     'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Settings/Users/');
		}else{
		    try{
		        $level = $this->input->post('level');
                $keterangan = $this->fakultas($level, $this->input->post('id_fakultas'));
                $data = array(
                    'username'	=> strtolower(str_replace(' ', '', $this->input->post('username')).'@'.$this->input->post('level')),
                    'password'	=> md5(md5($this->input->post('password'))),
                    'nama'		=> strtoupper($this->input->post('nama')),
                    'level'		=> $level,
                    'keterangan'=> $keterangan,
                );
                $this->Tbl_setting_users->create($data);
                $this->session->set_flashdata('message','Data berhasil disimpan.');
                $this->session->set_flashdata('type_message','success');
                redirect('Settings/Users/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Settings/Users/');
            }
		}
	}

	function Update($id){
        $rules[] = array('field' => 'username',	'label' => 'Username',  'rules' => 'required');
        $rules[] = array('field' => 'nama',     'label' => 'Nama',      'rules' => 'required');
        $rules[] = array('field' => 'level',	'label' => 'Level',     'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Settings/Users/');
		}else{
		    try{
                $level = $this->input->post('level');
                $keterangan = $this->fakultas($level, $this->input->post('id_fakultas'));
                $password = $this->input->post('password');
                if (!empty($password)) {
                    $data = array(
                        'username'	=> strtolower(str_replace(' ', '', $this->input->post('username')).'@'.$this->input->post('level')),
                        'password'	=> md5(md5($password)),
                        'nama'		=> strtoupper($this->input->post('nama')),
                        'level'		=> $level,
                        'keterangan'=> $keterangan,
                    );
                }else{
                    $data = array(
                        'username'	=> strtolower(str_replace(' ', '', $this->input->post('username')).'@'.$this->input->post('level')),
                        'nama'		=> strtoupper($this->input->post('nama')),
                        'level'		=> $level,
                        'keterangan'=> $keterangan,
                    );
                }
                $rules = array(
                    'where' => array('id_users' => $id),
                    'data'  => $data,
                );
                $this->Tbl_setting_users->update($rules);
                $this->session->set_flashdata('message','Data berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Settings/Users/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Settings/Users/');
            }
		}
	}

	function Delete($id){
	    try{
	        $rules = array('id_users' => $id);
            $this->Tbl_setting_users->delete($rules);
            $this->session->set_flashdata('message','Data berhasil dihapus.');
            $this->session->set_flashdata('type_message','success');
            redirect('Settings/Users');
        }catch (Exception $e){
            $this->session->set_flashdata('message', $e->getMessage());
            $this->session->set_flashdata('type_message','danger');
            redirect('Settings/Users');
        }
	}

	private function fakultas($level, $id_fakultas){
        if ($level == "FAKULTAS"){
            $rules = array(
                'select'    => null,
                'where'     => array('id_fakultas' => $id_fakultas),
                'or_where'  => null,
                'order'     => null,
                'limit'     => null,
                'pagging'   => null,
            );
            $tblSFakultas = $this->Tbl_setting_fakultas->where($rules)->row();
            $keterangan = json_encode(array(
                'id_fakultas'	=> $tblSFakultas->id_fakultas,
                'fakultas' 		=> $tblSFakultas->fakultas,
            ));
        }else{
            $keterangan = '-';
        }
        return $keterangan;
    }

}
