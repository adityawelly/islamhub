<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Topics
			<small><i>Forum</i></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-comments"></i>Forum</a></li>
			<li class="active">Topics</li>
        </ol>
    </section>
    <section class="content">

        <!-- notification -->
        <?php $this->load->view('notification') ?>

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Tabel Topics</h3>
				<div class="box-tools pull-right">
					<a href="<?=base_url('Backend/Forum/')?>" class="btn btn-box-tool">&laquo; back to forum</a>
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
							<th>Posts</th>
                            <th>Create At</th>
                            <th>Update At</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no=1; foreach ($tblTopics as $value): ?>
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
                                            <li><a href="<?=base_url('Backend/Forum/DeleteTopic/'.$value->id)?>" onclick="return confirm('Apakah Anda Yakin ?')">Delete</i></a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td><?=$value->title?></td>
                                <td><?=$value->slug?></td>
                                <td class="text-center">
									<a class="btn btn-app" href="<?=base_url('Backend/Forum/Posts/'.$tblForum->id.'/'.$value->id)?>">
										<span class="badge bg-green"><?=$posts[$value->id]?></span>
										<i class="fa fa-comments"></i> Posts
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
							<th>Posts</th>
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
