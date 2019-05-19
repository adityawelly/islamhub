<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Videos
			<small>Data Videos</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-film"></i> Videos</a></li>
			<li class="active">General</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<!-- Message -->
		<?php $this->load->view('backend/message'); ?>
		<!-- End Message -->

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<?php foreach ($tblVDetails as $a) : ?>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="box">
								<div class="box-header with-border">
									<div class="row">
										<div class="col-md-9">
											<h3 class="box-title"><?=$a->title?></h3>
										</div>
										<div class="col-md-3">
											<div class="box-tools pull-right">
												<div class="btn-group">
													<button type="button" class="btn btn-default btn-box-tool"><i class="fa fa-gears"></i></button>
													<button type="button" class="btn btn-default btn-box-tool dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li><a href="#">Edit</a></li>
														<li class="divider"></li>
														<li><a href="#">Delete</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<img src="<?=base_url('assets/photos/'.$a->photo)?>" class="img-responsive center-block">
								</div>
								<!-- ./box-body -->
								<div class="box-footer text-right">
									<a href="<?=base_url('Backend/Videos/Details/'.$a->id_video_detail)?>" class="btn btn-success btn-sm">Read more&raquo;</a>
								</div>
								<!-- /.box-footer -->
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col -->
					<?php endforeach; ?>
				</div>
				<!-- /.row -->
			</div>
			<div class="panel-footer text-center">
				<nav aria-label="Page navigation">
					<?=$halaman;?>
				</nav>
			</div>
		</div>

	</section>
	<!-- /.content -->
</div>
