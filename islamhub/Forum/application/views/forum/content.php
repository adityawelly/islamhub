<!-- Full Width Column -->
<div class="content-wrapper">
	<!-- Notification-->
	<?php $this->load->view('notification'); ?>

	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Forum
				<small>View</small>
			</h1>
			<ol class="breadcrumb">
				<li class="active"><a href="#"><i class="fa fa-comments"></i> Forum</a></li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<?php foreach ($tblForum as $a): ?>
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title"><?=$a->title?></h3>
					<div class="box-tools pull-right">
						<a href="<?=base_url('Forum/Topics/'.$a->id)?>" class="btn btn-box-tool">go to topics (<i><?=$topics[$a->id]?></i>) &raquo;</a>
					</div>
				</div>
				<div class="box-body">
					<?=$a->description?>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
			<?php endforeach;?>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.container -->
</div>
<!-- /.content-wrapper -->
