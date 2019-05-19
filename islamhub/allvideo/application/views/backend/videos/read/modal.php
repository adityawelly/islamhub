<!-- Tambah -->
<div class="modal fade" id="tambah">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Video</h4>
			</div>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=base_url('Backend/Videos/Tambah/actionTambah/')?>">
				<div class="modal-body">
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
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- End Tambah -->


