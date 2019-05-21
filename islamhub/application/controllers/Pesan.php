<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('TabelPakar');
        $this->load->model('TabelClient');
        $this->load->model('TabelPesan');
    }

	public function index()
	{
        $where = array(

        );
		$data = array(
			'title'		=> 'Tambah Pesan',
			'content' 	=> 'Pesan/tambah_pesan/content',
			'css' 		=> 'Pesan/tambah_pesan/css',
			'modal' 	=> 'Pesan/tambah_pesan/modal',
            'javascript'=> 'Pesan/tambah_pesan/javascript',
            
            'tblPakar'   => $this->TabelPakar->read()->result(),
            'tblClient'   => $this->TabelClient->read()->result(),
		);
		$this->load->view('index', $data);
    }

    function PesanMasuk()
	{
        $where = array(
            'PENERIMA_CHAT' => $this->session->userdata('email'),
            'STATUS'    => '1',
        );
        $tblPesan = $this->TabelPesan->whereAnd($where)->result();

		$data = array(
			'title'		=> 'Pesan Masuk',
			'content' 	=> 'Pesan/pesan_masuk/content',
			'css' 		=> 'Pesan/pesan_masuk/css',
			'modal' 	=> 'Pesan/pesan_masuk/modal',
            'javascript'=> 'Pesan/pesan_masuk/javascript',
            
            'tblPesan'   => $tblPesan,
		);
		$this->load->view('index', $data);
    }

    function PesanTerkirim()
	{
        $where = array(
            'PENGIRIM_CHAT' => $this->session->userdata('email'),
            'STATUS'    => '1',
        );
        $tblPesan = $this->TabelPesan->whereAnd($where)->result();

		$data = array(
			'title'		=> 'Pesan Terkirim',
			'content' 	=> 'Pesan/pesan_terkirim/content',
			'css' 		=> 'Pesan/pesan_terkirim/css',
			'modal' 	=> 'Pesan/pesan_terkirim/modal',
            'javascript'=> 'Pesan/pesan_terkirim/javascript',
            
            'tblPesan'   => $tblPesan,
		);
		$this->load->view('index', $data);
    }

    function DraftPesan()
	{
        $where = array(
            'PENGIRIM_CHAT' => $this->session->userdata('email'),
            'STATUS'    => '0',
        );
        $tblPesan = $this->TabelPesan->whereAnd($where)->result();

		$data = array(
			'title'		=> 'Draft Pesan',
			'content' 	=> 'Pesan/draft_pesan/content',
			'css' 		=> 'Pesan/draft_pesan/css',
			'modal' 	=> 'Pesan/draft_pesan/modal',
            'javascript'=> 'Pesan/draft_pesan/javascript',
            
            'tblPesan'   => $tblPesan,
		);
		$this->load->view('index', $data);
    }
    
    function Kirim(){
        if($this->input->post('btn-submit') == "draft"){
            $data = array(
                'PENGIRIM_CHAT'  => $this->session->userdata('email'),
                'PENERIMA_CHAT'  => $this->input->post('penerima'),
                'SUBJEK'    => $this->input->post('subjek'),
                'ISI_CHAT'       => $this->input->post('isi'),
                'STATUS'    => '0',
                'SEND_AT' => date('Y-m-d'),
            );
            if ($this->TabelPesan->create($data)) {
                $this->session->set_flashdata('message','Pesan Berhasil Disimpan.');
                $this->session->set_flashdata('type_message','success');
                redirect('Pesan/DraftPesan');
            }else{
                $this->session->set_flashdata('message','Pesan Gagal Disimpan.');
                $this->session->set_flashdata('type_message','danger');
                redirect('Pesan/DraftPesan');
            }
        }else{
            $data = array(
                'PENGIRIM_CHAT'  => $this->session->userdata('email'),
                'PENERIMA_CHAT'  => $this->input->post('penerima'),
                'SUBJEK'    => $this->input->post('subjek'),
                'ISI_CHAT'       => $this->input->post('isi'),
                'STATUS'    => '1',
                'SEND_AT' => date('Y-m-d'),
            );
            if ($this->TabelPesan->create($data)) {
                $this->session->set_flashdata('message','Pesan Berhasil Dikirim.');
                $this->session->set_flashdata('type_message','success');
                redirect('Pesan/PesanTerkirim');
            }else{
                $this->session->set_flashdata('message','Pesan Gagal Dikirim.');
                $this->session->set_flashdata('type_message','danger');
                redirect('Pesan/PesanTerkirim');
            }
        }
    }

    function KirimUlang($id){
        $where = array(
            'ID_CHAT'   => $id
        );
        $data = array(
            'STATUS'    => '1',
            'SEND_AT' => date('Y-m-d'),
        );
        if ($this->TabelPesan->update($where, $data)) {
            $this->session->set_flashdata('message','Pesan Berhasil Dikirim.');
            $this->session->set_flashdata('type_message','success');
            redirect('Pesan/PesanTerkirim');
        }else{
            $this->session->set_flashdata('message','Pesan Gagal Dikirim.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Pesan/PesanTerkirim');
        }
    }
}
