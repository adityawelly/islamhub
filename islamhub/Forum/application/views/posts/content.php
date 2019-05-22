<!-- Full Width Column -->
<div class="content-wrapper">
	<!-- Notification-->
	<?php $this->load->view('notification'); ?>

	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Posts
				<small>Topics</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-comments"></i> Forum</a></li>
				<li>Topics</li>
				<li class="active">Posts</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><?=$tblForum->title?></h3>
					<?php if($this->session->userdata('username') != null): ?>
					<div class="pull-right">
                    	<button type="button" class="btn btn-sm btn-primary" id="tambah_tooltip" data-toggle="modal" data-target="#tambah" title="Tambah">
                       		<i class="fa fa-plus"></i>
                    	</button>
                	</div>
					<?php endif; ?>
				</div>
				<div class="box-body">
					<?=$tblForum->description?>
				</div>
				<div class="box-footer bg-gray-light">

					<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title"><?=$tblTopics->title?></h3>
							<div class="box-tools pull-right">
								<a href="<?=base_url('Forum/Topics/'.$tblForum->id)?>" class="btn btn-box-tool">&laquo; back to topics</a>
							</div>
						</div>
						<div class="box-body">
							<?php foreach ($tblPosts as $a): ?>
								<!-- Post -->
								<div class="post clearfix">
									<div class="user-block">
										<img class="img-circle img-bordered-sm" src="<?=base_url('assets/img/user7-128x128.jpg')?>" alt="User Image">
										<span class="username">
											<a href="#"><?=$a->username?></a>
											<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
										</span>
										<span class="description"><?=$a->created_at?></span>
									</div>
									<!-- /.user-block -->
									<p>
										<?=$a->content?>
									</p>
								</div>
								<!-- /.post -->
							<?php endforeach;?>
						</div>
						<!-- /.box-body -->
					</div>
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
