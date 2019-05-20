<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Types extends CI_Controller {
	
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
		$this->load->model('Tbl_setting_types');
    }

	public function index(){
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'		=> 'Types',
			'css'		=> 'backend/settings/types/css',
			'content'	=> 'backend/settings/types/content',
			'modal'		=> 'backend/settings/types/modal',
			'javascript'=> 'backend/settings/types/javascript',
			'tblTypes'	=> $this->Tbl_setting_types->read($rules)->result(),
		);
		$this->load->view('backend/index',$data);
	}

	public function Tambah(){
		$rules[] = array('field' => 'type', 'label' => 'Type', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Types/');
		}else{
			try{
				$rules = array(
					'id_setting_type'	=> time().rand(3000,4000),
					'type'				=> $this->input->post('type'),
					'status'			=> $this->input->post('status'),
					'created_by'		=> $this->session->userdata('id_user'),
					'updated_by'		=> $this->session->userdata('id_user'),
				);
				$this->Tbl_setting_types->create($rules);
				$this->session->set_flashdata('message','Data berhasil disimpan.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Types/');
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Settings/Types/');
			}
		}
	}


	public function Edit($id){
		$rules[] = array('field' => 'type', 'label' => 'Type', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Types/');
		}else{
			try{
				$rules = array(
					'where' => array(
						'id_setting_type'	=> $id,
					),
					'data'  => array(
						'type'				=> $this->input->post('type'),
						'status'			=> $this->input->post('status'),
						'updated_by'		=> $this->session->userdata('id_user'),
					),
				);
				$this->Tbl_setting_types->update($rules);
				$this->session->set_flashdata('message','Data berhasil diubah.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Types/');
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Settings/Types/');
			}
		}
	}

	public function Hapus($id){
		try{
			$rules = array(
				'id_setting_type'	=> $id,
			);
			$this->Tbl_setting_types->delete($rules);
			$this->session->set_flashdata('message','Data berhasil dihapus.');
			$this->session->set_flashdata('type_message','success');
			redirect('Backend/Settings/Types/');
		}catch (Exception $e){
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Types/');
		}
	}

}
