<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Seasons extends CI_Controller {
	
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
		$this->load->model('Tbl_setting_seasons');
    }

	public function index(){
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'			=> 'Seasons',
			'css'			=> 'backend/settings/seasons/css',
			'content'		=> 'backend/settings/seasons/content',
			'modal'			=> 'backend/settings/seasons/modal',
			'javascript'	=> 'backend/settings/seasons/javascript',
			'tblSeasons'	=> $this->Tbl_setting_seasons->read($rules)->result(),
		);
		$this->load->view('backend/index',$data);
	}

	public function Tambah(){
		$rules[] = array('field' => 'season', 'label' => 'Season', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Seasons/');
		}else{
			try{
				$rules = array(
					'id_setting_season'	=> time().rand(2000,3000),
					'season'			=> $this->input->post('season'),
					'status'			=> $this->input->post('status'),
					'created_by'		=> $this->session->userdata('id_user'),
					'updated_by'		=> $this->session->userdata('id_user'),
				);
				$this->Tbl_setting_seasons->create($rules);
				$this->session->set_flashdata('message','Data berhasil disimpan.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Seasons/');
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Settings/Seasons/');
			}
		}
	}

	public function Edit($id){
		$rules[] = array('field' => 'season', 'label' => 'Season', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Seasons/');
		}else{
			try{
				$rules = array(
					'where' => array(
						'id_setting_season'	=> $id,
					),
					'data'  => array(
						'season'	=> $this->input->post('season'),
						'status'	=> $this->input->post('status'),
						'updated_by'=> $this->session->userdata('id_user'),
					),
				);
				$this->Tbl_setting_seasons->update($rules);
				$this->session->set_flashdata('message','Data berhasil diubah.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Seasons/');
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Settings/Seasons/');
			}
		}
	}

	public function Hapus($id){
		try{
			$rules = array(
				'id_setting_season'	=> $id,
			);
			$this->Tbl_setting_seasons->delete($rules);
			$this->session->set_flashdata('message','Data berhasil dihapus.');
			$this->session->set_flashdata('type_message','success');
			redirect('Backend/Settings/Seasons/');
		}catch (Exception $e){
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Seasons/');
		}
	}

}
