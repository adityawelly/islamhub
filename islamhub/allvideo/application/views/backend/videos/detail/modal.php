<!-- Tambah Genre -->
<div class="modal fade" id="tambah-genre">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Genre</h4>
			</div>
			<form class="form-horizontal" method="post" action="<?=base_url('Backend/Videos/actionTambahGenre/'.$viewVDetails->id_video_detail)?>">
				<div class="modal-body">
					<div class="form-group">
						<label for="genre" class="col-sm-2 control-label">Genre</label>

						<div class="col-sm-10">
							<select class="form-control select2" style="width: 100%;" name="genre" id="genre" required>
								<?php foreach ($tblSGenres as $a) : ?>
									<option value="<?=$a->id_setting_genre?>"><?=$a->genre?></option>
								<?php endforeach; ?>
							</select>
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
<!-- End Tambah Genre -->

<!-- Tambah Location -->
<div class="modal fade" id="tambah-location">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Location</h4>
			</div>
			<form class="form-horizontal" method="post" action="<?=base_url('Backend/Videos/actionTambahLocation/'.$viewVDetails->id_video_detail)?>">
				<div class="modal-body">
					<div class="form-group">
						<label for="title" class="col-sm-2 control-label">Title</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?=$viewVDetails->title?> Episode - " required>
						</div>
					</div>
					<div class="form-group">
						<label for="url" class="col-sm-2 control-label">URL</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" name="url" id="url" placeholder="URL" required>
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
<!-- End Tambah Location -->

<!-- Edit Location -->
<?php foreach ($tblVLocations as $a) : ?>
	<div class="modal fade" id="edit-location-<?=$a->id_video_location?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Edit Location</h4>
				</div>
				<form class="form-horizontal" method="post" action="<?=base_url('Backend/Videos/actionEditLocation/'.$a->id_video_detail.'/'.$a->id_video_location)?>">
					<div class="modal-body">
						<div class="form-group">
							<label for="title" class="col-sm-2 control-label">Title</label>

							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?=$a->title?>" required>
							</div>
						</div>
						<div class="form-group">
							<label for="url" class="col-sm-2 control-label">URL</label>

							<div class="col-sm-9">
								<input type="text" class="form-control" name="url" id="url" placeholder="URL" value="<?=$a->url?>" required>
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
<?php endforeach; ?>
<!-- End Edit Location -->
