<!-- Select2 -->
<script src="<?=base_url('assets/admin-lte/bower_components/select2/dist/js/select2.full.min.js')?>"></script>
<!-- DataTables -->
<script src="<?=base_url('assets/admin-lte/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/admin-lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script>
	//Initialize Select2 Elements
	$('.select2').select2();

	$(function () {
		//Initialize Data Table Elements
		$('#dataTable').DataTable({
			'paging'      : true,
			'lengthChange': true,
			'searching'   : true,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : true
		});
	});
</script>



