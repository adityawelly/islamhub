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
		$rules[] = array('field' => 'nama',	'label' => 'Nama',  'rules' => 'required');
		$rules[] = array('field' => 'value',	'label' => 'Value',  'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Options/');
		}else{
		    try{
                $data = array(
                    'name'	=> $this->input->post('nama'),
                    'value' => $this->input->post('value'),
                );
                $this->Tbl_options->create($data);
                $this->session->set_flashdata('message','Data berhasil disimpan.');
                $this->session->set_flashdata('type_message','success');
                redirect('Backend/Options/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Backend/Options/');
            }
		}
	}

	function Update($id){
        $rules[] = array('field' => 'nama',	'label' => 'Nama',  'rules' => 'required');
		$rules[] = array('field' => 'value',	'label' => 'Value',  'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Options/');
		}else{
		    try{
                $rules = array(
                    'where' => array('id' => $id),
                    'data'  => array(
                        'name'	=> $this->input->post('nama'),
                        'value' => $this->input->post('value'),
                    ),
                );
                $this->Tbl_options->update($rules);
                $this->session->set_flashdata('message','Data berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Backend/Options/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Backend/Options/');
            }
		}
	}

	function Delete($id){
	    try{
	        $rules = array('id' => $id);
            $this->Tbl_options->delete($rules);
            $this->session->set_flashdata('message','Data berhasil dihapus.');
            $this->session->set_flashdata('type_message','success');
            redirect('Backend/Options/');
        }catch (Exception $e){
            $this->session->set_flashdata('message', $e->getMessage());
            $this->session->set_flashdata('type_message','danger');
            redirect('Backend/Options/');
        }
	}
}
