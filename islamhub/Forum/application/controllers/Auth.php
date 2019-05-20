<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('Tbl_users');
        $is_admin = $this->session->userdata('is_admin');
        if ($is_admin == 1){
        	redirect('Backend/Dashboard');
		}
    }

	function index(){
		$this->load->view('login');
	}

	function Register(){
		$this->load->view('register');
	}

	function Logout(){
		$this->load->driver('cache');
		$this->session->sess_destroy();
		$this->cache->clean();
		ob_clean();
		redirect(base_url());
	}

	function Verifikasi($username){
		try{
			$rules = array(
				'where' => array(
					'username' => $username,
				),
				'data'  => array(
					'is_confirmed' => 1,
				),
			);
			$this->Tbl_users->update($rules);
			$this->session->set_flashdata('message', 'Verifikasi akun berhasil.');
			$this->session->set_flashdata('type_message','success');
			redirect('Auth/');
		}catch (Exception $e){
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message','danger');
			redirect('Auth/');
		}
	}

	function actionLogin(){
		$rules[] = array('field' => 'username',	'label' => 'Username', 'rules' => 'required');
		$rules[] = array('field' => 'password', 'label' => 'Password', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Auth');
		}else{
			$rules = array(
				'select'    => null,
				'where'     => array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
				),
				'or_where'  => null,
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$tblSUsers = $this->Tbl_users->where($rules);
			if ($tblSUsers->num_rows() > 0) {
				try{
					$tblSUsers = $tblSUsers->row();
					if ($tblSUsers->is_confirmed == 0){
						$this->session->set_flashdata('message','Akun belum diverifikasi');
						$this->session->set_flashdata('type_message','warning');
						redirect('Auth');
					}
					$session = array(
						'logged'		=> TRUE,
						'id'			=> $tblSUsers->id,
						'username'		=> $tblSUsers->username,
						'email'			=> $tblSUsers->email,
						'avatar'		=> $tblSUsers->avatar,
						'create_at'		=> $tblSUsers->create_at,
						'update_at'		=> $tblSUsers->update_at,
						'is_admin'		=> $tblSUsers->is_admin,
						'is_moderator' 	=> $tblSUsers->is_moderator,
						'is_confirmed' 	=> $tblSUsers->is_confirmed,
						'is_deleted' 	=> $tblSUsers->is_deleted,
					);
					$this->session->set_userdata($session);
					if ($tblSUsers->is_admin == 1){
						redirect('Backend/Dashboard');
					}else{
						redirect('Welcome');
					}
				}catch (Exception $e){
					$this->session->set_flashdata('message', $e->getMessage());
					$this->session->set_flashdata('type_message','danger');
					redirect('Auth');
				}
			}else{
				$this->session->set_flashdata('message','Username atau Password Salah');
				$this->session->set_flashdata('type_message','danger');
				redirect('Auth');
			}
		}
	}

	function actionRegister(){
		$rules[] = array('field' => 'username',	'label' => 'Username', 'rules' => 'required');
		$rules[] = array('field' => 'email',	'label' => 'Email', 'rules' => 'required');
		$rules[] = array('field' => 'password', 'label' => 'Password', 'rules' => 'required');
		$rules[] = array('field' => 'confirm_password',	'label' => 'Confirm password', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Auth/Register/');
		}else{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');
			if ($password == $confirm_password){
				$rules = array(
					'select'    => null,
					'where'     => null, //not null or null
					'or_where'  => array(
						'username' => $username,
						'email'	=> $email
					), //not null or null
					'order'     => null,
					'limit'     => null,
					'pagging'   => null,
				);
				$result = $this->Tbl_users->where($rules)->num_rows();
				if ($result > 0){
					$this->session->set_flashdata('message', 'Akun sudah terdaftar.');
					$this->session->set_flashdata('type_message','warning');
					redirect('Auth/Register/');
				}
				$rules = array(
					'username' => $username,
					'email' => $email,
					'password' => md5($password),
					'created_at' => date('Y-m-j H:i:s'),
				);
				$html = $this->load->view('email_verifikasi', $rules, TRUE);
				$result = $this->sendEmail($email,$html);
				if ($result){
					$this->Tbl_users->create($rules);
					$this->session->set_flashdata('message', 'Silahkan melakukan verifikasi akun.');
					$this->session->set_flashdata('type_message','warning');
					redirect('Auth/Register/');
				}else{
					$this->session->set_flashdata('message', 'Gagal menyimpan data.');
					$this->session->set_flashdata('type_message','danger');
					redirect('AuthRegister/');
				}
			}else{
				$this->session->set_flashdata('message', 'Password tidak sama.');
				$this->session->set_flashdata('type_message','danger');
				redirect('Auth/Register');
			}

		}
	}

	function sendEmail($email, $content){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'noreply.pmb5@uinsgd.ac.id',
			'smtp_pass' => 'SILIWang!1609',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1'
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('contact@alfi-gusman.web.id', 'No-Reply Forum');
		$this->email->to($email);
		$this->email->subject('Verifikasi Users - Forum');
		$this->email->message($content);
		if ($this->email->send()){
			return true;
		}else{
			//$this->email->print_debugger();
			return false;
			//echo $this->email->print_debugger();
			//exit();
		}
	}

}
