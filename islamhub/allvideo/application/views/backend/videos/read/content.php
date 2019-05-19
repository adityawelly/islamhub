<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Videos
			<small>Data Videos</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-film"></i> Videos</a></li>
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
						<h3 class="box-title">Table Videos</h3>
						<?php if($this->session->userdata('level') != 3){ ?>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah</button>
						</div>
						<?php } ?>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table id="dataTable" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>#</th>
									<th>No</th>
									<th>Tittle</th>
									<th>Status</th>
									<th>Season</th>
									<th>Type</th>
									<th>Year</th>
								</tr>
								</thead>
								<tbody>
								<?php $no = 1; foreach ($viewVDetails as $a) : ?>
									<?php
										$rules[0] = array(
											'select'    => null,
											'where'     => array('id_video_detail' => $a->id_video_detail),
											'or_where'  => null,
											'order'     => null,
											'limit'     => null,
											'pagging'   => null,
										);
										$tblVLocation	= $this->Tbl_video_locations->where($rules[0])->result();
										$num = 0;
										$report_num = 0;
										foreach($tblVLocation as $value){
											$rules[1] = array(
												'select'    => null,
												'where'     => array('id_video_location' => $value->id_video_location),
												'or_where'  => null,
												'order'     => null,
												'limit'     => null,
												'pagging'   => null,
											);
											$num_video_reports	= $this->View_video_reports->read($rules[1])->num_rows();
											if($num_video_reports > 0){
												$report_num = $num+1;
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
													<li><a href="<?=base_url('Backend/Videos/Detail/'.$a->id_video_detail)?>" target="_blank">Detail</a></li>
													<?php if($this->session->userdata('level') != 3){ ?>
													<li class="divider"></li>
													<li><a href="<?=base_url('Backend/Videos/Hapus/'.$a->id_video_detail)?>">Delete</a></li>
													<?php } ?>
												</ul>
											</div>
										</td>
										<td><?=$no?></td>
													<td><?=$a->title?>&nbsp;<?php if($report_num > 0): ?> <span class="label label-danger"><i class="fa fa-exclamation-triangle"></i> <?=$report_num?></span> <?php endif; ?></td>
										<td class="text-center">
											<?php
											if ($a->status == 0){
												echo "<span class=\"label label-info\">Ongoing</span>";
											}else{
												echo "<span class=\"label label-success\">Finish</span>";
											}
											?>
										</td>
										<td><?=$a->season?></td>
										<td><?=$a->type?></td>
										<td><?=$a->year?></td>
									</tr>
									<?php $no++; endforeach; ?>
								</tbody>
								<tfoot>
								<tr>
									<th>#</th>
									<th>No</th>
									<th>Tittle</th>
									<th>Status</th>
									<th>Season</th>
									<th>Type</th>
									<th>Year</th>
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
