<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	
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
    }
	
    function index(){
        $data = array(
            'content'       => 'backend/dashboard/content',
            'css'           => 'backend/dashboard/css',
            'javascript'    => 'backend/dashboard/javascript',
            'modal'         => 'backend/dashboard/modal',
        );
    	$this->load->view('backend/index', $data);
    }

}
