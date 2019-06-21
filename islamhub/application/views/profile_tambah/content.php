<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
      <?php $this->load->view('notification')?>
          <div class="card">
              <div class="card-header card-header-icon" data-background-color="green">
                  <i class="material-icons">add</i>
              </div>
              <div class="card-content">
                  <h4 class="card-title"><?=$title?></h4>
                  <div class="row" style="padding:20px;">
                  <?php
                    if($this->session->userdata('pakar') == TRUE){ ?>
                        <form method="POST" action="<?=base_url('Profile2/AddPakar/'.$this->session->userdata('id'))?>">
                        <div class="form-group label-floating">
                            <label class="control-label">NIK</label>
                            <input type="text" name="nik" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required="">
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
                            <input type="text" name="alamat" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Tempat lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">No. Telp</label>
                            <input type="text" name="no_telp" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Universitas</label>
                            <input type="text" name="universitas" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">biodata</label>
                            <textarea name="biodata" class='form-control'></textarea>
                        </div>
                        <button type="submit" class="btn btn-simple">Simpan</button>
                        </form>
                    <?php }else if($this->session->userdata('client') == TRUE){ ?>
                        <form method="POST" action="<?=base_url('Profile2/AddClient/'.$this->session->userdata('id'))?>">
                        <div class="form-group label-floating">
                            <label class="control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" required="">
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
                            <input type="text" name="alamat" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">No. Telp</label>
                            <input type="text" name="no_telp" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">biodata</label>
                            <textarea name="biodata" class='form-control'></textarea>
                        </div>
                        <button type="submit" class="btn btn-simple">Simpan</button>
                        </form>
                    <?php }
                ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>