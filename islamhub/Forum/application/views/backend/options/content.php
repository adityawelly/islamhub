<div class="content-wrapper">
    <section class="content-header">
        <h1>
			Options
        </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-gears"></i> Options</a></li>
        </ol>
    </section>
    <section class="content">

        <!-- notification -->
        <?php $this->load->view('notification') ?>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabel Options</h3>
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
                            <th>Name</th>
                            <th>Value</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($tblOption as $value): ?>
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
                                            <li><a href="<?=base_url('Backend/Options/Delete/'.$value->id)?>" onclick="return confirm('Apakah Anda Yakin ?')">Delete</i></a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td><?=$value->name?></td>
                                <td><?=$value->value?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tfoot>
                        <tr>
							<th>No</th>
							<th>Action</th>
							<th>Name</th>
							<th>Value</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
