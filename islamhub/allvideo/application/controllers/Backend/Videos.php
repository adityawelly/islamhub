<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Videos extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('backend')){
			$this->session->set_flashdata('message','Session tidak tersedia.');
			$this->session->set_flashdata('type_message','danger');
        	redirect('Backend/Auth/');
        }
		$this->load->model('Tbl_setting_genres');
		$this->load->model('Tbl_setting_seasons');
		$this->load->model('Tbl_setting_types');
		$this->load->model('Tbl_setting_years');
		$this->load->model('Tbl_video_genres');
		$this->load->model('Tbl_video_viewers');
		$this->load->model('Tbl_video_details');
		$this->load->model('Tbl_video_reports');
		$this->load->model('Tbl_video_locations');
		$this->load->model('View_video_details');
		$this->load->model('View_video_reports');
		$this->load->model('View_video_genres');
	}

	public function index(){
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'			=> 'Videos',
			'css'			=> 'backend/videos/read/css',
			'content'		=> 'backend/videos/read/content',
			'modal'			=> 'backend/videos/read/modal',
			'javascript'	=> 'backend/videos/read/javascript',
			'viewVDetails'	=> $this->View_video_details->read($rules)->result(),
			'tblSSeasons'	=> $this->Tbl_setting_seasons->read($rules)->result(),
			'tblSTypes'		=> $this->Tbl_setting_types->read($rules)->result(),
			'tblSYears'		=> $this->Tbl_setting_years->read($rules)->result(),
		);
		$this->load->view('backend/index',$data);
	}

	public function Detail($id){
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
		$num_video_view	= $this->Tbl_video_viewers->read($rules[1])->num_rows();
		$data = array(
			'title'			=> 'Videos',
			'css'			=> 'backend/videos/detail/css',
			'content'		=> 'backend/videos/detail/content',
			'modal'			=> 'backend/videos/detail/modal',
			'javascript'	=> 'backend/videos/detail/javascript',
			'tblSGenres'	=> $this->Tbl_setting_genres->read($rules[0])->result(),
			'viewVDetails'	=> $this->View_video_details->where($rules[1])->row(),
			'viewVGenres'	=> $this->View_video_genres->where($rules[1])->result(),
			'tblVLocations'	=> $this->Tbl_video_locations->where($rules[1])->result(),
			'num_video_view'		=> $num_video_view,
		);
		$this->load->view('backend/index',$data);
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
			'title'			=> 'Videos',
			'css'			=> 'backend/videos/watch/css',
			'content'		=> 'backend/videos/watch/content',
			'modal'			=> 'backend/videos/watch/modal',
			'javascript'	=> 'backend/videos/watch/javascript',
			'tblVLocations'	=> $this->Tbl_video_locations->where($rules)->row(),
		);
		$this->load->view('backend/index',$data);
	}

	public function Tambah(){
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
			redirect('Backend/Videos/');
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
				redirect('Backend/Videos/');
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
					'updated_by'		=> $this->session->userdata('id_user'),
				);
				if ($this->Tbl_video_details->create($data)){
					$this->session->set_flashdata('message','Data berhasil disimpan.');
					$this->session->set_flashdata('type_message','success');
					redirect('Backend/Videos/');
				}else{
					$this->session->set_flashdata('message','Terjadi kesalahan dalam input data.');
					$this->session->set_flashdata('type_message','warning');
					redirect('Backend/Videos/');
				}
			}
		}
	}

	public function actionTambahGenre($id){
		$rules[] = array('field' => 'genre', 'label' => 'Genre', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Videos/Detail/'.$id);
		}else{
			$id_setting_genre = $this->input->post('genre');
			$where = array(
				'id_video_detail' 	=> $id,
				'id_setting_genre'	=> $id_setting_genre,
			);
			if ($this->Tbl_video_genres->where(null, $where, null, null, null)->num_rows() > 0){
				$this->session->set_flashdata('message','Genre sudah ada.');
				$this->session->set_flashdata('type_message','warning');
				redirect('Backend/Videos/Detail/'.$id);
			}else{
				$data = array(
					'id_video_genre'	=> time().rand(11000,12000),
					'id_video_detail'	=> $id,
					'id_setting_genre'	=> $id_setting_genre,
					'created_by'		=> $this->session->userdata('id_user'),
					'updated_by'		=> $this->session->userdata('id_user'),
				);
				if ($this->Tbl_video_genres->create($data)){
					$this->session->set_flashdata('message','Data berhasil disimpan.');
					$this->session->set_flashdata('type_message','success');
					redirect('Backend/Videos/Detail/'.$id);
				}else{
					$this->session->set_flashdata('message','Terjadi kesalahan dalam input data.');
					$this->session->set_flashdata('type_message','warning');
					redirect('Backend/Videos/Detail/'.$id);
				}
			}
		}
	}

	public function actionDeleteGenre($id_video_genre, $id_video_detail){
		$where = array(
			'id_video_genre' 	=> $id_video_genre,
			'id_video_detail' 	=> $id_video_detail,
		);
		if ($this->Tbl_video_genres->delete($where)){
			$this->session->set_flashdata('message','Data berhasil dihapus.');
			$this->session->set_flashdata('type_message','success');
			redirect('Backend/Videos/Detail/'.$id_video_detail);
		}else{
			$this->session->set_flashdata('message','Terjadi kesalahan dalam hapus data.');
			$this->session->set_flashdata('type_message','warning');
			redirect('Backend/Videos/Detail/'.$id_video_detail);
		}
	}

	public function actionTambahLocation($id){
		$rules[] = array('field' => 'title', 'label' => 'Title', 'rules' => 'required');
		$rules[] = array('field' => 'url', 'label' => 'URL', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Videos/Detail/'.$id);
		}else{
			$url = $this->input->post('url');
			$url = str_replace('view?usp=sharing','preview', $url);
			$data = array(
				'id_video_location'	=> time().rand(12000,13000),
				'id_video_detail'	=> $id,
				'title'				=> $this->input->post('title'),
				'url'				=> $url,
				'created_by'		=> $this->session->userdata('id_user'),
				'updated_by'		=> $this->session->userdata('id_user'),
			);
			if ($this->Tbl_video_locations->create($data)){
				$this->session->set_flashdata('message','Data berhasil disimpan.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Videos/Detail/'.$id);
			}else{
				$this->session->set_flashdata('message','Terjadi kesalahan dalam input data.');
				$this->session->set_flashdata('type_message','warning');
				redirect('Backend/Videos/Detail/'.$id);
			}
		}
	}

	public function actionEditLocation($id_video_detail, $id_video_location){
		$rules[] = array('field' => 'title', 'label' => 'Title', 'rules' => 'required');
		$rules[] = array('field' => 'url', 'label' => 'URL', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Videos/Detail/'.$id_video_detail);
		}else{
			$url = $this->input->post('url');
			$url = str_replace('view?usp=sharing','preview', $url);
			$rules = array(
				'data' => array(
					'title'				=> $this->input->post('title'),
					'url'				=> $url,
					'created_by'		=> $this->session->userdata('id_user'),
				),
				'where' => array(
					'id_video_location' => $id_video_location,
					'id_video_detail' => $id_video_detail,
				)
			);
			if ($this->Tbl_video_locations->update($rules)){
				$this->session->set_flashdata('message','Data berhasil diupdate.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Videos/Detail/'.$id_video_detail);
			}else{
				$this->session->set_flashdata('message','Terjadi kesalahan dalam update data.');
				$this->session->set_flashdata('type_message','warning');
				redirect('Backend/Videos/Detail/'.$id_video_detail);
			}
		}
	}

	public function actionDeleteLocation($id_video_detail, $id_video_location){
		$where = array(
			'id_video_location' => $id_video_location,
			'id_video_detail'	=> $id_video_detail,
		);
		if ($this->Tbl_video_locations->delete($where)){
			$this->session->set_flashdata('message','Data berhasil dihapus.');
			$this->session->set_flashdata('type_message','success');
			redirect('Backend/Videos/Detail/'.$id_video_detail);
		}else{
			$this->session->set_flashdata('message','Terjadi kesalahan dalam hapus data.');
			$this->session->set_flashdata('type_message','warning');
			redirect('Backend/Videos/Detail/'.$id_video_detail);
		}
	}

}
