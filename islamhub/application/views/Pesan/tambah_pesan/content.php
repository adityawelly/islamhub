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
                    <form method="POST" action="<?=base_url('Pesan/Kirim')?>">
                        <div class="form-group label-floating">
                            <label class="control-label">Penerima</label>
                            <select class="selectpicker" name="penerima" data-style="select-with-transition" title="Penerima" data-size="7" required="">
                                <option disabled selected>--Pilih--</option>
                                <?php if($this->session->userdata('client') == TRUE){ ?>
                                    <?php foreach($tblPakar as $value): ?>
                                        <option value="<?=$value->EMAIL_PAKAR?>"><?=$value->NAMA_PAKAR?></option>
                                    <?php endforeach; ?>
                                <?php }else if($this->session->userdata('pakar') == TRUE){ ?>
                                    <?php foreach($tblClient as $value): ?>
                                        <option value="<?=$value->EMAIL_CLIENT?>"><?=$value->NAMA_CLIENT?></option>
                                    <?php endforeach; ?>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Subjek</label>
                            <input type="text" name="subjek" class="form-control" required="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Isi</label>
                            <textarea name="isi" id="isiPesan" required=""></textarea>
                        </div>
                        <button type="submit" name="btn-submit" value="draft" class="btn btn-fill btn-warning"><i class="material-icons">drafts</i>&nbsp;Simpan Ke Draft</button>
                        <button type="submit" name="btn-submit" value="kirim" class="btn btn-fill btn-rose"><i class="material-icons">send</i>&nbsp;Kirim</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>