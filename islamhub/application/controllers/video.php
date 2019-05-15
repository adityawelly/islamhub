<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
        
		$this->load->helper(array('url'));
        $this->load->view('header');
        $this->load->view('video/home_video');
		$this->load->view('footer');
	}
	public function pencarian()
	{
        
		$this->load->helper(array('url'));
        $this->load->view('header');
        $this->load->view('video/pencarian');
		$this->load->view('footer');
	}
}
