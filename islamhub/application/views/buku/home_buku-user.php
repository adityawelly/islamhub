<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-text">
    Kontent buku
</div>

<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th style="text-align:center;" require>NO</th>
                    <th style="text-align:center;" require>Judul</th>
                    <th style="text-align:center;" require>Penulis</th>
                    <!-- <th>Buku</th> -->
               <th style="text-align:center;">Aksi</th>
                  </p></th>
                </tr>
              </thead>
              <tbody>
						<?php
						$no = 1;
                        foreach($files as $file){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $file->judul; ?></td>
                                <td><?php echo $file->penulis; ?></td>
                                <!-- <td><?php echo $file->filename; ?></td> -->
                                <td style="text-align:center;"><a href="<?php echo base_url().'file/download/'.$file->id; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download-alt"></a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        <!-- Start of LiveChat (www.livechatinc.com) code -->
<!-- <script type="text/javascript">
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
</noscript> -->
<!-- End of LiveChat code -->
                        </tbody>
            </table>
        </div>
    </div>
</div>
