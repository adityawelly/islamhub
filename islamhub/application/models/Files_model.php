<?php
class Files_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function getAllFiles(){
		$query = $this->db->get('files');
		return $query->result(); 
	}
	
	public function insertfile($file){
		return $this->db->insert('files', $file);
	}

	public function download($id){
		$query = $this->db->get_where('files',array('id'=>$id));
		return $query->row_array();
	}
	
}
?>