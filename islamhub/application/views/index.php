
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/uin.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ISLAMHUB | <?=$title?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?=base_url()?>assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url()?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <?php $this->load->view($css) ?>
</head>

<body>
    <div class="wrapper">
        <?php $this->load->view('template/header-sidebar');?>

        <div class="main-panel">
            <?php $this->load->view('template/header-navbar');?>
            <div class="content">
                <?php $this->load->view($content) ?>
            </div>
            <?php $this->load->view('template/footer') ?>
        </div>
    </div>

    <?php $this->load->view($modal) ?>
</body>
<!--   Core JS Files   -->
<script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?=base_url()?>assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?=base_url()?>assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?=base_url()?>assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?=base_url()?>assets/js/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?=base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?=base_url()?>assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?=base_url()?>assets/js/nouislider.min.js"></script>
<!-- Select Plugin -->
<script src="<?=base_url()?>assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?=base_url()?>assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?=base_url()?>assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?=base_url()?>assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?=base_url()?>assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?=base_url()?>assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?=base_url()?>assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=base_url()?>assets/js/demo.js"></script>
<?php $this->load->view($javascript) ?>

</html>