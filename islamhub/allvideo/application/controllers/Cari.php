<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

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

	public function index($tipe=null,$id=null)
	{
		if(!empty($_GET['tipe'])) $tipe=$_GET['tipe'];
		if(!empty($_GET['id'])) $id=$_GET['id'];
		$page=NULL;
		$rules = array(
			'select'    => null,
			'or_where'  => null,
			'order'     => 'created_at DESC',
			'limit'     => null,
			'pagging'   => null,
		);
		if($tipe == 'Cari'){
			$rules['like'] = array('title' => $id);
			$rules['or_like'] = null;
		}
		else if($tipe == 'tahun'){
			$rules['where'] = array('id_setting_year' => $id);
		}
		else if($tipe == 'tipe'){
			$rules['where'] = array('id_setting_type' => $id);
		}
		else if($tipe == 'musim'){
			$rules['where'] = array('id_setting_season' => $id);
		}
		else if($tipe == 'genre'){
			$aturanGeek = array(
			'select'    => null,
			'where'     => array('id_setting_genre' => $id),
			'or_where'  => null,
			'order'     => 'created_at DESC',
			'limit'     => null,
			'pagging'   => null,
			);
			$videos=$this->Tbl_video_genres->where($aturanGeek)->result();
			$rules['where'] = array();
			foreach ($videos as $v) {
				$rules['where']['id_video_detail'] = $v->id_video_detail;
			}
		}
		if($tipe == "Cari")
		$jumlah = $this->View_video_details->like($rules)->num_rows();
		else
		$jumlah = $this->View_video_details->where($rules)->num_rows();
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
		if($tipe == "Cari"){
			$data = array(
				'title'			=> 'AllVideo - Nonton Video Sesuka Hatimu',
				'tblVDetails'   => $this->View_video_details->like($rules)->result(),
				'halaman'   	=> $this->pagination->create_links(),
			);
		}
		else {
			$data = array(
				'title'			=> 'AllVideo - Nonton Video Sesuka Hatimu',
				'tblVDetails'   => $this->View_video_details->where($rules)->result(),
				'halaman'   	=> $this->pagination->create_links(),
			);	
		}
		$this->load->view('frontend/home',$data);
	}
}
