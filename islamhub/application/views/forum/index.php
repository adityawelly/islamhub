<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?= $breadcrumb ?>
		</div>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Forums</h1>
			</div>
		</div>
		
		<div class="col-md-12">
			<table class="table table-striped table-condensed table-hover">
				<caption></caption>
				<thead>
					<tr>
						<th>Forums</th>
						<th>Topics</th>
						<th>Posts</th>
						<th class="hidden-xs">Latest topic</th>
					</tr>
				</thead>
				<tbody>
					<?php if ($forums) : ?>
						<?php foreach ($forums as $forum) : ?>
							<tr>
								<td>
									<p>
										<a href="<?= base_url($forum->slug) ?>"><?= $forum->title ?></a><br>
										<small><?= $forum->description ?></small>
									</p>
								</td>
								<td>
									<p>
										<small><?= $forum->count_topics ?></small>
									</p>
								</td>
								<td>
									<p>
										<small><?= $forum->count_posts ?></small>
									</p>
								</td>
								<td class="hidden-xs">
									<?php if ($forum->latest_topic->title !== null) : ?>
										<p>
											<small><a href="<?= base_url($forum->latest_topic->permalink) ?>"><?= $forum->latest_topic->title ?></a><br>by <a href="<?= base_url('user/' . $forum->latest_topic->author) ?>"><?= $forum->latest_topic->author ?></a>, <?= $forum->latest_topic->created_at ?></small>
										</p>
									<?php else : ?>
										<p>
											<small>no topic yet</small>
										</p>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endif; ?>
				</tbody>
			</table>
			
		</div>
		
		<?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) : ?>
			<div class="col-md-12">
				<a href="<?= base_url('create_forum') ?>" class="btn btn-default">Create a new forum</a>
			</div>
		<?php endif; ?>
 <script id="cid0020000219487547742" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 200px;height: 300px;">{"handle":"rumahkonsultasi","arch":"js","styles":{"a":"009900","b":100,"c":"FFFFFF","d":"FFFFFF","k":"009900","l":"009900","m":"009900","n":"FFFFFF","p":"10","q":"009900","r":100,"pos":"br","cv":1,"cvbg":"009900","cvw":200,"cvh":30,"ticker":1,"fwtickm":1}}</script>
	</div><!-- .row -->
</div><!-- .container -->

<?php //var_dump($forums); ?>