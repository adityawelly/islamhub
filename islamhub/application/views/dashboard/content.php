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

              </div>
            </div>
            
					</div>
				</div>
			</div>
		</div>

	</div>
