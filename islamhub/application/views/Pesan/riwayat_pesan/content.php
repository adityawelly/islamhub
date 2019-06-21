<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
      <?php $this->load->view('notification')?>
          <div class="card">
              <div class="card-header card-header-icon" data-background-color="green">
                  <i class="material-icons">dashboard</i>
              </div>
              <div class="card-content">
                  <h4 class="card-title"><?=$title?></h4>
                  <div class="row" style='padding:30px;'>
                    <?php foreach($tblPesan as $value){ ?>
                        <?=$value->isi_chat?><br>
                    <?php } ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>