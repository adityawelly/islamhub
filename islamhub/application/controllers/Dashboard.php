<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
    }

	public function index()
	{
		$data = array(
			'title'		=> 'Dashboard',
			'content' 	=> 'dashboard/content',
			'css' 		=> 'dashboard/css',
			'modal' 	=> 'dashboard/modal',
			'javascript'=> 'dashboard/javascript',
		);
		$this->load->view('index', $data);
	}
}
