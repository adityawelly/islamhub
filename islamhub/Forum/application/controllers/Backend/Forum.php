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
		$rules[] = array('field' => 'title',	'label' => 'title',  'rules' => 'required');
		$rules[] = array('field' => 'slug',	'label' => 'slug',  'rules' => 'required');
		$rules[] = array('field' => 'description',     'label' => 'description',      'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Forum/');
		}else{
		    try{
                $data = array(
                    'title'	=> $this->input->post('title'),
					'slug' => $this->input->post('slug'),
					'description' => $this->input->post('description'),
                );
                $this->Tbl_forums->create($data);
                $this->session->set_flashdata('message','Data berhasil disimpan.');
                $this->session->set_flashdata('type_message','success');
                redirect('Backend/Forum/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Backend/Forum/');
            }
		}
	}

	function Update($id){
        $rules[] = array('field' => 'title',	'label' => 'title',  'rules' => 'required');
        $rules[] = array('field' => 'slug',     'label' => 'slug',      'rules' => 'required');
        $rules[] = array('field' => 'description',	'label' => 'description',     'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Forum/');
		}else{
		    try{
                $rules = array(
                    'where' => array('id' => $id),
                    'data'  => array(
						'title'	=> $this->input->post('title'),
						'slug' => $this->input->post('slug'),
						'description' => $this->input->post('description'),
					),
                );
                $this->Tbl_forums->update($rules);
                $this->session->set_flashdata('message','Data berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Backend/Forum/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Backend/Forum/');
            }
		}
	}

	function Updatetopic($id){
        $rules[] = array('field' => 'title',	'label' => 'title',  'rules' => 'required');
        $rules[] = array('field' => 'slug',     'label' => 'slug',      'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Forum/');
		}else{
		    try{
                $rules = array(
                    'where' => array('id' => $id),
                    'data'  => array(
						'title'	=> $this->input->post('title'),
						'slug' => $this->input->post('slug'),
					),
                );
                $this->Tbl_topics->update($rules);
                $this->session->set_flashdata('message','Data berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Backend/Forum/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Backend/Forum/');
            }
		}
	}

	function Updatepost($id){
        $rules[] = array('field' => 'content',	'label' => 'content',  'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Backend/Forum/');
		}else{
		    try{
                $rules = array(
                    'where' => array('id' => $id),
                    'data'  => array(
						'content'	=> $this->input->post('content'),
					),
                );
                $this->Tbl_posts->update($rules);
                $this->session->set_flashdata('message','Data berhasil diubah.');
                $this->session->set_flashdata('type_message','success');
                redirect('Backend/Forum/');
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Backend/Forum/');
            }
		}
	}
	function Delete($id){
	    try{
	        $rules = array('id' => $id);
            $this->Tbl_forums->delete($rules);
            $this->session->set_flashdata('message','Data berhasil dihapus.');
            $this->session->set_flashdata('type_message','success');
            redirect('Backend/Forum');
        }catch (Exception $e){
            $this->session->set_flashdata('message', $e->getMessage());
            $this->session->set_flashdata('type_message','danger');
            redirect('Backend/Forum');
        }
	}
	function Deletetopic($id){
	    try{
	        $rules = array('id' => $id);
            $this->Tbl_topics->delete($rules);
            $this->session->set_flashdata('message','Data berhasil dihapus.');
            $this->session->set_flashdata('type_message','success');
            redirect('Backend/Forum');
        }catch (Exception $e){
            $this->session->set_flashdata('message', $e->getMessage());
            $this->session->set_flashdata('type_message','danger');
            redirect('Backend/Forum');
        }
	}

}
