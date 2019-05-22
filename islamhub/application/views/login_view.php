<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>

   <section class="section transheader homepage parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?=base_url()?>assets/dashboard/images/masjid.jpg');">
            <div class="container">
                <div class="row">   
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h2>SIGN IN PLEASE</h2>
                        <h2>PAKAR or CLIENT</h2>
                        <p class="lead">Dapatkan konsultasi layanan hukum islam terpercaya dengan pakar terpercaya.</p>
                        <form class="calculateform">
                            <div class="item-box">
                                <div class="item-top form-inline">
                                    <div class="form-group">
                                        <div class="input-group2">
                                            <span class="input-addon">
                                            </span>
                                            
                                        <div class="row">
                                          <div class="col-md-6" style="padding-right:150px;"><a href="<?php echo base_url('profile/pakar');?>" class="btn btn-primary" >PAKAR <i class="glyphicon glyphicon-play"></i></a></div>
                                          <div class="col-md-6"><a href="<?php echo base_url('profile/user_b');?>" class="btn btn-primary" >CLIENT <i class="glyphicon glyphicon-play"></i></a></div>
                                        </div>

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>