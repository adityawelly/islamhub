<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {

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

		$this->load->model('Tbl_users');
    }

	function index(){
        $rules = array(
            'select'    => null,
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
		$data = array(
            'content'       => 'backend/users/content',
            'css'           => 'backend/users/css',
            'javascript'    => 'backend/users/javascript',
            'modal'         => 'backend/users/modal',
			'tblUsers'      => $this->Tbl_users->read($rules)->result(),
		);
		$this->load->view('backend/index',$data);
	}

	function Update($id){
		$rules[] = array('field' => 'email',     'label' => 'Email',      'rules' => 'required');
		$rules[] = array('field' => 'username',	'label' => 'Username',  'rules' => 'required');
		$rules[] = array('field' => 'is_admin',     'label' => 'Admin',      'rules' => 'required');
		$rules[] = array('field' => 'is_moderator',     'label' => 'Pakar',      'rules' => 'required');
		$rules[] = array('field' => 'is_confirmed',     'label' => 'Confirmed',      'rules' => 'required');
		$rules[] = array('field' => 'is_deleted',     'label' => 'Delete',      'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Users/');
		}else{
		    try{
		    	$password = $this->input->post('password');
		    	if (empty($password)){
					$rules = array(
						'where' => array('id' => $id),
						'data'  => array(
							'email' => $this->input->post('email'),
							'username'  => $this->input->post('username'),
							'is_admin' => $this->input->post('is_admin'),
							'is_moderator' => $this->input->post('is_moderator'),
							'is_confirmed' => $this->input->post('is_confirmed'),
							'is_deleted' => $this->input->post('is_deleted'),
						),
					);
				}else{
					$rules = array(
						'where' => array('id' => $id),
						'data'  => array(
							'email' => $this->input->post('email'),
							'username'  => $this->input->post('username'),
							'password'  => md5($password),
							'is_admin' => $this->input->post('is_admin'),
							'is_moderator' => $this->input->post('is_moderator'),
							'is_confirmed' => $this->input->post('is_confirmed'),
							'is_deleted' => $this->input->post('is_deleted'),
						),
					);
				}
                $this->Tbl_users->update($rules);
                $this->session->set_flashdata('message','Data berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Backend/Users/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Backend/Users/');
            }
		}
	}

	function Delete($id){
	    try{
	        $rules = array('id' => $id);
            $this->Tbl_users->delete($rules);
            $this->session->set_flashdata('message','Data berhasil dihapus.');
            $this->session->set_flashdata('type_message','success');
            redirect('Backend/Users');
        }catch (Exception $e){
            $this->session->set_flashdata('message', $e->getMessage());
            $this->session->set_flashdata('type_message','danger');
            redirect('Backend/Users');
        }
	}

}
