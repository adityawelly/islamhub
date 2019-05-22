<header class="main-header">
	<nav class="navbar navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<a href="<?=base_url('');?>" class="navbar-brand"><b>Forum</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<i class="fa fa-bars"></i>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="<?=base_url('')?>">Home</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search" method="POST" action="<?=base_url('Forum/Cari/')?>" required="">
					<div class="form-group">
						<input type="text" name="search" class="form-control" id="navbar-search-input" placeholder="Search">
					</div>
				</form>
			</div>
			<!-- /.navbar-collapse -->
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<?php if ($this->session->userdata('username') == null) : ?>
					<li><a href="<?=base_url('Auth/')?>">Login / Register</a></li>
					<?php else: ?>
					<!-- User Account Menu -->
					<li class="dropdown user user-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<!-- The user image in the navbar-->
							<img src="<?=base_url('assets/img/user2-160x160.jpg')?>" class="user-image" alt="User Image">
							<!-- hidden-xs hides the username on small devices so only the image appears. -->
							<span class="hidden-xs"><?=$this->session->userdata('username')?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- The user image in the menu -->
							<li class="user-header">
								<img src="<?=base_url('assets/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">

								<p>
									<?=$this->session->userdata('username')?>
								</p>
							</li>
							<!-- Menu Body -->
							<li class="user-body"></li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-right">
									<a href="<?=base_url('Auth/Logout/')?>" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
					<?php endif; ?>
				</ul>
			</div>
			<!-- /.navbar-custom-menu -->
		</div>
		<!-- /.container-fluid -->
	</nav>
</header>
