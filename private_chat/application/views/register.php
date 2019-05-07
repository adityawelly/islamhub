<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
	<title>Starter Template - Materialize</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="<?=base_url('assets/css/materialize.css')?>" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="<?=base_url('assets/css/style.css')?>" type="text/css" rel="stylesheet" media="screen,projection" />

	<style>
		body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>
</head>

<body>
	<div class="section"></div>
	<main>
		<center>
			<img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
			<div class="section"></div>

			<h5 class="indigo-text">Register</h5>
			<div class="section"></div>

			<div class="container">
				<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                    <?php if (!empty($this->session->flashdata('type_message'))) { ?>
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel <?=$this->session->flashdata('type_message')?>">
                                    <span class="white-text">
                                        <?=$this->session->flashdata('message');?>
                                    </span>
                                    
                                </div>
                            </div>
                        </div>
                    <?php } ?>
					<form class="col s12" action="<?=base_url('Register/actRegister')?>" method="post">
						<div class='row'>
							<div class='col s12'>
							</div>
                        </div>
                        
                        <div class='row'>
							<div class='input-field col s12'>
								<input class='validate' type='text' name='nama' id='name' />
								<label for='name'>Enter your name</label>
							</div>
						</div>

						<div class='row'>
							<div class='input-field col s12'>
								<input class='validate' type='email' name='username' id='email' />
								<label for='email'>Enter your username</label>
							</div>
						</div>

						<div class='row'>
							<div class='input-field col s12'>
								<input class='validate' type='password' name='password' id='password' />
								<label for='password'>Enter your password</label>
							</div>
							<label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
						</div>

						<br />
						<center>
							<div class='row'>
								<button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Register</button>
							</div>
						</center>
					</form>
				</div>
			</div>
			<a href="<?=base_url('Login')?>">Login Account</a>
		</center>

		<div class="section"></div>
		<div class="section"></div>
	</main>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?=base_url('assets/js/materialize.js')?>"></script>
	<script src="<?=base_url('assets/js/init.js')?>"></script>
</body>

</html>
