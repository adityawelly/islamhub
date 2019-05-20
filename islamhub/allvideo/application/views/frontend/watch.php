<?php $this->load->view('frontend/layout/head',array('title'=>$title)); ?>
<section class="mbr-gallery mbr-slider-carousel cid-rqvkTaVALK" id="gallery1-1">
<div class="container">
    <?php
        if(!empty($_GET['report'])){
            echo "
                <script>alert('Report Berhasil');</script>
            ";
        }
    ?>
    <div class="card">
        <div class="card-header">
        <?php echo $tblVLocations->title; ?>
        <a href="<?php echo base_url('video/report/'.$tblVLocations->id_video_detail.'/'.$tblVLocations->id_video_location.'/1'); ?>" class="float-right btn btn-danger btn-sm">Report Url</a>
        <a href="<?php echo base_url('video/report/'.$tblVLocations->id_video_detail.'/'.$tblVLocations->id_video_location.'/2'); ?>" class="float-right btn btn-danger btn-sm">Report Subtitle</a>
        </div>
        <div class="card-body">
            <center>
            <iframe width="640" height="360" src="<?php echo $tblVLocations->url; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>
        </div>
    </div>
</div>
</section>
<?php $this->load->view('frontend/layout/foot'); ?>