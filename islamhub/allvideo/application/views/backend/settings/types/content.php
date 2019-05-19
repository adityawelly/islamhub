<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Types
			<small>Data Types</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-gears"></i> Types</a></li>
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
						<h3 class="box-title">Table Types</h3>

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
									<th>IDS Type</th>
									<th>Type</th>
									<th>Status</th>
								</tr>
								</thead>
								<tbody>
								<?php $no = 1; foreach ($tblTypes as $a) : ?>
									<tr>
										<td><?=$no?></td>
										<td class="text-center">
											<!-- Single button -->
											<div class="btn-group">
												<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-gears"></i> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a href="#" data-toggle="modal" data-target="#detail-<?=$a->id_setting_type?>">Detail</a></li>
													<li role="separator" class="divider"></li>
													<li><a href="#" data-toggle="modal" data-target="#edit-<?=$a->id_setting_type?>">Edit</a></li>
													<li><a href="<?=base_url('Backend/Settings/Types/Hapus/'.$a->id_setting_type)?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Delete</a></li>
												</ul>
											</div>
										</td>
										<td><?=$a->id_setting_type?></td>
										<td><?=$a->type?></td>
										<td class="text-center">
											<?php
											if ($a->status == 0){
												echo "<span class=\"label label-warning\">Tidak Ditampilkan</span>";
											}else{
												echo "<span class=\"label label-success\">Ditampilkan</span>";
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
									<th>IDS Type</th>
									<th>Type</th>
									<th>Status</th>
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
