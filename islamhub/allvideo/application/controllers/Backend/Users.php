<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('backend')){
			$this->session->set_flashdata('message','Session tidak tersedia.');
			$this->session->set_flashdata('type_message','danger');
        	redirect('Backend/Auth/');
        }
		if ($this->session->userdata('level') > 0 ) {
			$this->session->set_flashdata('message','Hak akses ditolak.');
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Dasboard/');
		}
		$this->load->model('Tbl_users');
    }

	public function index(){
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'			=> 'Users',
			'css'			=> 'backend/users/read/css',
			'content'		=> 'backend/users/read/content',
			'modal'			=> 'backend/users/read/modal',
			'javascript'	=> 'backend/users/read/javascript',
			'tblUsers'		=> $this->Tbl_users->read($rules)->result(),
		);
		$this->load->view('backend/index',$data);
	}

	public function Tambah(){
		$rules[] = array('field' => 'nama', 'label' => 'Nama', 'rules' => 'required');
		$rules[] = array('field' => 'username', 'label' => 'Username', 'rules' => 'required');
		$rules[] = array('field' => 'password', 'label' => 'Password', 'rules' => 'required');
		$rules[] = array('field' => 'confirm', 'label' => 'Confirm Password', 'rules' => 'required');
		$rules[] = array('field' => 'level', 'label' => 'Level', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Users/');
		}else{
			try{
				$password 	= $this->input->post('password');
				$confirm 	= $this->input->post('confirm');
				if ($password == $confirm){
					$rules = array(
						'id_user'		=> time().rand(100,200),
						'username'		=> $this->input->post('username'),
						'password'		=> md5(md5($password)),
						'nama'			=> $this->input->post('nama'),
						'level'			=> $this->input->post('level'),
						'created_by'	=> $this->getIPAddress(),
						'updated_by'	=> $this->getIPAddress(),
					);
					$this->Tbl_users->create($rules);
					$this->session->set_flashdata('message','Data berhasil disimpan.');
					$this->session->set_flashdata('type_message','success');
					redirect('Backend/Users/');
				}else{
					$this->session->set_flashdata('message','Password tidak sama.');
					$this->session->set_flashdata('type_message','danger');
					redirect('Backend/Users/');
				}
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Users/');
			}
		}
	}

	public function Edit($id){
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id_user'	=> $id,
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'			=> 'Edit Users',
			'css'			=> 'backend/users/edit/css',
			'content'		=> 'backend/users/edit/content',
			'modal'			=> 'backend/users/edit/modal',
			'javascript'	=> 'backend/users/edit/javascript',
			'tblUsers'		=> $this->Tbl_users->where($rules)->row(),
		);
		$this->load->view('backend/index',$data);
	}

	public function actionEdit($id){
		$rules[] = array('field' => 'nama', 'label' => 'Nama', 'rules' => 'required');
		$rules[] = array('field' => 'username', 'label' => 'Username', 'rules' => 'required');
		$rules[] = array('field' => 'level', 'label' => 'Level', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Users/Edit/'.$id);
		}else{
			try{
				$password = $this->input->post('password');
				if (empty($password)){
					$data = array(
						'nama'			=> $this->input->post('nama'),
						'username'		=> $this->input->post('username'),
						'level'			=> $this->input->post('level'),
						'updated_by'	=> $this->getIPAddress(),
					);
				}else{
					$password 	= $this->input->post('password');
					$confirm 	= $this->input->post('confirm');
					if ($password == $confirm){
						$data = array(
							'username'		=> $this->input->post('username'),
							'password'		=> md5(md5($password)),
							'nama'			=> $this->input->post('nama'),
							'level'			=> $this->input->post('level'),
							'updated_by'	=> $this->getIPAddress(),
						);
					}else{
						$this->session->set_flashdata('message','Password tidak sama.');
						$this->session->set_flashdata('type_message','danger');
						redirect('Backend/Users/Edit/'.$id);
					}
				}
				$rules = array(
					'where' => array(
						'id_user'	=> $id,
					),
					'data'  => $data,
				);
				$this->Tbl_users->update($rules);
				$this->session->set_flashdata('message','Data berhasil diubah.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Users/Edit/'.$id);
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Users/Edit/'.$id);
			}
		}
	}

	public function Hapus($id){
		if ($id != '1534867854137'){
			try{
				$rules = array(
					'id_user'	=> $id,
				);
				$this->Tbl_users->delete($rules);
				$this->session->set_flashdata('message','Data berhasil dihapus.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Users/');
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','warning');
				redirect('Backend/Users/');
			}
		}else{
			$this->session->set_flashdata('message','Hak akses users istimewa.');
			$this->session->set_flashdata('type_message','warning');
			redirect('Backend/Users/');
		}
	}

	public function getIPAddress(){
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
			$ipaddress = 'UNKNOWN';
		return $ipaddress;
	}

}
