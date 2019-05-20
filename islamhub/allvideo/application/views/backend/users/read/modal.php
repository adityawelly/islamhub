<!-- Tambah -->
<div class="modal fade" id="tambah">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah User</h4>
			</div>
			<form class="form-horizontal" method="post" action="<?=base_url('Backend/Users/Tambah/')?>">
			<div class="modal-body">
				<div class="form-group">
					<label for="nama" class="col-sm-3 control-label">Nama</label>

					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
					</div>
				</div>
				<div class="form-group">
					<label for="username" class="col-sm-3 control-label">Username</label>

					<div class="col-sm-9">
						<input type="email" class="form-control" name="username" id="username" placeholder="Username" required>
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-3 control-label">Password</label>

					<div class="col-sm-9">
						<input type="password" minlength="6" maxlength="16" class="form-control" name="password" id="password" placeholder="Password" required>
					</div>
				</div>
				<div class="form-group">
					<label for="confirm" class="col-sm-3 control-label">Confirm Password</label>

					<div class="col-sm-9">
						<input type="password" minlength="6" maxlength="16" class="form-control" name="confirm" id="confirm" placeholder="Confirm Password" required>
					</div>
				</div>
				<div class="form-group">
					<label for="level" class="col-sm-3 control-label">Level</label>

					<div class="col-sm-9">
						<select class="form-control" name="level" id="level" required>
							<option value="0">Super Admin</option>
							<option value="1">Admin - Hight</option>
							<option value="2">Admin - Medium</option>
							<option value="3">Admin - Low</option>
						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Tambah -->

<!-- Detail -->
<?php foreach ($tblUsers as $a) : ?>
	<div class="modal fade" id="detail-<?=$a->id_user?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Detail User</h4>
				</div>
				<div class="modal-body">
					<div class="table-responsive table-striped">
						<table class="table table-bordered">
							<tr>
								<th>ID User</th>
								<td><?=$a->id_user?></td>
							</tr>
							<tr>
								<th>Username</th>
								<td><?=$a->username?></td>
							</tr>
							<tr>
								<th>Nama</th>
								<td><?=$a->nama?></td>
							</tr>
							<tr>
								<th>Level</th>
								<td>
									<?php
										if ($a->level == 0){
											echo "SUPER ADMIN";
										}elseif ($a->level == 1){
											echo "ADMIN - Hight";
										}elseif ($a->level == 2){
											echo "ADMIN - Medium";
										}else{
											echo "ADMIN - Low";
										}
									?>
								</td>
							</tr>
							<tr>
								<th>Login</th>
								<td><?=$a->login?></td>
							</tr>
							<tr>
								<th>IP Login</th>
								<td><?=$a->ip_login?></td>
							</tr>
							<tr>
								<th>Logout</th>
								<td><?=$a->logout?></td>
							</tr>
							<tr>
								<th>IP Logout</th>
								<td><?=$a->ip_logout?></td>
							</tr>
							<tr>
								<th>Created At</th>
								<td><?=$a->created_at?></td>
							</tr>
							<tr>
								<th>Updated At</th>
								<td><?=$a->updated_at?></td>
							</tr>
							<tr>
								<th>Created By</th>
								<td><?=$a->created_by?></td>
							</tr>
							<tr>
								<th>Updated By</th>
								<td><?=$a->updated_by?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="modal-footer"></div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php endforeach; ?>
<!-- End Detail -->
