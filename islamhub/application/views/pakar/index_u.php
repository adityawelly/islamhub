<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Update Pakar Profile</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/profile.css');?>" rel="stylesheet" />


</head>
<body>
   
   <div class="container " >
        <div class="row text-center" style="padding-top:30px;">
            <div class="col-md-12">
             <h1> Update Pakar Profile</h1> 
                <br />
           </div>
        </div>
       <div class="row " style="padding-bottom:50px; ">
           <div class="col-md-3">
               <img src="<?php echo base_url('assets/img/user.jpg'); ?>" class="img-responsive img-thumbnail" />
              
           </div>
           <div class="col-md-9">
               <div class="alert alert-info">
                   Your profile is only 45% complete, to enjoy full feaures you have to complete it 100%. 
                   <br /><br />
                   <div class="progress" style="height:5px">
  <div class="progress-bar progress-bar-striped active progress-bar-danger"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
    <span class="sr-only">45% Complete</span>
  </div>
</div>
                   To complete your profile please <a href="#">click here</a> .
               </div>
             <div class="btn-group pull-right">
  <button type="button" class="btn btn-success">My Settings</button>
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Update Profile</a></li>
    <li><a href="#">Recent Orders</a></li>
    <li><a href="#">Support Tickets</a></li>
    <li class="divider"></li>
    <li><a href="<?php echo site_url('profile/logout');?>">Logout</a></li>
  </ul>
</div>
               <br /><br />
               <hr />
               <div >
                <form action="<?php echo base_url(). 'profile/tambah_aksi_pakar'; ?>" method="post">
                  <h5><strong> Name:</strong>  <input type="text" name="nama" value="<?php echo $this->session->userdata('nama');?>" class="form-control" style="width:300px; display:inline-block;"></h5>
                  <h5><strong> Username:</strong>  <input type="text" name="username" value="<?php echo $this->session->userdata('username');?>" class="form-control" style="width:300px; display:inline-block;"></h5>  
                  <h5><strong> Password:</strong>  <input type="password" name="password" value="<?php echo $this->session->userdata('password');?>" class="form-control" style="width:300px; display:inline-block;"></h5>
                  <h5><strong> Email:</strong>  <input type="text" name="email" value="<?php echo $this->session->userdata('email');?>" class="form-control" style="width:300px; display:inline-block;"></h5>
                  <h5><strong> NIK:</strong>  <input type="number" name="nik" value="<?php echo $this->session->userdata('nik');?>" class="form-control" style="width:300px; display:inline-block;"></h5>  
                  <h5><strong> JK:</strong>  <input type="text" name="jk" value="<?php echo $this->session->userdata('jk');?>" class="form-control" style="width:300px; display:inline-block;"></h5>  
                  <h5><strong> Alamat:</strong>  <input type="text" name="alamat" value="<?php echo $this->session->userdata('alamat');?>" class="form-control" style="width:300px; display:inline-block;"></h5>  
                  <h5><strong> Tempat lahir:</strong>  <input type="text" name="tempat_lahir" value="<?php echo $this->session->userdata('username');?>" class="form-control" style="width:300px; display:inline-block;"></h5>  
                  <h5><strong> Tanggal lahir:</strong>  <input type="text" name="tgl_lahir" value="<?php echo $this->session->userdata('tgl_lahir');?>" class="form-control" style="width:300px; display:inline-block;"></h5>  
                  <h5><strong> No. Telp:</strong>  <input type="text" name="no_telp" value="<?php echo $this->session->userdata('no_telp');?>" class="form-control" style="width:300px; display:inline-block;"></h5>
                <h5><strong> Universitas:</strong>  <input type="text" name="universitas" value="<?php echo $this->session->userdata('universitas');?>" class="form-control" style="width:300px; display:inline-block;"></h5>  
                <h5><strong> Sertifikat:</strong>  <input type="text" name="sertifikat" value="<?php echo $this->session->userdata('sertifikat');?>" class="form-control" style="width:300px; display:inline-block;"></h5>   
                <h5><strong> Small Biography:</strong>  <input type="text" name="biodata" value="<?php echo $this->session->userdata('biodata');?>" class="form-control" style="width:300px; display:inline-block;"></h5>

           



                <h5>  <strong> Social Links :</strong></h5>  
                   <br />
                   <a href="#" class="btn btn-primary" >Facebook <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-danger" >Google <i class="glyphicon glyphicon-play"></i></a>
                   <a href="#" class="btn btn-info " >Twitter <i class="glyphicon glyphicon-play"></i></a>
                   </div>
                   <br>
               
                  <input type="submit" name="edit" class="form-control" style="width:12.5%;">

                   </form> 
           </div>
       </div>
       </div>
       
   </div>
       <!--  CORE SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.11.1.js'); ?>"></script>
       <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
</body>
</html>
