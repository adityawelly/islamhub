<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile2 extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('logged') != TRUE){
            $this->session->set_flashdata('message','Login terlebih dahulu.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Login');
        }
		$this->load->model('Tabelclient');
		$this->load->model('Tabelpakar');

    }

	public function index()
	{
		if($this->session->userdata('pakar') == TRUE){
            $where = array(
                'user_id' => $this->session->userdata('id'),
            );
            $profile = $this->Tabelpakar->whereAnd($where)->row();
        }else if($this->session->userdata('client') == TRUE){
            $where = array(
                'user_id' => $this->session->userdata('id'),
            );
            $profile = $this->Tabelclient->whereAnd($where)->row();
        }
		$data = array(
			'title'		=> 'Profile',
			'content' 	=> 'profile/content',
			'css' 		=> 'profile/css',
			'modal' 	=> 'profile/modal',
			'javascript'=> 'profile/javascript',

            'profile'   => $profile,
		);
		$this->load->view('index', $data);
    }

    function Tambah(){
        $data = array(
			'title'		=> 'Profile',
			'content' 	=> 'profile_tambah/content',
			'css' 		=> 'profile_tambah/css',
			'modal' 	=> 'profile_tambah/modal',
			'javascript'=> 'profile_tambah/javascript',
		);
		$this->load->view('index', $data);
    }

    function AddPakar($id){
        $data = array(
            'user_id'   => $id,
            'nama'    => $this->input->post('nama'),
            'nik'    => $this->input->post('nik'),
            'jk'    => $this->input->post('jk'),
            'alamat'    => $this->input->post('alamat'),
            'tempat_lahir'    => $this->input->post('tempat_lahir'),
            'tgl_lahir'    => $this->input->post('tgl_lahir'),
            'no_telp'    => $this->input->post('no_telp'),
            'universitas'    => $this->input->post('universitas'),
            'biodata'    => $this->input->post('biodata'),
        );
        if ($this->Tabelpakar->create($data)) {
            $this->session->set_flashdata('message','Berhasil Disimpan.');
            $this->session->set_flashdata('type_message','success');
            redirect('Dashboard');
        }else{
            $this->session->set_flashdata('message','Gagal Disimpan.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Profile2/Tambah');
        }
    }

    function AddClient($id){
        $data = array(
            'user_id'   => $id,
            'nama'    => $this->input->post('nama'),
            'jk'    => $this->input->post('jk'),
            'alamat'    => $this->input->post('alamat'),
            'no_telp'    => $this->input->post('no_telp'),
            'biodata'    => $this->input->post('biodata'),
        );
        if ($this->Tabelclient->create($data)) {
            $this->session->set_flashdata('message','Berhasil Disimpan.');
            $this->session->set_flashdata('type_message','success');
            redirect('Dashboard');
        }else{
            $this->session->set_flashdata('message','Gagal Disimpan.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Profile2/Tambah');
        }
    }
    
    function UpdatePakar($id){
        $where = array(
            'user_id'   => $id
        );
        $data = array(
            'nama'    => $this->input->post('nama'),
            'nik'    => $this->input->post('nik'),
            'jk'    => $this->input->post('jk'),
            'alamat'    => $this->input->post('alamat'),
            'tempat_lahir'    => $this->input->post('tempat_lahir'),
            'tgl_lahir'    => $this->input->post('tgl_lahir'),
            'no_telp'    => $this->input->post('no_telp'),
            'universitas'    => $this->input->post('universitas'),
            'biodata'    => $this->input->post('biodata'),
        );
        if ($this->Tabelpakar->update($where, $data)) {
            $this->session->set_flashdata('message','Berhasil Disimpan.');
            $this->session->set_flashdata('type_message','success');
            redirect('Profile2');
        }else{
            $this->session->set_flashdata('message','Gagal Disimpan.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Profile2');
        }
    }
    function UpdateClient($id){
        $where = array(
            'user_id'   => $id
        );
        $data = array(
            'nama'    => $this->input->post('nama'),
            'jk'    => $this->input->post('jk'),
            'alamat'    => $this->input->post('alamat'),
            'no_telp'    => $this->input->post('no_telp'),
            'biodata'    => $this->input->post('biodata'),
        );
        if ($this->Tabelclient->update($where, $data)) {
            $this->session->set_flashdata('message','Berhasil Disimpan.');
            $this->session->set_flashdata('type_message','success');
            redirect('Profile2');
        }else{
            $this->session->set_flashdata('message','Gagal Disimpan.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Profile2');
        }
    }
}
