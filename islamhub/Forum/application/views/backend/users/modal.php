<?php foreach ($tblUsers as $value): ?>
<!-- Edit -->
<div class="modal fade" id="edit-<?=$value->id?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Edit Users</h4>
            </div>
            <?=form_open_multipart('Backend/Users/Update/'.$value->id)?>
            <div class="modal-body">
				<div class="form-group">
					<label for="recipient-email" class="control-label">Email :</label>
					<input type="text" name="email" class="form-control" placeholder="email" value="<?=$value->email?>" required="">
				</div>
				<div class="form-group">
                    <label for="recipient-username" class="control-label">Username :</label>
                    <input type="text" name="username" class="form-control" placeholder="username" value="<?=$value->username?>" required="">
                </div>
				<div class="form-group">
					<label for="recipient-password" class="control-label">Password :</label>
					<input type="text" name="password" class="form-control" placeholder="password">
				</div>
				<div class="form-group">
					<label for="recipient-is_admin" class="control-label">Admin :</label>
					<select class="form-control" name="is_admin">
						<option value="0" <?=($value->is_admin == 0)? 'selected' : ''?>>False</option>
						<option value="1" <?=($value->is_admin == 1)? 'selected' : ''?>>True</option>
					</select>
				</div>
				<div class="form-group">
					<label for="recipient-is_moderator" class="control-label">Pakar :</label>
					<select class="form-control" name="is_moderator">
						<option value="0" <?=($value->is_moderator == 0)? 'selected' : ''?>>False</option>
						<option value="1" <?=($value->is_moderator == 1)? 'selected' : ''?>>True</option>
					</select>
				</div>
				<div class="form-group">
					<label for="recipient-is_confirmed" class="control-label">Confirmed :</label>
					<select class="form-control" name="is_confirmed">
						<option value="0" <?=($value->is_confirmed == 0)? 'selected' : ''?>>False</option>
						<option value="1" <?=($value->is_confirmed == 1)? 'selected' : ''?>>True</option>
					</select>
				</div>
				<div class="form-group">
					<label for="recipient-is_deleted" class="control-label">Delete :</label>
					<select class="form-control" name="is_deleted">
						<option value="0" <?=($value->is_deleted == 0)? 'selected' : ''?>>False</option>
						<option value="1" <?=($value->is_deleted == 1)? 'selected' : ''?>>True</option>
					</select>
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?=form_close()?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php endforeach; ?>
