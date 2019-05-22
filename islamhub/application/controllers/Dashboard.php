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
		$this->load->model('TabelPesan');
		$this->load->model('TabelPakar');

    }

	public function index()
	{
		
		$data = array(
			'title'		=> 'Dashboard',
			'content' 	=> 'dashboard/content',
			'css' 		=> 'dashboard/css',
			'modal' 	=> 'dashboard/modal',
			'javascript'=> 'dashboard/javascript',
			'total' => $this->TabelPesan->hitungPesan(),

			'tblPakar'   => $this->TabelPakar->read()->result(),
		);
		$this->load->view('index', $data);
	}
}
