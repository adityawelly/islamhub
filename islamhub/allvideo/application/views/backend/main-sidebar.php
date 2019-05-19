<aside class="main-sidebar">

	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?=base_url('assets/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?=$this->session->userdata('nama')?></p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header text-center">
				<?php
					if ($this->session->userdata('level') == 0){
						echo "SUPER ADMIN";
					}elseif ($this->session->userdata('level') == 1){
						echo "ADMIN - Hight";
					}elseif ($this->session->userdata('level') == 2){
						echo "ADMIN - Medium";
					}else{
						echo "ADMIN - Low";
					}
				?>
			</li>
			<!-- Optionally, you can add icons to the links -->
			<li><a href="<?=base_url('Backend/Dashboard/')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
			<li><a href="<?=base_url('Backend/Videos/')?>"><i class="fa fa-film"></i> <span>Videos</span></a></li>
			<?php if($this->session->userdata('level') == 0 || $this->session->userdata('level') == 1){ ?>
			<li class="treeview">
				<a href="#"><i class="fa fa-gears"></i> <span>Settings</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					  </span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?=base_url('Backend/Settings/Genres/')?>"><i class="fa fa-circle-o"></i> Genres</a></li>
					<li><a href="<?=base_url('Backend/Settings/Seasons/')?>"><i class="fa fa-circle-o"></i> Seasons</a></li>
					<li><a href="<?=base_url('Backend/Settings/Types/')?>"><i class="fa fa-circle-o"></i> Types</a></li>
					<li><a href="<?=base_url('Backend/Settings/Years/')?>"><i class="fa fa-circle-o"></i> Years</a></li>
				</ul>
			</li>
			<?php } ?>
			<?php if($this->session->userdata('level') == 0){ ?>
				<li><a href="<?=base_url('Backend/Users/')?>"><i class="fa fa-users"></i> <span>Users</span></a></li>
			<?php } ?>
		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>
