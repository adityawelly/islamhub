<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class General extends CI_Controller {
	
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
		$this->load->model('Tbl_video_details');
		$this->load->model('Tbl_video_genres');
		$this->load->model('Tbl_video_locations');
		$this->load->model('View_video_details');
	}

	public function index($id = 0, $page = null){
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$jumlah = $this->View_video_details->read($rules)->num_rows();
		$config = array(
			'base_url' => base_url('Backend/Videos/General/index/'.$id.'/'),
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
			'title'			=> 'Video - General',
			'css'			=> 'backend/videos/general/css',
			'content'		=> 'backend/videos/general/content',
			'modal'			=> 'backend/videos/general/modal',
			'javascript'	=> 'backend/videos/general/javascript',
			'tblVDetails'   => $this->View_video_details->read($rules)->result(),
			'halaman'   	=> $this->pagination->create_links(),
		);
		$this->load->view('backend/index',$data);
	}

	public function Tambah(){
		$rules[] = array('field' => 'genre', 'label' => 'Genre', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Genres/');
		}else{
			$data = array(
				'id_setting_genre'	=> time().rand(1000,2000),
				'genre'				=> $this->input->post('genre'),
				'status'			=> $this->input->post('status'),
				'created_by'		=> $this->session->userdata('id_user'),
				'user_updated'		=> $this->session->userdata('id_user'),
			);
			if ($this->Tbl_setting_genres->create($data)){
				$this->session->set_flashdata('message','Data berhasil disimpan.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Genres/');
			}else{
				$this->session->set_flashdata('message','Terjadi kesalahan dalam input data.');
				$this->session->set_flashdata('type_message','warning');
				redirect('Backend/Settings/Genres/');
			}
		}
	}


	public function Edit($id){
		$rules[] = array('field' => 'genre', 'label' => 'Genre', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Genres/');
		}else{
			$where = array(
				'id_setting_genre'	=> $id,
			);
			$data = array(
				'genre'				=> $this->input->post('genre'),
				'status'			=> $this->input->post('status'),
				'user_updated'		=> $this->session->userdata('id_user'),
			);
			if ($this->Tbl_setting_genres->update($where,$data)){
				$this->session->set_flashdata('message','Data berhasil diubah.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Genres/');
			}else{
				$this->session->set_flashdata('message','Terjadi kesalahan dalam mengubah data.');
				$this->session->set_flashdata('type_message','warning');
				redirect('Backend/Settings/Genres/');
			}
		}
	}

	public function Hapus($id){
		$where = array(
			'id_setting_genre'	=> $id,
		);
		if ($this->Tbl_setting_genres->delete($where)){
			$this->session->set_flashdata('message','Data berhasil dihapus.');
			$this->session->set_flashdata('type_message','success');
			redirect('Backend/Settings/Genres/');
		}else{
			$this->session->set_flashdata('message','Terjadi kesalahan dalam menghapus data.');
			$this->session->set_flashdata('type_message','warning');
			redirect('Backend/Settings/Genres/');
		}

	}

}
