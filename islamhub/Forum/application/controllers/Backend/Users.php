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
        $rules[] = array('field' => 'username',	'label' => 'username',  'rules' => 'required');
        $rules[] = array('field' => 'email',     'label' => 'email',      'rules' => 'required');
        $rules[] = array('field' => 'level',	'label' => 'Level',     'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Users/');
		}else{
		    try{
               $rules = array(
                    'where' => array('id' => $id),
                    'data'  => array(
                        'username'  => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                    ),
                );
                $this->Tbl_setting_users->update($rules);
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
