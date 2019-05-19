<?php $this->load->view('frontend/layout/head',array('title'=>$title)); ?>
<section class="mbr-gallery mbr-slider-carousel cid-rqvkTaVALK" id="gallery1-1">
<div class="container">
    <div>
    	<div class="mbr-gallery-row">
    		<div class="mbr-gallery-layout-default">
    			<div>
                    <?php 
                    foreach ($tblVDetails as $data) {
                    ?>
                            <div>
                                <div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false" data-tags="Awesome">
                                    <div>
                                    <a href="<?php echo base_url('video/detail/'.$data->id_video_detail); ?>">
                                        <img src="<?php echo base_url('assets/photos/'.$data->photo); ?>" alt="<?php echo $data->title; ?>" title="<?php echo $data->title; ?>">
                                        <span class="icon-focus"></span>
                                        <span class="mbr-gallery-title mbr-fonts-style display-7"><?php echo $data->title; ?></span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                    <?php
                    }
                    ?>
    			</div>
    		</div>
    	</div>
    </div>
</div>

</section>
<?php $this->load->view('frontend/layout/foot'); ?>