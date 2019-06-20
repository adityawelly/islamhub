<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tabelpesan extends CI_Model {

    protected $table = "private_chat";

	public function create($data){
		if($this->db->insert($this->table,$data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function read() {
		return $this->db->get($this->table);
	}

	public function update($where,$data){
		$this->db->where($where);
		if($this->db->update($this->table,$data)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function delete($where){
		$this->db->where($where);
		if($this->db->delete($this->table)){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function whereAnd($data){
		$this->db->where($data);
		$this->db->order_by('id_chat', 'DESC');
		return $this->db->get($this->table);
	}

    public function whereOr($data){
        $this->db->or_where($data);
        return $this->db->get($this->table);
    }

	public function likeAnd($data){
		$this->db->like($data);
		return $this->db->get($this->table);
	}

	public function likeOr($data){
		$this->db->or_like($data);
		return $this->db->get($this->table);
	}

	public function hitungPesan()
{   
    $query = $this->db->get('private_chat');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

}