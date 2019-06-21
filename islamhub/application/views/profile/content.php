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

			<div class="row">
				<div class="col-md-4">
					<div class="card card-profile">
						<div class="card-avatar">
							<a href="#pablo">
								<img class="img" src="<?=base_url('uploads/avatars/'.$this->session->userdata('foto'))?>" />
							</a>
						</div>
						<div class="card-content">
							<h6 class="category text-gray"><?=($this->session->userdata('pakar')==TRUE) ? 'PAKAR' : 'USER'; ?></h6>
							<h4 class="card-title"><?=$profile->nama?></h4>
							<p class="description">
								<?=$profile->biodata?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-header card-header-icon" data-background-color="green">
							<i class="material-icons">people</i>
						</div>
						<div class="card-content">
						<div class="pull-right">
							<button class="btn btn-primary btn-raised btn-round" style="margin-right:10px" data-toggle="modal" data-target="#myModal">
								<i class="material-icons">edit</i>
							</button>
						</div>
							<h4 class="card-title"><?=$title?></h4>
							<div class="row" style='padding:30px;'>
								<div class="row">
									<div class="col-md-12">
										<?php
											if($this->session->userdata('pakar') == TRUE){ ?>
												<table class="table">
													<tr>
														<td>NIK</td>
														<td> : </td>
														<td><?=$profile->nik?></td>
													</tr>
													<tr>
														<td>Jenis Kelamin</td>
														<td> : </td>
														<td><?=$profile->jk?></td>
													</tr>
													<tr>
														<td>Alamat</td>
														<td> : </td>
														<td><?=$profile->alamat?></td>
													</tr>
													<tr>
														<td>Tempat / Tanggal Lahir</td>
														<td> : </td>
														<td><?=$profile->tempat_lahir.' / '.$profile->tgl_lahir?></td>
													</tr>
													<tr>
														<td>No. Telp</td>
														<td> : </td>
														<td><?=$profile->no_telp?></td>
													</tr>
													<tr>
														<td>Universitas</td>
														<td> : </td>
														<td><?=$profile->universitas?></td>
													</tr>
												</table>
											<?php }else if($this->session->userdata('client') == TRUE){ ?>
												<table class="table">
													<tr>
														<td>Jenis Kelamin</td>
														<td> : </td>
														<td><?=$profile->jk?></td>
													</tr>
													<tr>
														<td>Alamat</td>
														<td> : </td>
														<td><?=$profile->alamat?></td>
													</tr>
													<tr>
														<td>No. Telp</td>
														<td> : </td>
														<td><?=$profile->no_telp?></td>
													</tr>
												</table>
											<?php }
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
