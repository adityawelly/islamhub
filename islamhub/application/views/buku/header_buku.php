<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>IslamHub</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/dashboard/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/dashboard/images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet"> 

    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/style.css">

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <header class="header site-header">
        <div class="container">
            <nav class="navbar navbar-default yamm">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/dashboard/images/logo.png" alt="Aditya Welly"></a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="<?=base_url()?>">Beranda</a></li>
                                <li><a href="<?=base_url()?>Forum/">Forum Diskusi</a></li>
                                <li><a href="<?=base_url()?>Dashboard/">Private Chat</a></li>
                                <li><a href="<?=base_url()?>allvideo/">Video</a></li>
                                <li><a href="<?=base_url()?>file/">Buku</a></li>
                                <li class="lastlink hidden-xs hidden-sm"><a class="btn btn-primary" href="<?=base_url()?>Login/">Masuk</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav><!-- end nav -->
            </div><!-- end container -->
        </header><!-- end header -->
    <main id="site-content" role="main">
