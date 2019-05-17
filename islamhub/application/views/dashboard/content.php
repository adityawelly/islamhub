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
                  <div class="row">
                      
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Content Column -->
    <div class="col-lg-6 mb-4">
    <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Statistik</h6>
            </div>
                
            <div class="card-body" style="padding:20px;">
                <h4 class="small font-weight-bold">Pesan Terkirim <span class="float-right"><?= $total; ?></span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $total;?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>