<?php
class Profile extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));  
    $this->load->library(array('session', 'form_validation', 'email'));   
    $this->load->database();
    $this->load->model('login_model');
    $this->load->model('TabelUsers');
    $this->load->model('TabelPakar');
  }
 
  function index(){
    $this->load->view('dashboard_login');
    $this->load->view('login_view');
    $this->load->view('footer');
  }

   function pakar(){
    $this->load->view('pakar/dashboard_login');
    $this->load->view('pakar/login_view');
    $this->load->view('footer');
  }

   function user_b(){
    $this->load->view('user_b/dashboard_login');
    $this->load->view('user_b/login_view');
    $this->load->view('footer');
  }

   function u_user_b(){
      $this->load->view('user_b/index_u');
  }

  function u_pakar(){
    $this->load->view('pakar/dashboard_login');
    $this->load->view('pakar/index_u');
  }
 
  // function r_pakar(){
  //   $this->form_validation->set_rules('password','User Password','required');
  //   $this->form_validation->set_rules('email','user_email','required');
  //   $this->form_validation->set_rules('no_telp','User Contact','required');

  //   if($this->form_validation->run() == TRUE)
  //   {
  //     $nama = $this->input->post('nama',TRUE);
  //     $nik = $this->input->post('nik',TRUE);
  //     $jk = $this->input->post('jk',TRUE);
  //     $alamat = $this->input->post('alamat',TRUE);
  //     $tempat_lahir = $this->input->post('tempat_lahir',TRUE);
  //     $tgl_lahir = $this->input->post('tgl_lahir',TRUE);
  //     $universitas = $this->input->post('universitas',TRUE);
  //     $sertifikat = $this->input->post('sertifikat',TRUE);
  //     $biodata = $this->input->post('biodata',TRUE);
  //     $foto = $this->input->post('foto',TRUE);
  //     $password      = md5($this->input->post('password',TRUE));
  //     $email  = $this->input->post('email',TRUE);
  //     $no_telp  = $this->input->post('no_telp',TRUE);
      
  //     $data = array(
  //           'nama' => $nama,
  //           'nik' => $nik,
  //           'jk' => $jk,
  //           'alamat' => $alamat,
  //           'tempat_lahir' => $tempat_lahir,
  //           'tgl_lahir' => $tgl_lahir,
  //           'universitas' => $universitas,
  //           'sertifikat' => $sertifikat,
  //           'biodata' => $biodata,
  //           'foto' => $foto,
  //           'password' => $password,
  //           'email'  => $email,
  //           'no_telp'  => $no_telp
  //     );

  //     $this->login_model->simpan_pakar($data);

  //     $this->session->set_flashdata('msg_berhasil','Anda berhasil Daftar');
  //     redirect(base_url('profile/r_pakar'));
  //   }else {
  //      $this->load->helper(array('captcha','url'));
  //      $this->load->library('session');
  //     $vals = array(
  //       'img_path' => './captcha/',
  //       'img_url' => base_url().'captcha/',
  //       'img_width' => 170,
  //       'img_height' => 45,
  //       'expiration' => 7200
  //       );
  //       $cap = create_captcha($vals);
  //       $this->session->set_userdata('keycode',md5($cap['word']));
  //       $data['image'] = $cap['image'];
  //       $this->load->view('pakar/dashboard_login');
  //     $this->load->view('pakar/registrasi',$data);
  //     $this->load->view('footer');

  //   }
  // }

  function r_pakar_u(){
     $this->form_validation->set_rules('username','User Name','required');
    $this->form_validation->set_rules('password','User Password','required');
    $this->form_validation->set_rules('email','user_email','required');
    if($this->form_validation->run() == TRUE)
    {
      $username = $this->input->post('username',TRUE);
      $password      = md5($this->input->post('password',TRUE));
      $email  = $this->input->post('email',TRUE);
      $avatar  = $this->input->post('avatar',TRUE);
      $created_at  = '0';
      $update_at  = '0';
      $update_by  = '0';
      $is_admin  = '0';
      $is_moderator  = '1';
      $is_confirmed  = '0';
      $is_deleted  = '0';


      $data = array(
            'username' => $username,
            'password' => $password,
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
      redirect(base_url('profile/r_pakar_u'));
    }else {
       $this->load->view('pakar/dashboard_login');
      $this->load->view('pakar/registrasi1');
      $this->load->view('footer');
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
      $created_at  = '0';
      $update_at  = '0';
      $update_by  = '0';
      $is_admin  = '0';
      $is_moderator  = '0';
      $is_confirmed  = '0';
      $is_deleted  = '0';


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
      $this->load->view('footer');
    }

  }

  function auth_p(){
    $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate_u($email,$password);
    $data  = $validate->row_array();
    if($validate->num_rows() > 0){
        
        $sesdata = array(
            'id' => $data['id'],
            'username'  => $data['username'],
            'email'  => $data['email'],
            'avatar' => $data['avatar'],
            'created_at' => $data['created_at'],
            'update_at' => $data['update_at'],
            'is_admin' => $data['is_admin'],
            'is_moderator' => $data['is_moderator'],
            'is_confirmed' => $data['is_confirmed'],
            'is_deleted' => $data['is_deleted'],
            'logged' => TRUE
        );
        $this->session->set_userdata($sesdata);
        redirect('Pakar');
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
        $this->load->view('user_b/index');
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('profile');
    }
  }

   function tambah_aksi_user(){
    $nama = $this->input->post('username');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
 
    $data = array(
      'username' => $nama,
      'email' => $email,
      'password' => $password
      );
    $this->login_model->input_data($data,'users');
    redirect('profile/auth_u');
  }


  function tambah_aksi_pakar(){
    $nama = $this->input->post('nama');
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $nik = $this->input->post('nik');
    $jk = $this->input->post('jk');
    $alamat = $this->input->post('alamat');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tgl_lahir = $this->input->post('tgl_lahir');
    $no_telp = $this->input->post('no_telp');
    $universitas = $this->input->post('universitas');
    $sertifikat = $this->input->post('sertifikat');
    $biodata = $this->input->post('biodata');
 
    $data = array(
      'nama' => $nama,
      'username' => $username,
      'email' => $email,
      'password' => $password,
      'nik' => $nik,
      'jk' => $jk,
      'alamat' => $alamat,
      'tempat_lahir' => $tempat_lahir,
      'tgl_lahir' => $tgl_lahir,
      'no_telp' => $no_telp,
      'universitas' => $universitas,
      'sertifikat' => $sertifikat,
      'biodata' => $biodata
      );
    $this->login_model->input_data($data,'pakar');
    redirect('profile/auth_p');
  }

 
  function logout(){
      $this->session->sess_destroy();
      redirect('halaman_awal');
  }
 
}