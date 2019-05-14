<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_awal extends CI_Controller {

	public function index()
	{
        
		$this->load->helper(array('url'));
        $this->load->view('header');
        $this->load->view('halaman-awal');
		$this->load->view('footer');
	}
}
