<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->model('Tbl_users');
    }

	public function index(){
		$this->load->view('backend/sign-in');
	}

	public function Login(){
	    $rules[] = array('field' => 'username',	'label' => 'Username', 'rules' => 'required');
	    $rules[] = array('field' => 'password', 'label' => 'Password', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Auth/');
		}else{
			try{
				$rules = array(
					'select'    => null,
					'where'     => array(
						'username' => $this->input->post('username'),
						'password' => md5(md5($this->input->post('password'))),
					),
					'or_where'  => null,
					'order'     => null,
					'limit'     => null,
					'pagging'   => null,
				);
				$tbUser = $this->Tbl_users->where($rules);
				if ($tbUser->num_rows() > 0) {
					$tbUser = $tbUser->row();
					$rules = array(
						'where' => array('id_user' => $tbUser->id_user),
						'data'  => array(
							'ip_login' 	=> $this->getIPAddress(),
							'login' 	=> date('Y-m-d H:i:s'),
						),
					);
					if ($this->Tbl_users->update($rules)) {
						$data = array(
							'backend' 		=> TRUE,
							'id_user'		=> $tbUser->id_user,
							'username'		=> $tbUser->username,
							'nama'			=> $tbUser->nama,
							'level'			=> $tbUser->level,
						);
						$this->session->set_userdata($data);
						redirect('Backend/Dashboard/');
					}else{
						$this->session->sess_destroy();
						$this->session->set_flashdata('message','Terjadi kesalahan dalam proses update session masuk login.');
						$this->session->set_flashdata('type_message','danger');
						redirect('Backend/Auth/');
					}
				}else{
					$this->session->set_flashdata('message','Username atau Password Salah');
					$this->session->set_flashdata('type_message','danger');
					redirect('Backend/Auth/');
				}
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Auth/');
			}
		}
	}
	
	public function Logout(){
		try{
			$rules = array(
				'where' => array('id_user' => $this->session->userdata('id_user')),
				'data'  => array(
					'logout' 		=> date('Y-m-d H:i:s'),
					'ip_logout' 	=> $this->getIPAddress(),
				),
			);
			$this->Tbl_users->update($rules);
			$this->session->sess_destroy();
			redirect('Backend/Auth/');
		}catch (Exception $e){
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Auth/');
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
