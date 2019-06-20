<?php
class Login_model extends CI_Model{
 
  function validate_p($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('users',1);
    return $result;
  }

  function validate_u($email,$password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);
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
}