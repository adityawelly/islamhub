<!--  DataTables.net Plugin    -->
<script src="<?=base_url()?>assets/js/jquery.datatables.js"></script>

<script src="<?=base_url('assets/plugins/ckeditor/styles.js')?>"></script>
<script src="<?=base_url('assets/plugins/ckeditor/ckeditor.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabelpesan').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });
    });
</script>
<script>
    CKEDITOR.replace( 'isiPesan' );
</script>