<div class="content-wrapper">
    <section class="content-header">
        <h1>
			Users
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-users"></i> Users</a></li>
        </ol>
    </section>
    <section class="content">

        <!-- notification -->
        <?php $this->load->view('notification') ?>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabel Users</h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Admin</th>
                            <th>Moderator</th>
                            <th>Confirmed</th>
                            <th>Deleted</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($tblUsers as $value): ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-gear"></i> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-toggle="modal" data-target="#edit-<?=$value->id?>">Edit</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="<?=base_url('Backend/Users/Delete/'.$value->id)?>" onclick="return confirm('Apakah Anda Yakin ?')">Delete</i></a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td><?=$value->username?></td>
                                <td><?=$value->email?></td>
								<td class="text-center">
									<?php if($value->is_admin == 0) : ?>
										<span class="label label-danger">False</span>
									<?php else: ?>
										<span class="label label-success">True</span>
									<?php endif; ?>
								</td>
								<td class="text-center">
									<?php if($value->is_moderator == 0) : ?>
										<span class="label label-danger">False</span>
									<?php else: ?>
										<span class="label label-success">True</span>
									<?php endif; ?>
								</td>
								<td class="text-center">
									<?php if($value->is_confirmed == 0) : ?>
										<span class="label label-danger">False</span>
									<?php else: ?>
										<span class="label label-success">True</span>
									<?php endif; ?>
								</td>
								<td class="text-center">
									<?php if($value->is_deleted == 0) : ?>
										<span class="label label-danger">False</span>
									<?php else: ?>
										<span class="label label-success">True</span>
									<?php endif; ?>
								</td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                        <tr>
							<th>No</th>
							<th>Action</th>
							<th>Username</th>
							<th>Email</th>
							<th>Admin</th>
							<th>Moderator</th>
							<th>Confirmed</th>
							<th>Deleted</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
