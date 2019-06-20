<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('TabelUser');
        $this->load->model('TabelUserData');
    }

	public function index()
	{
		$this->load->view('register');
    }
    
    public function actRegister(){
        $rules[] = array('field' => 'nama',	'label' => 'Nama', 'rules' => 'required');
        $rules[] = array('field' => 'username',	'label' => 'Username', 'rules' => 'required');
	    $rules[] = array('field' => 'password', 'label' => 'Password', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','red');
			redirect('Register');
		}else{
			$data = array(
			    'username' => set_value('username'),
            );
			$Tabelusers	= $this->TabelUser->whereAnd($data);
			if ($Tabelusers->num_rows() > 0) {
				$this->session->set_flashdata('message','Username / Email telah terdaftar.');
				$this->session->set_flashdata('type_message','red');
                redirect('Register');
			}else{
                $options = [
                    'cost' => 12,
                ];
                $password =  password_hash(set_value('password'), PASSWORD_BCRYPT, $options);
				$data = array(
                    'user_id' => time().rand(100,200),
                    'username' => set_value('username'),
                    'password' => $password,
                    'salt'     => '12',
                    'created_date' => date('Y-m-d H:i:s'),
                    'is_deleted' => '0',
                );
                $data2 = array(
                    'user_id' => $data['user_id'],
                    'nik' => "#",
                    'nama' => set_value('nama'),
                    'jk' => "L",
                    'alamat' => "#",
                    'tgl_lahir' => date('Y-m-d'),
                    'tempat_lahir' => "#",
                    'no_tlp' => "#",
                    'email' => "#",
                    'user_foto' => "#",
                    'created_date' => date('Y-m-d H:i:s'),
                    'is_deleted' => '0',
                );
                if ($this->TabelUser->create($data)) {
                    if ($this->TabelUserData->create($data2)) {
                        $this->session->set_flashdata('message','Registrasi Berhasil');
                        $this->session->set_flashdata('type_message','teal');
                        redirect('Register');
                    } else {
                        $this->session->set_flashdata('message','Registrasi Gagal');
                        $this->session->set_flashdata('type_message','red');
                        redirect('Register');
                    }
                } else {
                    $this->session->set_flashdata('message','Registrasi Gagal');
                    $this->session->set_flashdata('type_message','red');
                    redirect('Register');
                }
			}
		}
    }
}
