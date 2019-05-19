<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Genres extends CI_Controller {
	
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
			redirect('Backend/Dashboard/');
		}
		$this->load->model('Tbl_setting_genres');
    }

	public function index(){
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'			=> 'Genres',
			'css'			=> 'backend/settings/genres/css',
			'content'		=> 'backend/settings/genres/content',
			'modal'			=> 'backend/settings/genres/modal',
			'javascript'	=> 'backend/settings/genres/javascript',
			'tblGenres'		=> $this->Tbl_setting_genres->read($rules)->result(),
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
			try{
				$rules = array(
					'id_setting_genre'	=> time().rand(1000,2000),
					'genre'				=> $this->input->post('genre'),
					'status'			=> $this->input->post('status'),
					'created_by'		=> $this->session->userdata('id_user'),
					'updated_by'		=> $this->session->userdata('id_user'),
				);
				$this->Tbl_setting_genres->create($rules);
				$this->session->set_flashdata('message','Data berhasil disimpan.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Genres/');
			}catch (Exception $e){
				$this->session->set_flashdata('message',$e->getMessage());
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
			try{
				$rules = array(
					'where' => array(
						'id_setting_genre'	=> $id,
					),
					'data'  => array(
						'genre'		=> $this->input->post('genre'),
						'status'	=> $this->input->post('status'),
						'updated_by'=> $this->session->userdata('id_user'),
					),
				);
				$this->Tbl_setting_genres->update($rules);
				$this->session->set_flashdata('message','Data berhasil diubah.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Genres/');
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Settings/Genres/');
			}
		}
	}

	public function Hapus($id){
		try{
			$rules = array(
				'id_setting_genre'	=> $id,
			);
			$this->Tbl_setting_genres->delete($rules);
			$this->session->set_flashdata('message','Data berhasil dihapus.');
			$this->session->set_flashdata('type_message','success');
			redirect('Backend/Settings/Genres/');
		}catch (Exception $e){
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Genres/');
		}
	}

}
