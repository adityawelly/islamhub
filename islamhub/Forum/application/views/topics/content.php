<!-- Full Width Column -->
<div class="content-wrapper">
	<!-- Notification-->
	<?php $this->load->view('notification'); ?>

	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Topics
				<small>Forum</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-comments"></i> Forum</a></li>
				<li class="active">Topics</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><?=$tblForum->title?></h3>
				</div>
				<div class="box-body">
					<?=$tblForum->description?>
				</div>
				<div class="box-footer bg-gray-light">
					<?php foreach ($tblTopics as $a): ?>
					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title"><?=$a->title?></h3>
							<div class="box-tools pull-right">
								<a href="<?=base_url('Forum/')?>" class="btn btn-box-tool">&laquo; back to forum</a>
								<a href="<?=base_url('Forum/Posts/'.$tblForum->id.'/'.$a->id)?>" class="btn btn-box-tool">go to posts (<i><?=$posts[$a->id]?></i>) &raquo;</a>
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<?php endforeach;?>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.container -->
</div>
<!-- /.content-wrapper -->
