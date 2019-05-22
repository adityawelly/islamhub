<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<?php $this->load->view('notification')?>
			<style>
				div.static {
					position: fixed;
					bottom: 0;
					right: 0;
					width: 300px;
					border: 3px solid #543535;
				}

			</style>

			<div class="card">
				<div class="card-header card-header-icon" data-background-color="green">
					<i class="material-icons">dashboard</i>
				</div>
				<div class="card-content">
					<h4 class="card-title"><?=$title?></h4>
					<div class="row" style='padding:30px;'>
						<div class="row">
							<div class="col-md-12">
								<div class="card col-md-4" style="width: 18rem;">
									<img src="<?php echo base_url('assets/img/arab.png') ?>" class="" style="height: 100px; width: 100%;">
									<div class="card-body">
										<h5 class="card-title">Nama Pakar</h5>
										<p class="card-text">Biodata Pakar.</p>
										<a href="#" class="btn btn-primary">Chat</a>
									</div>
								</div>
								<div class="card col-md-4" style="width: 18rem;">
									<img src="<?php echo base_url('assets/img/arab.png') ?>" class="" style="height: 100px; width: 100%;">
									<div class="card-body">
										<h5 class="card-title">Nama Pakar</h5>
										<p class="card-text">Biodata Pakar.</p>
										<a href="#" class="btn btn-primary">Chat</a>
									</div>
								</div>

								<div class="card col-md-4" style="width: 18rem;">
									<img src="<?php echo base_url('assets/img/arab.png') ?>" class="" style="height: 100px; width: 100%;">
									<div class="card-body">
										<h5 class="card-title">Nama Pakar</h5>
										<p class="card-text">Biodata Pakar.</p>
										<a href="#" class="btn btn-primary">Chat</a>
									</div>
								</div>
							</div>
						</div>
            <div class="row">
              <div class="col-md-8">
                <div class="col-md-1">
                  <a href='#'><i class='fas fa-comment-alt kotak' style='font-size:48px;  color:white; '></i></a>
                </div>
                <div class="col-md-1 cardd">
                  <h4 class="text-p">Pesan</h4>
                  <b>
                    <p class="text-p" style="font-size: 50px;"><?=$total;?></p>
                </div>
              </div>
              <div class="col-md-4">
<script id="cid0020000219487547742" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 200px;height: 300px;">{"handle":"rumahkonsultasi","arch":"js","styles":{"a":"009900","b":100,"c":"FFFFFF","d":"FFFFFF","k":"009900","l":"009900","m":"009900","n":"FFFFFF","p":"10","q":"009900","r":100,"pos":"br","cv":1,"cvbg":"009900","cvw":200,"cvh":30,"ticker":1,"fwtickm":1}}</script>
              </div>
            </div>
            
					</div>
				</div>
			</div>
		</div>

	</div>
