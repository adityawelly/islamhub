<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Tbl_forums');
		$this->load->model('Tbl_topics');
		$this->load->model('View_topics');
		$this->load->model('Tbl_posts');
		$this->load->model('View_posts');
	}

	function index(){
		$rules = array(
			'select'    => null,
			'order'     => 'created_at DESC',
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
			'content'	=> 'forum/content',
			'css'		=> 'forum/css',
			'javascript'=> 'forum/javascript',
			'modal'		=> 'forum/modal',
			'tblForum'	=> $tblForum,
			'topics'	=> $topics,
		);
		$this->load->view('index',$data);
	}

	function Cari(){
		$rules[] = array('field' => 'search',	'label' => 'Search', 'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message', validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Forum');
		}else{
			$search = $this->input->post('search');
			$search = str_replace(' ', '%', $search);
			$rules = array(
				'select'    => null,
				'like'      => null, //not null or null
				'or_like'   => array(
					'title' => $search,
					'description' => $search,
				), //not null or null
				'order'     => null,
				'limit'     => null,
				'pagging'   => null,
			);
			$tblForum = $this->Tbl_forums->like($rules)->result();
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
				'content'	=> 'cari/content',
				'css'		=> 'cari/css',
				'javascript'=> 'cari/javascript',
				'modal'		=> 'cari/modal',
				'tblForum'	=> $tblForum,
				'topics'	=> $topics,
			);
			$this->load->view('index',$data);
		}
	}

	function Topics($id){
		$rules = array(
			'select'    => null,
			'where'     => array(
				'id' => $id
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
				'forum_id' => $id
			), //not null or null
			'or_where'  => null, //not null or null
			'order'     => null,
			'limit'     => null,
			'pagging'   => null,
		);
		$tblTopics = $this->View_topics->where($rules)->result();
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
			'content'       => 'topics/content',
			'css'           => 'topics/css',
			'javascript'    => 'topics/javascript',
			'modal'         => 'topics/modal',
			'tblForum'		=> $tblForum,
			'tblTopics'	    => $tblTopics,
			'posts'			=> $posts,
		);
		$this->load->view('index',$data);
	}

	function Posts($forum_id, $topic_id){
		$rules = array(
			'select' => null,
			'where' => array(
				'id' => $forum_id
			), //not null or null
			'or_where' => null, //not null or null
			'order' => null,
			'limit' => null,
			'pagging' => null,
		);
		$tblForum = $this->Tbl_forums->where($rules)->row();
		$rules = array(
			'select' => null,
			'where' => array(
				'id' => $topic_id
			), //not null or null
			'or_where' => null, //not null or null
			'order' => null,
			'limit' => null,
			'pagging' => null,
		);
		$tblTopics = $this->View_topics->where($rules)->row();
		$rules = array(
			'select' => null,
			'where' => array(
				'topic_id' => $topic_id
			), //not null or null
			'or_where' => null, //not null or null
			'order' => null,
			'limit' => null,
			'pagging' => null,
		);
		$tblPosts = $this->View_posts->where($rules)->result();
		$data = array(
			'content' => 'posts/content',
			'css' => 'posts/css',
			'javascript' => 'posts/javascript',
			'modal' => 'posts/modal',
			'tblForum' => $tblForum,
			'tblTopics' => $tblTopics,
			'tblPosts' => $tblPosts,
		);
		$this->load->view('index', $data);
	}

	function Createtopic($id){
		$rules[] = array('field' => 'title',	'label' => 'title',  'rules' => 'required');
		$rules[] = array('field' => 'slug',	'label' => 'slug',  'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Forum/Topics/'.$id);
		}else{
		    try{
                $data = array(
                    'title'	=> $this->input->post('title'),
					'slug' => $this->input->post('slug'),
					'user_id'=>$this->session->userdata('id'),
					'forum_id'=>$id,
                );
                $this->Tbl_topics->create($data);
                $this->session->set_flashdata('message','Data berhasil disimpan.');
                $this->session->set_flashdata('type_message','success');
                redirect('Forum/Topics/'.$id);
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Forum/Topics/'.$id);
            }
		}
	}

	function Createpost($forum_id, $topic_id){
		$rules[] = array('field' => 'content',	'label' => 'content',  'rules' => 'required');
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('message',validation_errors());
			$this->session->set_flashdata('type_message','danger');
			redirect('Forum/Posts/'.$forum_id.'/'.$topic_id);
		}else{
		    try{
                $data = array(
                    'content'	=> $this->input->post('content'),
					'user_id'=>$this->session->userdata('id'),
					'topic_id'=>$topic_id,
                );
                $this->Tbl_posts->create($data);
                $this->session->set_flashdata('message','Data berhasil disimpan.');
                $this->session->set_flashdata('type_message','success');
                redirect('Forum/Posts/'.$forum_id.'/'.$topic_id);
            }catch (Exception $e){
                $this->session->set_flashdata('message', $e->getMessage());
                $this->session->set_flashdata('type_message','danger');
                redirect('Forum/Posts/'.$forum_id.'/'.$topic_id);
            }
		}
	}
}
