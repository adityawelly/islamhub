<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Forum</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Icon -->
		<link href="<?=base_url('assets/img/logo.png'); ?>" rel="icon" type="image/x-icon" />
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>">
		<!-- Ionicons -->
		<link rel="stylesheet" href="<?=base_url('assets/css/ionicons.min.css')?>">
		<!-- CSS -->
		<?php $this->load->view($css); ?>
		<!-- Theme style -->
		<link rel="stylesheet" href="<?=base_url('assets/css/AdminLTE.min.css')?>">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="<?=base_url('assets/css/skins/_all-skins.min.css')?>">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Google Font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
	<body class="hold-transition skin-blue layout-top-nav">
		<div class="wrapper">

			<!-- Header -->
			<?php $this->load->view('header')?>

			<!-- Content -->
			<?php $this->load->view($content)?>

			<!-- Footer -->
			<?php $this->load->view('footer')?>

		</div>
		<!-- ./wrapper -->

		<!-- Modal -->
		<?php $this->load->view($modal); ?>

		<!-- jQuery 3 -->
		<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
		<!-- Javascript -->
		<?php $this->load->view($javascript); ?>
		<!-- SlimScroll -->
		<script src="<?=base_url('assets/jquery.slimscroll.min.js')?>"></script>
		<!-- FastClick -->
		<script src="<?=base_url('assets/fastclick.js')?>"></script>
		<!-- AdminLTE App -->
		<script src="<?=base_url('assets/js/adminlte.min.js')?>"></script>
	</body>
</html>
