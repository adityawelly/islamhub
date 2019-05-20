<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Videos
			<small>Tambah Videos</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-film"></i> Videos</a></li>
			<li class="active">Tambah</li>
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
						<h3 class="box-title">Tambah Video</h3>
					</div>
					<!-- /.box-header -->
					<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('Backend/Videos/Tambah/actionTambah/')?>">
					<div class="box-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="title" class="col-sm-3 control-label">Title</label>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
									</div>
								</div>
								<div class="form-group">
									<label for="synopsis" class="col-sm-3 control-label">Synopsis</label>

									<div class="col-sm-9">
										<textarea class="form-control" name="synopsis" id="synopsis" placeholder="Synopsis" required style="height: 225px; resize: none"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="status" class="col-sm-3 control-label">Status</label>

									<div class="col-sm-9">
										<select class="form-control" name="status" id="status" required>
											<option value="0">Ongoing</option>
											<option value="1">Finish</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="broadcast" class="col-sm-3 control-label">Broadcast</label>

									<div class="col-sm-9">
										<input type="date" class="form-control" name="broadcast" id="broadcast" placeholder="Broadcast" required>
									</div>
								</div>
								<div class="form-group">
									<label for="producer" class="col-sm-3 control-label">Producer</label>

									<div class="col-sm-9">
										<input type="text" class="form-control" name="producer" id="producer" placeholder="Producer" required>
									</div>
								</div>
								<div class="form-group">
									<label for="score" class="col-sm-3 control-label">Score</label>

									<div class="col-sm-9">
										<input type="text" minlength="1" maxlength="4" class="form-control" name="score" id="score" placeholder="Score" required>
									</div>
								</div>
								<div class="form-group">
									<label for="photo" class="col-sm-3 control-label">Photo</label>

									<div class="col-sm-9">
										<input type="file" name="userfile" id="photo" required="">
									</div>
								</div>
								<div class="form-group">
									<label for="season" class="col-sm-3 control-label">Season</label>

									<div class="col-sm-9">
										<select class="form-control" name="season" id="season" required>
											<?php foreach ($tblSSeasons as $a) : ?>
												<option value="<?=$a->id_setting_season?>"><?=$a->season?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="type" class="col-sm-3 control-label">Type</label>

									<div class="col-sm-9">
										<select class="form-control" name="type" id="type" required>
											<?php foreach ($tblSTypes as $a) : ?>
												<option value="<?=$a->id_setting_type?>"><?=$a->type?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="year" class="col-sm-3 control-label">Year</label>

									<div class="col-sm-9">
										<select class="form-control" name="year" id="year" required>
											<?php foreach ($tblSYears as $a) : ?>
												<option value="<?=$a->id_setting_year?>"><?=$a->year?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./box-body -->
					<div class="box-footer text-right">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					</form>
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
