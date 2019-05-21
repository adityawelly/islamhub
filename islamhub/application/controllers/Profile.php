<?php
class Profile extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));  
    $this->load->library(array('session', 'form_validation', 'email'));   
    $this->load->database();
    $this->load->model('login_model');

  }
 
  function index(){
    $this->load->view('dashboard_login');
    $this->load->view('login_view');
  }

   function pakar(){
    $this->load->view('pakar/dashboard_login');
    $this->load->view('pakar/login_view');
  }

   function user_b(){
    $this->load->view('user_b/dashboard_login');
    $this->load->view('user_b/login_view');
  }

  function u_pakar(){
    $this->load->view('pakar/dashboard_login');
    $this->load->view('pakar/index_u');
  }
 
  function r_pakar(){
    $this->form_validation->set_rules('username','User Name','required');
    $this->form_validation->set_rules('password','User Password','required');
    $this->form_validation->set_rules('email','user_email','required');
    $this->form_validation->set_rules('no_telp','User Contact','required');

    if($this->form_validation->run() == TRUE)
    {
      $nama = $this->input->post('nama',TRUE);
      $nik = $this->input->post('nik',TRUE);
      $jk = $this->input->post('jk',TRUE);
      $alamat = $this->input->post('alamat',TRUE);
      $tempat_lahir = $this->input->post('tempat_lahir',TRUE);
      $tgl_lahir = $this->input->post('tgl_lahir',TRUE);
      $universitas = $this->input->post('universitas',TRUE);
      $sertifikat = $this->input->post('sertifikat',TRUE);
      $biodata = $this->input->post('biodata',TRUE);
      $foto = $this->input->post('foto',TRUE);
      $username = $this->input->post('username',TRUE);
      $password      = md5($this->input->post('password',TRUE));
      $email  = $this->input->post('email',TRUE);
      $no_telp  = $this->input->post('no_telp',TRUE);
      
      $data = array(
            'nama' => $nama,
            'nik' => $nik,
            'jk' => $jk,
            'alamat' => $alamat,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'universitas' => $universitas,
            'sertifikat' => $sertifikat,
            'biodata' => $biodata,
            'foto' => $foto,
            'username' => $username,
            'password' => $password,
            'email'  => $email,
            'no_telp'  => $no_telp
      );

      $this->login_model->simpan_pakar($data);

      $this->session->set_flashdata('msg_berhasil','Anda berhasil Daftar');
      redirect(base_url('profile/r_pakar'));
    }else {
       $this->load->helper(array('captcha','url'));
       $this->load->library('session');
      $vals = array(
        'img_path' => './captcha/',
        'img_url' => base_url().'captcha/',
        'img_width' => 170,
        'img_height' => 45,
        'expiration' => 7200
        );
        $cap = create_captcha($vals);
        $this->session->set_userdata('keycode',md5($cap['word']));
        $data['image'] = $cap['image'];
        $this->load->view('pakar/dashboard_login');
      $this->load->view('pakar/registrasi',$data);

    }
  }

  function r_user_b(){
     $this->form_validation->set_rules('username','User Name','required');
    $this->form_validation->set_rules('password','User Password','required');
    $this->form_validation->set_rules('email','user_email','required');
    if($this->form_validation->run() == TRUE)
    {
      $username = $this->input->post('username',TRUE);
      $password      = md5($this->input->post('password',TRUE));
      $email  = $this->input->post('email',TRUE);
      $avatar  = $this->input->post('avatar',TRUE);
      $created_at  = '1';
      $update_at  = '1';
      $update_by  = '0';
      $is_admin  = '1';
      $is_moderator  = '1';
      $is_confirmed  = '1';
      $is_deleted  = '1';


      $data = array(
            'username' => $username,
            'password'      => $password,
            'email'  => $email,
            'avatar' => $avatar,
            'created_at' => $created_at,
            'updated_at' => $update_at,
            'updated_by' => $update_by,
            'is_admin' => $is_admin,
            'is_moderator' => $is_moderator,
            'is_confirmed' => $is_confirmed,
            'is_deleted' => $is_deleted,
      );
      $this->login_model->simpan_user($data);

      $this->session->set_flashdata('msg_berhasil','Anda berhasil Daftar');
      redirect(base_url('profile/r_user_b'));
    }else {
       $this->load->view('user_b/dashboard_login');
      $this->load->view('user_b/registrasi');
    }

  }

  function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $email = $data['user_email'];
        $level = $data['user_level'];
        $sesdata = array(
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('page');
 
        // access login for staff
        }elseif($level === '2'){
            redirect('page/staff');
 
        // access login for author
        }else{
            redirect('page/author');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('profile');
    }
  }

  function auth_p(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate_p($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $nama  = $data['nama'];
        $email = $data['email'];
        $date_created = $data['date_created'];
        $biodata = $data['biodata'];
        $univ = $data['universitas'];
        $sesdata = array(
            'nama'  => $nama,
            'email'     => $email,
            'date_created' => $date_created,
            'biodata' => $biodata,
            'universitas' => $univ,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
         $this->load->view('pakar/dashboard_view');
         $this->load->view('pakar/index');
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('profile');
    }
  }

  function auth_u(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate_u($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $nama  = $data['username'];
        $email = $data['email'];
        $sesdata = array(
            'username'  => $nama,
            'email'     => $email,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        $this->load->view('user_b/dashboard_view');
        $this->load->view('user_b/index');
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('profile');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('profile');
  }
 
}