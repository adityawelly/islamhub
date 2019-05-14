<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

	public function index()
	{
        
		$this->load->helper(array('url'));
        $this->load->view('header');
        $this->load->view('buku/home_buku');
		$this->load->view('footer');
	}
}
