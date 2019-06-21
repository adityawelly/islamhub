<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>IslamHub - Forum</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Icon -->
        <link href="<?=base_url('assets/img/logo.png'); ?>" rel="icon" type="image/x-icon" />
        <!-- CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/ionicons.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/AdminLTE.min.css')?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
	<body class="hold-transition register-page">
		<div class="register-box">
			<div class="register-logo">
				<a href="http://islam-hub.web.id/"><b>IslamHub</b></a>
			</div>
			<div class="register-box-body">
				<p class="login-box-msg">Register</p>

                <!-- Nontification -->
                <?php $this->load->view('notification'); ?>

				<?=form_open('Auth/actionRegister/')?>
				<div class="form-group has-feedback">
					<label class="control-label">Username :</label>
					<input type="text" class="form-control" placeholder="Username" name="username" required="">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<label class="control-label">Email :</label>
					<input type="email" class="form-control" placeholder="Email" name="email" required="">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<label class="control-label">Password :</label>
					<input type="password" minlength="6" maxlength="16" class="form-control" placeholder="Password" name="password" required="">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<label class="control-label">Confirm password :</label>
					<input type="password" minlength="6" maxlength="16" class="form-control" placeholder="Confirm password" name="confirm_password" required="">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<a href="<?=base_url('Auth/');?>" class="pull-left" style="margin-top: 10px;">Sudah punya akun ?</a>
					</div>
					<!-- /.col -->
					<div class="col-xs-6">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Sign up</button>
					</div>
					<!-- /.col -->
				</div>
				<?=form_close();?>
			</div>
			<!-- /.form-box -->
		</div>
		<!-- /.register-box -->

        <!-- Javascript -->
        <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
        <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	</body>
</html>
