<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-text">
    Kontent Video
</div>

    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">UPLOAD VIDEO</button><p>
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">UPLOAD VIDEO</h4>
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
                <label class="col-md-3 control-label">Video</label>
                <div class="col-md-9">
                    <input class="form-control" type="file" name="video" required placeholder="Video" required="">
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

<div class="container">
	<div class="row">
	    <div class="col-sm-3">
            <div class="card">
                <img src="img/berbagi.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, totam.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img src="img/berbagi.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, totam.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>		
        <div class="col-sm-3">
            <div class="card">
                <img src="img/berbagi.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, totam.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img src="img/berbagi.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, totam.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img src="img/berbagi.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, totam.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <img src="img/berbagi.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, totam.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
                  <!-- Start of LiveChat (www.livechatinc.com) code -->
            <div class="static">
            <div id="tlkio" data-channel="islamhub" data-theme="theme--day" style="width:300px;height:400px;"></div>
            <script async src="http://tlk.io/embed.js" type="text/javascript"></script>
            <!-- End of LiveChat code -->
            </div>
        </div>
	</div>
</div>
		