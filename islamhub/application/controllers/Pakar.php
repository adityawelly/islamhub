<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pakar extends CI_Controller {
	
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        if ($this->session->userdata('logged') == FALSE) {
            $this->session->set_flashdata('message','Session tidak tersedia.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Profile');
        }
        if ($this->session->userdata('is_moderator') != 1) {
            $this->session->set_flashdata('message','Hak akses ditolak.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Profile');
        }
        
    }
	
    function index(){
        $data = array(
            'pakar' => ,
        );
    	$this->load->view('pakar/index', $data);
    }

}
