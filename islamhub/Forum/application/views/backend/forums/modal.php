<?php foreach ($tblForum as $value): ?>
<!-- Edit -->
<div class="modal fade" id="edit-<?=$value->id ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Edit Forum</h4>
            </div>
            <?=form_open_multipart('Backend/Forum/Update/'.$value->id)?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">title :</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" value="<?=$value->title?>" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">slug :</label>
                    <input type="text" name="slug" class="form-control" placeholder="Slug" value="<?=$value->slug?>" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Description :</label>
                    <input type="text" name="description" class="form-control" placeholder="Description" value="<?=$value->description?>" required="">
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
            <?=form_open_multipart('Backend/Forum/Create/')?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Title :</label>
                    <input type="text" name="title" class="form-control" placeholder="title" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Slug :</label>
                    <input type="text" name="slug" class="form-control" placeholder="slug" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Description :</label>
                    <textarea type="text" name="description" class="form-control" required=""></textarea>
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