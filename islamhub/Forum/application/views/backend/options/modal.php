<!-- Tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Tambah Options</h4>
            </div>
            <?=form_open_multipart('Backend/Options/Create/')?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Nama :</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Value :</label>
                    <input type="text" name="value" class="form-control" placeholder="Value" required="">
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

<?php foreach ($tblOption as $value): ?>
<!-- Edit -->
<div class="modal fade" id="edit-<?=$value->id?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Edit Options</h4>
            </div>
            <?=form_open_multipart('Backend/Options/Update/'.$value->id)?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Nama :</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?=$value->name?>" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Value :</label>
                    <input type="text" name="value" class="form-control" placeholder="Value" value="<?=$value->value?>" required="">
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