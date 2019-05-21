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
                     <div class="row">
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
                                            <div class="col-md-1">
                            <a href='#'><i  class='fas fa-comment-alt kotak' style='font-size:48px;  color:white; '></i></a>
                        </div>
                        <div class="col-md-1 cardd" >
                            <h4 class="text-p">Pesan</h4>
                            <b><p class="text-p" style="font-size: 50px;"><?=$total;?></p>
                        </div>
                        <!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
window.__lc = window.__lc || {};
window.__lc.license = 10919362;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/10919362/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>