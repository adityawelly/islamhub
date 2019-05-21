<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
     <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/style.css">
    <style>
        .tulisan{
          font-size:30px;
          margin-top:10px;
          
        }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header" style="padding-bottom:20px;">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/dashboard/images/logo.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                  <li ><a href="<?php echo base_url('profile/user_b');?>" class="tulisan">login</a></li>
                  <li><a href="<?php echo base_url('profile/r_user_b');?>" class="tulisan">register</a></li>
                
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Assalamualaikum</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
 
      </div>
    </div>
 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>