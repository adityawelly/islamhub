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
                            <select class="selectpicker" name="penerima" data-style="select-with-transition" title="Single Select" data-size="7">
                                <option disabled selected>--Pilih--</option>
                                <?php foreach($tblPakar as $value): ?>
                                    <option value="<?=$value->id_pakar?>"><?=$value->nama?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Subjek</label>
                            <input type="text" name="subjek" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Isi</label>
                            <textarea name="isi" id="isiPesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-fill btn-rose"><i class="material-icons">send</i>&nbsp;Kirim</button>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>