<!-- Tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Tambah Users</h4>
            </div>
            <?=form_open_multipart('Backend/Users/Create/')?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-username" class="control-label">username :</label>
                    <input type="text" name="username" class="form-control" placeholder="username" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Password :</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">email :</label>
                    <input type="text" name="email" class="form-control" placeholder="email" required="">
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
                    <label for="recipient-username" class="control-label">username :</label>
                    <input type="text" name="username" class="form-control" placeholder="username" value="<?=$value->username?>" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-email" class="control-label">email :</label>
                    <input type="text" name="email" class="form-control" placeholder="email" value="<?=$value->email?>" required="">
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