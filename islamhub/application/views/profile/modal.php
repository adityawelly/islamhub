<!-- Classic Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Edit Profile</h4>
            </div>
            <?php
                if($this->session->userdata('pakar') == TRUE){ ?>
                    <form method="POST" action="<?=base_url('Profile2/UpdatePakar/'.$profile->user_id)?>">
                    <div class="modal-body">
                        <div class="form-group label-floating">
                            <label class="control-label">NIK</label>
                            <input type="text" name="nik" class="form-control" value="<?=$profile->nik?>" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?=$profile->nama?>" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Alamat</label>
                            <input type="text" name="alamat" value="<?=$profile->alamat?>" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Tempat lahir</label>
                            <input type="text" name="tempat_lahir" value="<?=$profile->tempat_lahir?>" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" value="<?=$profile->tgl_lahir?>" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">No. Telp</label>
                            <input type="text" name="no_telp" value="<?=$profile->no_telp?>" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Universitas</label>
                            <input type="text" name="universitas" value="<?=$profile->universitas?>" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">biodata</label>
                            <textarea name="biodata" class='form-control'><?=$profile->biodata?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-simple">Simpan</button>
                        <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Tutup</button>
                    </div>
                    </form>
                <?php }else if($this->session->userdata('client') == TRUE){ ?>
                    <form method="POST" action="<?=base_url('Profile2/UpdateClient/'.$profile->user_id)?>">
                    <div class="modal-body">
                        <div class="form-group label-floating">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?=$profile->nama?>" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Alamat</label>
                            <input type="text" name="alamat" value="<?=$profile->alamat?>" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">No. Telp</label>
                            <input type="text" name="no_telp" value="<?=$profile->no_telp?>" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">biodata</label>
                            <textarea name="biodata" class='form-control'><?=$profile->biodata?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-simple">Simpan</button>
                        <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Tutup</button>
                    </div>
                    </form>
                <?php }
            ?>
        </div>
    </div>
</div>
<!--  End Modal -->