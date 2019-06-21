<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('logged') != TRUE){
            $this->session->set_flashdata('message','Login terlebih dahulu.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Login');
        }
		$this->load->model('Tabelpesan');
		$this->load->model('Tabelpakar');
		$this->load->model('Tabelclient');

    }

	public function index()
	{
		$where = array(
			'user_id' => $this->session->userdata('id')
		);
		if($this->session->userdata('pakar') == TRUE){
			$profile_num = $this->Tabelpakar->whereAnd($where)->num_rows();

			if($profile_num == 0){
				$this->session->set_flashdata('message','Baru pertama kali login? silahkan isi profile dulu :).');
				$this->session->set_flashdata('type_message','warning');
				redirect('Profile2/Tambah/');
			}
		}else if($this->session->userdata('client') == TRUE){
			$profile_num = $this->Tabelclient->whereAnd($where)->num_rows();

			if($profile_num == 0){
				$this->session->set_flashdata('message','Baru pertama kali login? silahkan isi profile dulu :).');
				$this->session->set_flashdata('type_message','warning');
				redirect('Profile2/Tambah/');
			}
		}
		
		$data = array(
			'title'		=> 'Dashboard',
			'content' 	=> 'dashboard/content',
			'css' 		=> 'dashboard/css',
			'modal' 	=> 'dashboard/modal',
			'javascript'=> 'dashboard/javascript',
			'total' => $this->Tabelpesan->hitungPesan(),

			'tblPakar'   => $this->Tabelpakar->read()->result(),
		);
		$this->load->view('index', $data);
	}
}
