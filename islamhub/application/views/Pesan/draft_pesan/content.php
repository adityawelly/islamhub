<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
      <?php $this->load->view('notification')?>
          <div class="card">
              <div class="card-header card-header-icon" data-background-color="green">
                  <i class="material-icons">message</i>
              </div>
              <div class="card-content">
                  <h4 class="card-title"><?=$title?></h4>
                  <div class="row" style="padding:20px;">
                    <div class="material-datatables">
                        <table id="tabelpesan" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Pengirim</th>
                                    <th>Subjek</th>
                                    <th>Isi</th>
                                    <th>Tanggal</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tblPesan as $value): ?>
                                    <tr>
                                        <td><?=$value->pengirim?></td>
                                        <td><?=$value->subjek?></td>
                                        <td><?=$value->isi?></td>
                                        <td><?=$value->date_created?></td>
                                        <td></td>
                                    </tr>
                                <?php endforeach; ?>
                            <tbody>
                        </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>