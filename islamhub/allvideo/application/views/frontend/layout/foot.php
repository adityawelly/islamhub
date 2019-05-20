<?php
	$this->load->model('Tbl_setting_genres');
	$this->load->model('Tbl_setting_seasons');
	$this->load->model('Tbl_setting_types');
	$this->load->model('Tbl_setting_years');
	$rules[0] = array(
		'select'    => null,
		'order'     => null,
		'limit'     => null,
		'pagging'   => null,
	);

	$data=array(
		'tblSGenres'	=> $this->Tbl_setting_genres->read($rules[0])->result(),
		'tblSTypes'	=> $this->Tbl_setting_types->read($rules[0])->result(),
		'tblSSeasons'	=> $this->Tbl_setting_seasons->read($rules[0])->result(),
		'tblSYears'	=> $this->Tbl_setting_years->read($rules[0])->result(),
	);
?>

<section class="cid-rqvkYlGsky mbr-reveal" id="footer5-2">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-3">
                <div class="media-wrap">
                    <a href="http://all-video.web.id/">
                       <img src="<?=base_url('assets/frontend/images/logosample-bytailorbrands-removebg-1-186x174.png')?>" alt="Mobirise" title="">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <p class="mbr-text align-right links mbr-fonts-style display-7">
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 All Video - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="witsec-modal-window-block-6" data-rv-view="45">

	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>

	
	
	<div><div class="modal fade" id="musim" tabindex="-1" role="dialog" aria-labelledby="musimLabel" aria-hidden="true">  <div class="modal-dialog modal-sm " role="document">    <div class="modal-content"><div class="modal-header">  <h5 class="no-anim modal-title" id="musimLabel">Musim</h5>  <a href="#" class="no-anim close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a></div><div class="modal-body" id="musim_body">
	<ul class="list-group">
	  <?php
	  	foreach ($data['tblSSeasons'] as $value) {
	  		echo '
			  <li class="list-group-item"><a href="'.base_url('cari/index/musim/'.$value->id_setting_season).'">'.$value->season.'</a></li>
	  		';
	  	}
	  ?>
	</ul>
	</div><div class="modal-footer"><div class="mbr-section-btn"><a href="#" class="no-anim btn btn-secondary display-4" data-dismiss="modal">Close</a></div></div>    </div>  </div></div><script>document.addEventListener("DOMContentLoaded", function() {  $("#musim").on("hidden.bs.modal", function () {    var html = $( "#musim_body" ).html();    $( "#musim_body" ).empty();    $( "#musim_body" ).append(html);  })});</script></div>

	<script>
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if ($('#' + modalName).length)
				$('#' + modalName).modal('show');
			else
				alert("Sorry, but there is no modal for " + modalName);
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>

</section>
<section class="mbr-section" id="witsec-modal-window-block-6" data-rv-view="45">

	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>

	
	
	<div><div class="modal fade" id="genre" tabindex="-1" role="dialog" aria-labelledby="genreLabel" aria-hidden="true">  <div class="modal-dialog modal-sm " role="document">    <div class="modal-content"><div class="modal-header">  <h5 class="no-anim modal-title" id="genreLabel">Genre</h5>  <a href="#" class="no-anim close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a></div><div class="modal-body" id="genre_body">
	<ul class="list-group">
	<?php
	  	foreach ($data['tblSGenres'] as $value) {
	  		echo '
			  <li class="list-group-item"><a href="'.base_url('cari/index/genre/'.$value->id_setting_genre).'">'.$value->genre.'</a></li>
	  		';
	  	}
	?>
	</ul>

	</div><div class="modal-footer"><div class="mbr-section-btn"><a href="#" class="no-anim btn btn-secondary display-4" data-dismiss="modal">Close</a></div></div>    </div>  </div></div><script>document.addEventListener("DOMContentLoaded", function() {  $("#genre").on("hidden.bs.modal", function () {    var html = $( "#genre_body" ).html();    $( "#genre_body" ).empty();    $( "#genre_body" ).append(html);  })});</script></div>

	<script>
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if ($('#' + modalName).length)
				$('#' + modalName).modal('show');
			else
				alert("Sorry, but there is no modal for " + modalName);
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>

</section>

<section class="mbr-section" id="witsec-modal-window-block-7" data-rv-view="46">

	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>

	
	
	<div><div class="modal fade" id="tahun" tabindex="-1" role="dialog" aria-labelledby="tahunLabel" aria-hidden="true">  <div class="modal-dialog modal-sm " role="document">    <div class="modal-content"><div class="modal-header">  <h5 class="no-anim modal-title" id="tahunLabel">Tahun</h5>  <a href="#" class="no-anim close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a></div><div class="modal-body" id="tahun_body">
	<ul class="list-group">
	<?php
	  	foreach ($data['tblSYears'] as $value) {
	  		echo '
			  <li class="list-group-item"><a href="'.base_url('cari/index/tahun/'.$value->id_setting_year).'">'.$value->year.'</a></li>
	  		';
	  	}
	?>
	</ul>

	</div><div class="modal-footer"><div class="mbr-section-btn"><a href="#" class="no-anim btn btn-secondary display-4" data-dismiss="modal">Close</a></div></div>    </div>  </div></div><script>document.addEventListener("DOMContentLoaded", function() {  $("#tahun").on("hidden.bs.modal", function () {    var html = $( "#tahun_body" ).html();    $( "#tahun_body" ).empty();    $( "#tahun_body" ).append(html);  })});</script></div>

	<script>
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if ($('#' + modalName).length)
				$('#' + modalName).modal('show');
			else
				alert("Sorry, but there is no modal for " + modalName);
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>

</section>

<section class="mbr-section" id="witsec-modal-window-block-8" data-rv-view="47">

	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>

	
	
	<div><div class="modal fade" id="tipe" tabindex="-1" role="dialog" aria-labelledby="tipeLabel" aria-hidden="true">  <div class="modal-dialog modal-sm " role="document">    <div class="modal-content"><div class="modal-header">  <h5 class="no-anim modal-title" id="tipeLabel">Tipe</h5>  <a href="#" class="no-anim close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a></div><div class="modal-body" id="tipe_body">
	<ul class="list-group">
	<?php
	  	foreach ($data['tblSTypes'] as $value) {
	  		echo '
			  <li class="list-group-item"><a href="'.base_url('cari/index/tipe/'.$value->id_setting_type).'">'.$value->type.'</a></li>
	  		';
	  	}
	?>
	</ul>
	</div><div class="modal-footer"><div class="mbr-section-btn"><a href="#" class="no-anim btn btn-secondary display-4" data-dismiss="modal">Close</a></div></div>    </div>  </div></div><script>document.addEventListener("DOMContentLoaded", function() {  $("#tipe").on("hidden.bs.modal", function () {    var html = $( "#tipe_body" ).html();    $( "#tipe_body" ).empty();    $( "#tipe_body" ).append(html);  })});</script></div>

	<script>
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if ($('#' + modalName).length)
				$('#' + modalName).modal('show');
			else
				alert("Sorry, but there is no modal for " + modalName);
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>

</section>


  <script src="<?=base_url('assets/frontend/web/assets/jquery/jquery.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/popper/popper.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/tether/tether.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/touchswipe/jquery.touch-swipe.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/parallax/jarallax.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/bootstrapcarouselswipe/bootstrap-carousel-swipe.js')?>"></script>
  <script src="<?=base_url('assets/frontend/smoothscroll/smooth-scroll.js')?>"></script>
  <script src="<?=base_url('assets/frontend/vimeoplayer/jquery.mb.vimeo_player.js')?>"></script>
  <script src="<?=base_url('assets/frontend/dropdown/js/script.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/masonry/masonry.pkgd.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/imagesloaded/imagesloaded.pkgd.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/theme/js/script.js')?>"></script>
  <script src="<?=base_url('assets/frontend/slidervideo/script.js')?>"></script>
  <script src="<?=base_url('assets/frontend/gallery/player.min.js')?>"></script>
  <script src="<?=base_url('assets/frontend/gallery/script.js')?>"></script>
  
  
</body>
</html>
