<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Users
			<small>Edit Users</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-users"></i> Users</a></li>
			<li class="active">Edit</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<!-- Message -->
		<?php $this->load->view('backend/message'); ?>
		<!-- End Message -->

		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Edit User</h3>
			</div>
			<!-- /.box-header -->
			<form class="form-horizontal" action="<?=base_url('Backend/Users/actionEdit/'.$tblUsers->id_user)?>" method="post">
			<div class="box-body">
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label">Nama</label>

					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?=$tblUsers->nama?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="username" class="col-sm-3 control-label">Username</label>

					<div class="col-sm-9">
						<input type="email" class="form-control" name="username" id="username" placeholder="Username" value="<?=$tblUsers->username?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-3 control-label">Password</label>

					<div class="col-sm-9">
						<input type="password" minlength="6" maxlength="16" class="form-control" name="password" id="password" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<label for="confirm" class="col-sm-3 control-label">Confirm Password</label>

					<div class="col-sm-9">
						<input type="password" minlength="6" maxlength="16" class="form-control" name="confirm" id="confirm" placeholder="Confirm Password">
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="col-sm-3 control-label">Level</label>

					<div class="col-sm-9">
						<select class="form-control" name="level" id="level" required>
							<option value="0" <?php if ($tblUsers->level == '0') {echo 'selected';}?>>Super Admin</option>
							<option value="1" <?php if ($tblUsers->level == '1') {echo 'selected';}?>>Admin - Hight</option>
							<option value="2" <?php if ($tblUsers->level == '2') {echo 'selected';}?>>Admin - Medium</option>
							<option value="3" <?php if ($tblUsers->level == '3') {echo 'selected';}?>>Admin - Low</option>
						</select>
					</div>
				</div>
			</div>
			<!-- ./box-body -->
			<div class="box-footer">
				<a href="<?=base_url('Backend/Users/')?>" class="btn btn-default">Back</a>
				<button type="submit" class="btn btn-success pull-right">Update</button>
			</div>
			<!-- /.box-footer -->
			</form>
		</div>
		<!-- /.box -->
	</section>
	<!-- /.content -->
</div>
