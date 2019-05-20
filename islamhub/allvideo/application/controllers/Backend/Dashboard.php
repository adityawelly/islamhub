<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	
	public function __construct(){
    parent::__construct();
			if (!$this->session->userdata('backend')){
				$this->session->set_flashdata('message','Session tidak tersedia.');
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Auth/');
			}
			if ($this->session->userdata('level') > 3 ) {
				$this->session->set_flashdata('message','Hak akses ditolak.');
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Auth/');
			}

			$this->load->model('Tbl_video_details');
			$this->load->model('Tbl_video_viewers');
    }

	public function index(){
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);

		$rules2 = array(
			'select'    => null,
			'where'     => array(
				'created_by'	=> $this->session->userdata('id_users'),
			),
			'or_where'  => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$num_video = $this->Tbl_video_details->read($rules)->num_rows();
		$num_video_upload = $this->Tbl_video_details->where($rules2)->num_rows();
		$num_video_view	= $this->Tbl_video_viewers->read($rules)->num_rows();

		$data = array(
			'title'				=> 'Dashboard',
			'css'					=> 'backend/dashboard/css',
			'content'			=> 'backend/dashboard/content',
			'modal'				=> 'backend/dashboard/modal',
			'javascript'	=> 'backend/dashboard/javascript',

			'num_video'					=> $num_video,
			'num_video_upload'	=> $num_video_upload,
			'num_video_view'		=> $num_video_view,
		);
		$this->load->view('backend/index',$data);
	}

}
