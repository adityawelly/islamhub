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
            <?=form_open_multipart('Settings/Users/Create/')?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Username :</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Password :</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Nama :</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Level :</label>
                    <select name="level" id="level" class="form-control">
                        <option value="AKADEMIK">AKADEMIK</option>
                        <option value="DEVELOPMENT">DEVELOPMENT</option>
                        <option value="EKSEKUTIF">EKSEKUTIF</option>
                        <option value="KEUANGAN">KEUANGAN</option>
                        <option value="KEMAHASISWAAN">KEMAHASISWAAN</option>
                        <option value="FAKULTAS">FAKULTAS</option>
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

<?php foreach ($tblTopics as $value): ?>
<!-- Edit -->
<div class="modal fade" id="edit-<?=$value->id ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Edit Topics</h4>
            </div>
            <?=form_open_multipart('Backend/Forum/Updatetopic/'.$value->id)?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Title :</label>
                    <input type="text" name="title" class="form-control" placeholder="title" value="<?=$value->title?>" required="">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Slug :</label>
                    <input type="text" name="slug" class="form-control" placeholder="slug" value="<?=$value->slug?>" required="">
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