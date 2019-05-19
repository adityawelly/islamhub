<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?=$title?>
			<small>Data <?=$title?></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-film"></i> <?=$title?></a></li>
			<li class="active">Detail</li>
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
						<h3 class="box-title"><?=$viewVDetails->title?> (<i class="fa fa-eye">&nbsp;<?=$num_video_view?></i>)</h3>

						<div class="box-tools pull-right">
							<a href="<?=base_url('Backend/Videos/EditDetail/'.$viewVDetails->id_video_detail)?>" class="btn btn-box-tool"><i class="fa fa-edit"></i> Edit</a>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<img src="<?=base_url('assets/photos/'.$viewVDetails->photo)?>" alt="<?=$viewVDetails->title?>" class="img-responsive img-thumbnail center-block">
							</div>
							<div class="col-md-5">
								<div class="table-responsive">
									<table class="table">
										<tr>
											<th>Synopsis</th>
										</tr>
										<tr>
											<td><?=$viewVDetails->synopsis?></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="col-md-4">
								<div class="table-responsive">
									<table class="table">
										<tr>
											<th>Status</th>
											<td>
												<?php
												if ($viewVDetails->status == 0){
													echo "<span class=\"label label-info\">Ongoing</span>";
												}else{
													echo "<span class=\"label label-success\">Finish</span>";
												}
												?>
											</td>
										</tr>
										<tr>
											<th>Broadcast</th>
											<td><?=$viewVDetails->broadcast?></td>
										</tr>
										<tr>
											<th>Producer</th>
											<td><?=$viewVDetails->producer?></td>
										</tr>
										<tr>
											<th>Score</th>
											<td><?=$viewVDetails->score?></td>
										</tr>
										<tr>
											<th>Season</th>
											<td><?=$viewVDetails->season?></td>
										</tr>
										<tr>
											<th>Type</th>
											<td><?=$viewVDetails->type?></td>
										</tr>
										<tr>
											<th>Year</th>
											<td><?=$viewVDetails->year?></td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- ./box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-5">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Genre</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#tambah-genre"><i class="fa fa-plus"></i> Tambah</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr>
									<th>No</th>
									<th>Genre</th>
									<th>Action</th>
								</tr>
								<?php $no = 1; foreach ($viewVGenres as $a): ?>
									<tr>
										<td><?=$no?></td>
										<td><?=$a->genre?></td>
										<td class="text-center"><a href="<?=base_url('Backend/Videos/actionDeleteGenre/'.$a->id_video_genre.'/'.$a->id_video_detail)?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i></a></td>
									</tr>
								<?php $no++; endforeach;?>
							</table>
						</div>
					</div>
					<!-- ./box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-7">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Location</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#tambah-location"><i class="fa fa-plus"></i> Tambah</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table id="dataTable" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>#</th>
									<th>Tittle</th>
									<th>Watch</th>
								</tr>
								</thead>
								<tbody>
								<?php $no = 1; foreach ($tblVLocations as $a) : ?>
									<?php
										$rules[1] = array(
											'select'    => null,
											'where'     => array('id_video_location' => $a->id_video_location),
											'or_where'  => null,
											'order'     => null,
											'limit'     => null,
											'pagging'   => null,
										);
										$tblVReports	= $this->Tbl_video_reports->where($rules[1])->row();
										$num_video_reports	= $this->Tbl_video_reports->where($rules[1])->num_rows();
										if($num_video_reports > 0 ){
											if($tblVReports->report == 1){
												$label = 'label-danger';
											}else if($tblVReports->report == 2){
												$label = 'label-warning';
											}
										}
									?>
									<tr>
										<td class="text-center">
											<div class="btn-group">
												<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-gears">&nbsp;</i>
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#" data-toggle="modal" data-target="#edit-location-<?=$a->id_video_location?>">Edit</a></li>
													<li class="divider"></li>
													<li><a href="<?=base_url('Backend/Videos/actionDeleteLocation/'.$a->id_video_detail.'/'.$a->id_video_location)?>" onclick="return confirm('Apakah anda yakin ?')">Delete</a></li>
												</ul>
											</div>
										</td>
										<td><?=$a->title?><?php if($num_video_reports > 0): ?> <span class="label <?=$label?>"><i class="fa fa-exclamation-triangle"></i></span> <?php endif; ?></td>
										<td class="text-center">
											<a href="<?=base_url('Backend/Videos/Watch/'.$a->id_video_detail.'/'.$a->id_video_location)?>" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-eye"></i></a>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
								<tr>
									<th>#</th>
									<th>Tittle</th>
									<th>Watch</th>
								</tr>
								</tfoot>
							</table>
						</div>
					</div>
					<!-- ./box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

	</section>
	<!-- /.content -->
</div>
