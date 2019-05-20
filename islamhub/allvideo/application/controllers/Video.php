<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

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
		$this->load->model('View_video_details');
		$this->load->model('View_video_genres');
	}

	public function detail($id)
	{
		$rules[0] = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$rules[1] = array(
			'select'    => null,
			'where'     => array('id_video_detail' => $id),
			'or_where'  => null,
			'order'     => 'created_at DESC',
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'			=> 'Videos '.$this->View_video_details->where($rules[1])->row()->title,
			'viewVDetails'	=> $this->View_video_details->where($rules[1])->row(),
			'viewVGenres'	=> $this->View_video_genres->where($rules[1])->result(),
			'tblVLocations'	=> $this->Tbl_video_locations->where($rules[1])->result(),
		);
		$this->load->view('frontend/video',$data);
	}
	public function Watch($id_video_detail, $id_video_location){
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id_video_detail' 	=> $id_video_detail,
				'id_video_location' => $id_video_location,
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'			=> $this->Tbl_video_locations->where($rules)->row()->title,
			'tblVLocations'	=> $this->Tbl_video_locations->where($rules)->row(),
		);
		$this->load->view('frontend/watch',$data);
		$this->db->insert('tbl_video_viewers',array(
			'id_video_viewer' => md5(date('dmyhis')),
			'id_video_location' => $id_video_location,
			'ip_address' => $_SERVER['REMOTE_ADDR']
		));

	}
	public function report($id_video_detail, $id_video_location, $tipe){
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id_video_detail' 	=> $id_video_detail,
				'id_video_location' => $id_video_location,
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);

		if($tipe == 1){
			$this->db->insert('tbl_video_reports',array(
				'report' => '1',
				'id_video_report' => md5(date('dmyhis')),
				'id_video_location' => $id_video_location
			));
		}
		else {
			$this->db->insert('tbl_video_reports',array(
				'report' => '2',
				'id_video_report' => md5(date('dmyhis')),
				'id_video_location' => $id_video_location
			));
		}

		$jumSebelum=$this->Tbl_video_locations->where($rules)->row()->report_error;
		redirect('/video/watch/'.$id_video_detail.'/'.$id_video_location.'?report=1', 'refresh');
	}

}
