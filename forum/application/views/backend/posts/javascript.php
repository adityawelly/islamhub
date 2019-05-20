<script src="<?=base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?=base_url('assets/js//dataTables.bootstrap.min.js');?>"></script>
<script>
    $('#tambah_tooltip').tooltip()
    $(function () {
        $('#dataTable').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
    $(function () {
        $('#fakultas').hide()
        $('#level').change(function () {
            var data = $(this).val()
            if (data == "FAKULTAS")
                $('#fakultas').show()
            else
                $('#fakultas').hide()
        });
    });
</script>