<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Years extends CI_Controller {
	
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
		$this->load->model('Tbl_setting_years');
    }

	public function index(){
		$rules = array(
			'select'    => null,
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$data = array(
			'title'			=> 'Years',
			'css'			=> 'backend/settings/years/css',
			'content'		=> 'backend/settings/years/content',
			'modal'			=> 'backend/settings/years/modal',
			'javascript'	=> 'backend/settings/years/javascript',
			'tblYears'	=> $this->Tbl_setting_years->read($rules)->result(),
		);
		$this->load->view('backend/index',$data);
	}

	public function Tambah(){
		$rules[] = array('field' => 'year', 'label' => 'Year', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Years/');
		}else{
			try{
				$rules = array(
					'id_setting_year'	=> time().rand(4000,5000),
					'year'				=> $this->input->post('year'),
					'status'			=> $this->input->post('status'),
					'created_by'		=> $this->session->userdata('id_user'),
					'updated_by'		=> $this->session->userdata('id_user'),
				);
				$this->Tbl_setting_years->create($rules);
				$this->session->set_flashdata('message','Data berhasil disimpan.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Years/');
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Settings/Years/');
			}
		}
	}


	public function Edit($id){
		$rules[] = array('field' => 'year', 'label' => 'Year', 'rules' => 'required');
		$rules[] = array('field' => 'status', 'label' => 'Status', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Years/');
		}else{
			try{
				$rules = array(
					'where' => array(
						'id_setting_year'	=> $id,
					),
					'data'  => array(
						'year'				=> $this->input->post('year'),
						'status'			=> $this->input->post('status'),
						'updated_by'		=> $this->session->userdata('id_user'),
					),
				);
				$this->Tbl_setting_years->update($rules);
				$this->session->set_flashdata('message','Data berhasil diubah.');
				$this->session->set_flashdata('type_message','success');
				redirect('Backend/Settings/Years/');
			}catch (Exception $e){
				$this->session->set_flashdata('message', $e->getMessage());
				$this->session->set_flashdata('type_message','danger');
				redirect('Backend/Settings/Years/');
			}
		}
	}

	public function Hapus($id){
		try{
			$rules = array(
				'id_setting_year'	=> $id,
			);
			$this->Tbl_setting_years->delete($rules);
			$this->session->set_flashdata('message','Data berhasil dihapus.');
			$this->session->set_flashdata('type_message','success');
			redirect('Backend/Settings/Years/');
		}catch (Exception $e){
			$this->session->set_flashdata('message', $e->getMessage());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Settings/Years/');
		}
	}

}
