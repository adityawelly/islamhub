<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Forum
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-comment"></i> Forum</a></li>
        </ol>
    </section>
    <section class="content">

        <!-- notification -->
        <?php $this->load->view('notification') ?>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabel Forum</h3>
                <div class="pull-right">
                    <button type="button" class="btn btn-sm btn-primary" id="tambah_tooltip" data-toggle="modal" data-target="#tambah" title="Tambah">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Description</th>
							<th>Topics</th>
                            <th>Create At</th>
                            <th>Update At</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($tblForum as $value): ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-gear"></i> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" data-toggle="modal" data-target="#edit-<?=$value->id?>">Edit</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="<?=base_url('Backend/Forum/Delete/'.$value->id)?>" onclick="return confirm('Apakah Anda Yakin ?')">Delete</i></a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td><?=$value->title?></td>
                                <td><?=$value->slug?></td>
                                <td><?=htmlspecialchars_decode($value->description)?></td>
                                <td class="text-center">
									<a class="btn btn-app" href="<?=base_url('Backend/Forum/Topics/'.$value->id)?>">
										<span class="badge bg-green"><?=$topics[$value->id]?></span>
										<i class="fa fa-bullhorn"></i> Topics
									</a>
								</td>
                                <td><?=$value->created_at?></td>
                                <td><?=$value->updated_at?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                        <tr>
							<th>No</th>
							<th>Action</th>
							<th>Title</th>
							<th>Slug</th>
							<th>Description</th>
							<th>Topics</th>
							<th>Create At</th>
							<th>Update At</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
