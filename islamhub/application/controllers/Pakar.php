<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pakar extends CI_Controller {
	
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        // if ($this->session->userdata('logged') == FALSE) {
        //     $this->session->set_flashdata('message','Session tidak tersedia.');
        //     $this->session->set_flashdata('type_message','danger');
        //     redirect('Profile');
        // }
        // if ($this->session->userdata('is_moderator') != 1) {
        //     $this->session->set_flashdata('message','Hak akses ditolak.');
        //     $this->session->set_flashdata('type_message','danger');
        //     redirect('Profile');
        // }
        $this->load->model('Tabelpakar');
    }
	
    function index(){
        $data = array(
            'pakar' => null
        );
        $id = $this->session->userdata('id');
        $where = array(
            'user_id' => $id
        );
        
        $result = $this->Tabelpakar->whereAnd($where)->row();
        // echo $result->nama;
        // $data = array('pakar' => $result);
    	$this->load->view('pakar/index', $data);
    }

}
