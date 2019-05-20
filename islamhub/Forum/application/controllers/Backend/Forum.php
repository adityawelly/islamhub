<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Forum extends CI_Controller {

	function __construct(){
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		if ($this->session->userdata('logged') == FALSE) {
			$this->session->set_flashdata('message','Session tidak tersedia.');
			$this->session->set_flashdata('type_message','danger');
			redirect('Auth/');
		}
		if ($this->session->userdata('is_admin') != 1) {
			$this->session->set_flashdata('message','Hak akses ditolak.');
			$this->session->set_flashdata('type_message','danger');
			redirect('Auth/Logout/');
		}

		$this->load->model('Tbl_forums');
		$this->load->model('Tbl_topics');
		$this->load->model('Tbl_posts');
    }

	function index(){
        $rules = array(
            'select'    => null,
            'order'     => null,
            'limit'     => null,
            'pagging'   => null,
        );
        $tblForum = $this->Tbl_forums->read($rules)->result();
		$topics = array();
        foreach ($tblForum as $a){
			$rules = array(
				'select'    => null,
				'where'     => array(
					'forum_id' => $a->id
				), //not null or null
				'or_where'  => null, //not null or null
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
        	$topics[$a->id] = $this->Tbl_topics->where($rules)->num_rows();
		}
		$data = array(
            'content'       => 'backend/forums/content',
            'css'           => 'backend/forums/css',
            'javascript'    => 'backend/forums/javascript',
            'modal'         => 'backend/forums/modal',
			'tblForum'      => $tblForum,
			'topics'		=> $topics,
		);
		$this->load->view('backend/index',$data);
	}

	function Topics($forum_id){
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id' => $forum_id
			), //not null or null
			'or_where'  => null, //not null or null
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$tblForum = $this->Tbl_forums->where($rules)->row();
		$rules = array(
			'select'    => null,
			'where'     => array(
				'forum_id' => $forum_id
			), //not null or null
			'or_where'  => null, //not null or null
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$tblTopics = $this->Tbl_topics->where($rules)->result();
		$posts = array();
		foreach ($tblTopics as $a){
			$rules = array(
				'select'    => null,
				'where'     => array(
					'topic_id' => $a->id
				), //not null or null
				'or_where'  => null, //not null or null
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$posts[$a->id] = $this->Tbl_posts->where($rules)->num_rows();
		}
		$data = array(
			'content'       => 'backend/topics/content',
			'css'           => 'backend/topics/css',
			'javascript'    => 'backend/topics/javascript',
			'modal'         => 'backend/topics/modal',
			'tblForum'		=> $tblForum,
			'tblTopics'	    => $tblTopics,
			'posts'			=> $posts,
		);
		$this->load->view('backend/index',$data);
	}

	function Posts($forum_id, $topic_id){
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id' => $forum_id
			), //not null or null
			'or_where'  => null, //not null or null
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$tblForum = $this->Tbl_forums->where($rules)->row();
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id' => $topic_id
			), //not null or null
			'or_where'  => null, //not null or null
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$tblTopic = $this->Tbl_topics->where($rules)->row();
		$rules = array(
			'select'    => null,
			'where'     => array(
				'topic_id' => $topic_id
			), //not null or null
			'or_where'  => null, //not null or null
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$tblPosts = $this->Tbl_posts->where($rules)->result();
		$data = array(
			'content'       => 'backend/posts/content',
			'css'           => 'backend/posts/css',
			'javascript'    => 'backend/posts/javascript',
			'modal'         => 'backend/posts/modal',
			'tblForum'		=> $tblForum,
			'tblTopic'	    => $tblTopic,
			'tblPosts'		=> $tblPosts,
		);
		$this->load->view('backend/index',$data);
	}

	function Create(){
		$rules[] = array('field' => 'username',	'label' => 'Username',  'rules' => 'required');
		$rules[] = array('field' => 'password',	'label' => 'Password',  'rules' => 'required');
		$rules[] = array('field' => 'nama',     'label' => 'Nama',      'rules' => 'required');
		$rules[] = array('field' => 'level',	'label' => 'Level',     'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Settings/Users/');
		}else{
		    try{
		        $level = $this->input->post('level');
                $keterangan = $this->fakultas($level, $this->input->post('id_fakultas'));
                $data = array(
                    'username'	=> strtolower(str_replace(' ', '', $this->input->post('username')).'@'.$this->input->post('level')),
                    'password'	=> md5(md5($this->input->post('password'))),
                    'nama'		=> strtoupper($this->input->post('nama')),
                    'level'		=> $level,
                    'keterangan'=> $keterangan,
                );
                $this->Tbl_setting_users->create($data);
                $this->session->set_flashdata('message','Data berhasil disimpan.');
                $this->session->set_flashdata('type_message','success');
                redirect('Settings/Users/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Settings/Users/');
            }
		}
	}

	function Update($id){
        $rules[] = array('field' => 'username',	'label' => 'Username',  'rules' => 'required');
        $rules[] = array('field' => 'nama',     'label' => 'Nama',      'rules' => 'required');
        $rules[] = array('field' => 'level',	'label' => 'Level',     'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Settings/Users/');
		}else{
		    try{
                $level = $this->input->post('level');
                $keterangan = $this->fakultas($level, $this->input->post('id_fakultas'));
                $password = $this->input->post('password');
                if (!empty($password)) {
                    $data = array(
                        'username'	=> strtolower(str_replace(' ', '', $this->input->post('username')).'@'.$this->input->post('level')),
                        'password'	=> md5(md5($password)),
                        'nama'		=> strtoupper($this->input->post('nama')),
                        'level'		=> $level,
                        'keterangan'=> $keterangan,
                    );
                }else{
                    $data = array(
                        'username'	=> strtolower(str_replace(' ', '', $this->input->post('username')).'@'.$this->input->post('level')),
                        'nama'		=> strtoupper($this->input->post('nama')),
                        'level'		=> $level,
                        'keterangan'=> $keterangan,
                    );
                }
                $rules = array(
                    'where' => array('id_users' => $id),
                    'data'  => $data,
                );
                $this->Tbl_setting_users->update($rules);
                $this->session->set_flashdata('message','Data berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Settings/Users/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Settings/Users/');
            }
		}
	}

	function Delete($id){
	    try{
	        $rules = array('id_users' => $id);
            $this->Tbl_setting_users->delete($rules);
            $this->session->set_flashdata('message','Data berhasil dihapus.');
            $this->session->set_flashdata('type_message','success');
            redirect('Settings/Users');
        }catch (Exception $e){
            $this->session->set_flashdata('message', $e->getMessage());
            $this->session->set_flashdata('type_message','danger');
            redirect('Settings/Users');
        }
	}

	private function fakultas($level, $id_fakultas){
        if ($level == "FAKULTAS"){
            $rules = array(
                'select'    => null,
                'where'     => array('id_fakultas' => $id_fakultas),
                'or_where'  => null,
                'order'     => null,
                'limit'     => null,
                'pagging'   => null,
            );
            $tblSFakultas = $this->Tbl_setting_fakultas->where($rules)->row();
            $keterangan = json_encode(array(
                'id_fakultas'	=> $tblSFakultas->id_fakultas,
                'fakultas' 		=> $tblSFakultas->fakultas,
            ));
        }else{
            $keterangan = '-';
        }
        return $keterangan;
    }

}
