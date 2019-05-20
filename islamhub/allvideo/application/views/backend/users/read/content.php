<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Users
			<small>Data Users</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-users"></i> Users</a></li>
			<li class="active">Read</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<!-- Message -->
		<?php $this->load->view('backend/message'); ?>
		<!-- End Message -->

		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Table Users</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table id="dataTable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>#</th>
										<th>ID User</th>
										<th>Username</th>
										<th>Nama</th>
										<th>Level</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($tblUsers as $a) : ?>
									<tr>
										<td><?=$no?></td>
										<td class="text-center">
											<!-- Single button -->
											<div class="btn-group">
												<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<li class="fa fa-gears"></li> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#" data-toggle="modal" data-target="#detail-<?=$a->id_user?>">Detail</a></li>
													<li role="separator" class="divider"></li>
													<li><a href="<?=base_url('Backend/Users/Edit/'.$a->id_user)?>">Edit</a></li>
													<li><a href="<?=base_url('Backend/Users/Hapus/'.$a->id_user)?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Delete</a></li>
												</ul>
											</div>
										</td>
										<td><?=$a->id_user?></td>
										<td><?=$a->username?></td>
										<td><?=$a->nama?></td>
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
									<?php $no++; endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>#</th>
										<th>ID User</th>
										<th>Username</th>
										<th>Nama</th>
										<th>Level</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<!-- ./box-body -->
					<div class="box-footer"></div>
					<!-- /.box-footer -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
