<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct(){
        parent::__construct();
        if($this->session->userdata('logged') != TRUE){
            $this->session->set_flashdata('message','Login terlebih dahulu.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Login');
        }
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

    function LihatPesan($penerima){
        $where = array(
            'pengirim_chat' => $this->session->userdata('id'),
            'penerima_chat' => $penerima,
            'status'    => '1',
        );
        $tblPesan = $this->TabelPesan->whereAnd($where)->result();

		$data = array(
			'title'		=> 'Riwayat Pesan',
			'content' 	=> 'Pesan/riwayat_pesan/content',
			'css' 		=> 'Pesan/riwayat_pesan/css',
			'modal' 	=> 'Pesan/riwayat_pesan/modal',
            'javascript'=> 'Pesan/riwayat_pesan/javascript',
            
            'tblPesan'   => $tblPesan,
		);
		$this->load->view('index', $data);
    }

    function Balas(){
        $data = array(
            'pengirim_chat'  => $this->session->userdata('id'),
            'penerima_chat'  => $this->input->post('penerima'),
            'subjek'    => $this->input->post('subjek'),
            'isi_chat'       => $this->input->post('isi'),
            'status'    => '1',
        );
        if ($this->TabelPesan->create($data)) {
            $this->session->set_flashdata('message','Pesan Berhasil Dibalas.');
            $this->session->set_flashdata('type_message','success');
            redirect('Pesan/PesanTerkirim');
        }else{
            $this->session->set_flashdata('message','Pesan Gagal Dikirim.');
            $this->session->set_flashdata('type_message','danger');
            redirect('Pesan/PesanTerkirim');
        }
    }

    function PesanMasuk()
	{
        $where = array(
            'penerima_chat' => $this->session->userdata('id'),
            'status'    => '1',
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
            'pengirim_chat' => $this->session->userdata('id'),
            'status'    => '1',
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
            'pengirim_chat' => $this->session->userdata('id'),
            'status'    => '0',
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
                'pengirim_chat'  => $this->session->userdata('id'),
                'penerima_chat'  => $this->input->post('penerima'),
                'subjek'    => $this->input->post('subjek'),
                'isi_chat'       => $this->input->post('isi'),
                'status'    => '0',
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
                'pengirim_chat'  => $this->session->userdata('id'),
                'penerima_chat'  => $this->input->post('penerima'),
                'subjek'    => $this->input->post('subjek'),
                'isi_chat'       => $this->input->post('isi'),
                'status'    => '1',
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
            'id_chat'   => $id
        );
        $data = array(
            'status'    => '1',
            'date_updated' => date('Y-m-d H:i:s'),
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
