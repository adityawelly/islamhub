<?php $this->load->view('frontend/layout/head',array('title'=>$title)); ?>
<section class="mbr-gallery mbr-slider-carousel cid-rqvkTaVALK" id="gallery1-1">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <?php echo $viewVDetails->title; ?> <i class="fas fa-eye"></i> (<?php echo $viewVDetails->score; ?>)
                </div>
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-4">
                        <img width="100%" src="<?php echo base_url('assets/photos/'.$viewVDetails->photo); ?>">
                       </div>
                       <div class="col-md-8">
                        <h5 class="card-title"><?php echo $viewVDetails->title; ?></h5>
                        <p class="card-text">
                            <?php echo $viewVDetails->synopsis; ?>
                        </p>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Keterangan</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Status</td>
                            <td><?php 
                                if( $viewVDetails->status == 1)
                                    echo "<badge>Finish</badge>";
                                else
                                    echo "<badge>Ongoing</badge>";
                                ?></td>
                        </tr>
                        <tr>
                            <th>Broadcast</td>
                            <td><?php echo $viewVDetails->broadcast; ?></td>
                        </tr>
                        <tr>
                            <th>Producer</td>
                            <td><?php echo $viewVDetails->producer; ?></td>
                        </tr>
                        <tr>
                            <th>Score</td>
                            <td><?php echo $viewVDetails->score; ?></td>
                        </tr>
                        <tr>
                            <th>Season</td>
                            <td><?php echo $viewVDetails->season; ?></td>
                        </tr>
                        <tr>
                            <th>Type</td>
                            <td><?php echo $viewVDetails->type; ?></td>
                        </tr>
                        <tr>
                            <th>Year</td>
                            <td><?php echo $viewVDetails->year; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Genre
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php
                            $i=1;
                            foreach ($viewVGenres as $value) {
                                echo "<tr>";
                                echo '<td>'.$i++.'</td>';
                                echo '<td>'.$value->genre.'</td>';
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Nonton Video
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php
                            foreach ($tblVLocations as $value) {
                                echo "<tr>";
                                echo '<th>'.$value->title.'</td>';
                                echo '<td><a href="'.base_url('video/watch/'.$value->id_video_detail.'/'.$value->id_video_location).'" target="_blank" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a></td>';
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php $this->load->view('frontend/layout/foot'); ?>