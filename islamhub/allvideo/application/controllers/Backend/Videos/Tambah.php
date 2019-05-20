<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tambah extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('backend')){
			$this->session->set_flashdata('message','Session tidak tersedia.');
			$this->session->set_flashdata('type_message','danger');
        	redirect('Backend/Auth/');
        }
		if ($this->session->userdata('level') > 0 ) {
			$this->session->set_flashdata('message','Hak akses ditolak.');
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Dasboard/');
		}
		$this->load->model('Tbl_setting_seasons');
		$this->load->model('Tbl_setting_types');
		$this->load->model('Tbl_setting_years');
		$this->load->model('Tbl_video_details');
		$this->load->model('Tbl_video_genres');
		$this->load->model('Tbl_video_locations');
		$this->load->model('View_video_details');
	}

	public function index(){
		$data = array(
			'title'			=> 'Videos - Tambah',
			'css'			=> 'backend/videos/tambah/css',
			'content'		=> 'backend/videos/tambah/content',
			'modal'			=> 'backend/videos/tambah/modal',
			'javascript'	=> 'backend/videos/tambah/javascript',
			'tblSSeasons'	=> $this->Tbl_setting_seasons->read()->result(),
			'tblSTypes'		=> $this->Tbl_setting_types->read()->result(),
			'tblSYears'		=> $this->Tbl_setting_years->read()->result(),
		);
		$this->load->view('backend/index',$data);
	}

	public function actionTambah(){
		$rules[] = array('field' => 'title', 'label' => 'Title', 'rules' => 'required');
		$rules[] = array('field' => 'synopsis', 'label' => 'Synopsis', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$rules[] = array('field' => 'broadcast', 'label' => 'Broadcast', 'rules' => 'required');
		$rules[] = array('field' => 'producer', 'label' => 'Producer', 'rules' => 'required');
		$rules[] = array('field' => 'score', 'label' => 'Score', 'rules' => 'required');
		$rules[] = array('field' => 'season', 'label' => 'Season', 'rules' => 'required');
		$rules[] = array('field' => 'type', 'label' => 'Type', 'rules' => 'required');
		$rules[] = array('field' => 'year', 'label' => 'Year', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Videos/Tambah/');
		}else{
			$config = array(
				'upload_path'   => './assets/photos/',
				'allowed_types' => 'gif|jpg|png|jpeg',
				'max_size'      => 51200,
				'overwrite'     => TRUE,
				'file_name'     => time().rand(10000,11000),
			);
			$this->upload->initialize($config);
			if(!$this->upload->do_upload()){
				$this->session->set_flashdata('message',$this->upload->display_errors());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Videos/Tambah/');
			}else{
				$file = $this->upload->data();
				$data = array(
					'id_video_detail'	=> time().rand(10000,11000),
					'title'				=> $this->input->post('title'),
					'synopsis'			=> $this->input->post('synopsis'),
					'status'			=> $this->input->post('status'),
					'broadcast'			=> $this->input->post('broadcast'),
					'producer'			=> $this->input->post('producer'),
					'score'				=> $this->input->post('score'),
					'photo'				=> $file['file_name'],
					'id_setting_season'	=> $this->input->post('season'),
					'id_setting_type'	=> $this->input->post('type'),
					'id_setting_year'	=> $this->input->post('year'),
					'created_by'		=> $this->session->userdata('id_user'),
					'user_updated'		=> $this->session->userdata('id_user'),
				);
				if ($this->Tbl_video_details->create($data)){
					$this->session->set_flashdata('message','Data berhasil disimpan.');
					$this->session->set_flashdata('type_message','success');
					redirect('Backend/Videos/Tambah/');
				}else{
					$this->session->set_flashdata('message','Terjadi kesalahan dalam input data.');
					$this->session->set_flashdata('type_message','warning');
					redirect('Backend/Videos/Tambah/');
				}
			}
		}
	}

}
