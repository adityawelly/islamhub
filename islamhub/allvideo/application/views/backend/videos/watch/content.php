<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<?=$title?>
			<small>Data <?=$title?></small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-film"></i> <?=$title?></a></li>
			<li class="active">Watch</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content container-fluid">
		<!-- Message -->
		<?php $this->load->view('backend/message'); ?>
		<!-- End Message -->

		<div class="row">
			<div class="col-md-2"></div>
			<!-- /.col -->
			<div class="col-md-8">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title"><?=$tblVLocations->title?></h3>

						<div class="box-tools pull-right">
							<a href="<?=base_url('Backend/Videos/Detail/'.$tblVLocations->id_video_detail)?>" class="btn btn-box-tool">&laquo; Back</a>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="<?=$tblVLocations->url?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<!-- ./box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
			<div class="col-md-2"></div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

	</section>
	<!-- /.content -->
</div>
