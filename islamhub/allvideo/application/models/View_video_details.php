<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class View_video_details extends CI_Model {

	var $database = "view_video_details";

	/**
	 * Rules Attributed Read Data
	 * $rules = array(
	 *  'select'    => null,
	 *  'order'     => null,
	 *  'limit'     => null,
	 *  'pagging'   => null,
	 * );
	 **/
	public function read($rules){
		if ($rules['select'] != null){
			$this->db->select($rules['select']);
		}
		if ($rules['order'] != null){
			$this->db->order_by($rules['order']);
		}
		if (count($rules['limit']) != 0 || $rules['limit'] != null){
			$limit = $rules['limit'];
			$this->db->limit($limit['awal'], $limit['akhir']);
		}
		if (count($rules['pagging']) != 0 || $rules['pagging'] != null){
			$pagging = $rules['pagging'];
			return $this->db->get($this->database, $pagging['num'], $pagging['offset']);
		}else{
			return $this->db->get($this->database);
		}
	}

	/* Extra */

	/**
	 * Rules Attributed Where Data
	 * $rules = array(
	 *  'select'    => null,
	 *  'where'     => not null or null,
	 *  'or_where'  => not null or null,
	 *  'order'     => null,
	 *  'limit'     => null,
	 *  'pagging'   => null,
	 * );
	 **/
	public function where($rules){
		if ($rules['select'] != null){
			$this->db->select($rules['select']);
		}
		if ($rules['where'] != null && $rules['or_where'] != null){
			$this->db->where($rules['where']);
			$this->db->or_where($rules['or_where']);
		}else if ($rules['where'] != null){
			$this->db->where($rules['where']);
		}else if ($rules['or_where'] != null){
			$this->db->or_where($rules['or_where']);
		}else{
			$this->db->where(1);
		}
		if ($rules['order'] != null){
			$this->db->order_by($rules['order']);
		}
		if (count($rules['limit']) != 0 || $rules['limit'] != null){
			$limit = $rules['limit'];
			$this->db->limit($limit['awal'], $limit['akhir']);
		}
		if (count($rules['pagging']) != 0 || $rules['pagging'] != null){
			$pagging = $rules['pagging'];
			return $this->db->get($this->database, $pagging['num'], $pagging['offset']);
		}else{
			return $this->db->get($this->database);
		}
	}

	/**
	 * Rules Attributed Like Data
	 * $rules = array(
	 *  'select'    => null,
	 *  'like'      => not null or null,
	 *  'or_like'    => not null or null,
	 *  'order'     => null,
	 *  'limit'     => null,
	 *  'pagging'   => null,
	 * );
	 **/
	public function like($rules){
		if ($rules['select'] != null){
			$this->db->select($rules['select']);
		}
		if ($rules['like'] != null && $rules['or_like'] != null){
			$this->db->like($rules['like']);
			$this->db->or_like($rules['or_like']);
		}else if ($rules['like'] != null){
			$this->db->like($rules['like']);
		}else if ($rules['or_like'] != null){
			$this->db->or_like($rules['or_like']);
		}else{
			$this->db->where(1);
		}
		if ($rules['order'] != null){
			$this->db->order_by($rules['order']);
		}
		if (count($rules['limit']) != 0 || $rules['limit'] != null){
			$limit = $rules['limit'];
			$this->db->limit($limit['awal'], $limit['akhir']);
		}
		if (count($rules['pagging']) != 0 || $rules['pagging'] != null){
			$pagging = $rules['pagging'];
			return $this->db->get($this->database, $pagging['num'], $pagging['offset']);
		}else{
			return $this->db->get($this->database);
		}
	}

	/**
	 * Rules Attributed Distinc Data
	 * $rules = array(
	 *  'select'    => not null,
	 *  'where'     => null,
	 *  'order'     => null,
	 * );
	 **/
	public function distinct($rules){
		$this->db->distinct();
		$this->db->select($rules['select']);
		if ($rules['where'] != null){
			$this->db->where($rules['where']);
		}
		if ($rules['order'] != null){
			$this->db->order_by($rules['order']);
		}
		return $this->db->get($this->database);
	}

}
