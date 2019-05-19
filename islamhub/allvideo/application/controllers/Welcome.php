<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tbl_setting_genres');
		$this->load->model('Tbl_setting_seasons');
		$this->load->model('Tbl_setting_types');
		$this->load->model('Tbl_setting_years');
		$this->load->model('Tbl_users');
		$this->load->model('Tbl_video_details');
		$this->load->model('Tbl_video_genres');
		$this->load->model('Tbl_video_locations');

		$this->load->model('Tbl_video_details');
		$this->load->model('Tbl_video_genres');
		$this->load->model('Tbl_video_locations');
		$this->load->model('View_video_details');

	}

	public function index($page = null)
	{
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$jumlah = $this->View_video_details->read($rules)->num_rows();
		$config = array(
			'base_url' => base_url('/Welcome'),
			'total_rows' => $jumlah,
			'per_page' => '6',
			'first_page' => 'First',
			'last_page' => 'Last',
			'next_page' => 'Next',
			'prev_page' => 'Prev',
			'full_tag_open' => '<ul class="pagination pagination-sm no-margin">',
			'full_tag_close' => '</ul>',
			'num_tag_open' => '<li>',
			'num_tag_close' => '</li>',
			'cur_tag_open' => '<li class="active"><a href="#">',
			'cur_tag_close' => '</a></li>',
			'next_tag_open' => '<li>',
			'next_tagl_close' => '</li>',
			'prev_tag_open' => '<li>',
			'prev_tagl_close' => '</li>',
			'first_tag_open' => '<li>',
			'first_tagl_close' => '</li>',
			'last_tag_open' => '<li>',
			'last_tagl_close' => '</li>',
		);
		$this->pagination->initialize($config);
		$pagging = array(
			'num'		=> $config['per_page'],
			'offset'	=> $page,
		);
		$rules = array(
			'select'    => null,
			'order'     => 'created_at DESC',
			'limit'     => null,
			'pagging'   => $pagging,
		);
		$data = array(
			'title'			=> 'AllVideo - Nonton Video Sesuka Hatimu',
			'tblVDetails'   => $this->View_video_details->read($rules)->result(),
			'halaman'   	=> $this->pagination->create_links(),
		);
		$this->load->view('frontend/home',$data);
	}
}
