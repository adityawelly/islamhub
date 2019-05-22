<!-- Tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Tambah Topic</h4>
            </div>
            <?=form_open_multipart('Forum/Createtopic/'.$tblForum->id)?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Title :</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Slug :</label>
                    <input type="text" name="slug" class="form-control" placeholder="Slug" required="">
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