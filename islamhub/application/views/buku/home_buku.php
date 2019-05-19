<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-text">
    Kontent buku
</div>

    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">UPLOAD EBOOK</button><p>
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">UPLOAD EBOOK</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      <form action="" enctype="multipart/form-data" class="form-horizontal" method="POST">
        <fieldset>
          
            <div class="form-group row">
                <label class="col-md-3 control-label">Judul</label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="judul" required placeholder="Judul" required="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 control-label">Penulis</label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="penulis" required placeholder="penulis" required="">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-md-3 control-label">Buku</label>
                <div class="col-md-9">
                    <input class="form-control" type="file" name="buku" required placeholder="Buku" required="">
                </div>
            </div>
        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">
      <i class="fa fa-save"></i>
      Submit
    </button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- 
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <img src="<?= base_url('assets/img/book.svg') ?>" alt="" width="100px" height="100px">
        </div>
        <div class="col-sm-10 homebook">
            <p>Judul buku dan Pakar</p>
        </div>
    </div>

    <p>Jumlah Viewer</p>

    <div class="row">
        <div class="col-sm-2">
            <img src="<?= base_url('assets/img/book.svg') ?>" alt="" width="100px" height="100px">
        </div>
        <div class="col-sm-10 homebook">
            <p>Judul buku dan Pakar</p>
        </div>
    </div>

    <p>Jumlah Viewer</p>

    <div class="row">
        <div class="col-sm-2">
            <img src="<?= base_url('assets/img/book.svg') ?>" alt="" width="100px" height="100px">
        </div>
        <div class="col-sm-10 homebook">
            <p>Judul buku dan Pakar</p>
        </div>
    </div>

    <p>Jumlah Viewer</p>

    <div class="row">
        <div class="col-sm-2">
            <img src="<?= base_url('assets/img/book.svg') ?>" alt="" width="100px" height="100px">
        </div>
        <div class="col-sm-10 homebook">
            <p>Judul buku dan Pakar</p>
        </div>
    </div>

    <p>Jumlah Viewer</p>

    <div class="row">
        <div class="col-sm-2">
            <img src="<?= base_url('assets/img/book.svg') ?>" alt="" width="100px" height="100px">
        </div>
        <div class="col-sm-10 homebook">
            <p>Judul buku dan Pakar</p>
        </div>
    </div>

    <p>Jumlah Viewer</p>

    <div class="row">
        <div class="col-sm-2">
            <img src="<?= base_url('assets/img/book.svg') ?>" alt="" width="100px" height="100px">
        </div>
        <div class="col-sm-10 homebook">
            <p>Judul buku dan Pakar</p>
        </div>
    </div>

    <p>Jumlah Viewer</p>
    
</div> -->

<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th>N0</th>
                    <th>Judul</th>
                    <th>Penulis</th>
               <th style="width:125px;">Action
                  </p></th>
                </tr>
              </thead>

            </table>
        </div>
    </div>
</div>
