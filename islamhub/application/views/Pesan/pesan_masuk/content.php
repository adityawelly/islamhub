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
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tblPesan as $value): ?>
                                <?php
                                    if($this->session->userdata('pakar') == TRUE){
                                        $where = array(
                                            'id_client' => $value->pengirim_chat
                                        );
                                        $tblBio = $this->Tabelclient->whereAnd($where)->row();
                                    }else{
                                        $where = array(
                                            'id_pakar' => $value->pengirim_chat
                                        );
                                        $tblBio = $this->Tabelpakar->whereAnd($where)->row();
                                    }
                                ?>
                                    <tr>
                                        <td><?=$tblBio->nama?></td>
                                        <td><?=$value->subjek?></td>
                                        <td><?=$value->isi_chat?></td>
                                        <td><?=$value->date_created?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button href="#" class="dropdown-toggle btn btn-primary btn-round" data-toggle="dropdown">Action
                                                    <b class="caret"></b>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-left">
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modalBalas<?=$value->id_chat?>">Balas Pesan?</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modalBalas<?=$value->id_chat?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                        <i class="material-icons">clear</i>
                                                    </button>
                                                    <h4 class="modal-title"><?=$value->subjek?></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <strong>Pengirim</strong> : <?=$tblBio->nama?><br>
                                                    <strong>Pesan</strong> : <?=$value->isi_chat?>
                                                    <form method="POST" action="<?=base_url('Pesan/Balas')?>">
                                                        <input type="hidden" name="penerima" value="<?=$value->pengirim_chat?>" required="">
                                                        <input type="hidden" name="subjek" value="<?=$value->subjek?>" required="">
                                                        <div class="form-group label-floating">
                                                            <label class="control-label">Isi</label>
                                                            <textarea name="isi" id="isiPesan" required=""></textarea>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-simple">Balas</button>
                                                    <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Tutup</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <tbody>
                        </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>