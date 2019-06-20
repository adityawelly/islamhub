<?php
class Login_model extends CI_Model{
 
  function validate_p($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('pakar',1);
    return $result;
  }

  function validate_u($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    // $this->db->where('is_moderator',1);
    $result = $this->db->get('users',1);
    return $result;
  }

    public function simpan_pakar($data)
    {

        $this->db->insert("pakar", $data);

    }

    public function simpan_user($data)
    {

        $this->db->insert("users", $data);

    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function changeActiveState($key)
    {
    $this->load->database();
    $data = array(
    'active' => 1
    );
    
    $this->db->where('md5(user_id)', $key);
    $this->db->update('users', $data);
    
    return true;
    }

    var $database = "users";

    function create($data){
        if($this->db->insert($this->database,$data)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     Rules Attributed Read Data
     $rules = array(
      'select'    => null,
      'order'     => null,
      'limit'     => null,
      'pagging'   => null,
     );
     **/
    function read($rules){
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

    /**
     Rules Attributed Update Data
     $rules = array(
      'where' => not null,
      'data'  => not null,
     );
     **/
    function update($rules){
        $this->db->where($rules['where']);
        if($this->db->update($this->database,$rules['data'])){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    function delete($where){
        $this->db->where($where);
        if($this->db->delete($this->database)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /* Extra */

    /**
     Rules Attributed Where Data
     $rules = array(
      'select'    => null,
      'where'     => null, //not null or null
    'or_where'  => null, //not null or null
      'order'     => null,
      'limit'     => null,
      'pagging'   => null,
     );
     **/
    function where($rules){
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
     Rules Attributed Like Data
     $rules = array(
      'select'    => null,
      'like'      => null, //not null or null
      'or_like'   => null, //not null or null
      'order'     => null,
      'limit'     => null,
      'pagging'   => null,
     );
     **/
    function like($rules){
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
     Rules Attributed Distinc Data
     $rules = array(
      'select'    => null, //not null
      'where'     => null,
      'order'     => null,
     );
     **/
    function distinct($rules){
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