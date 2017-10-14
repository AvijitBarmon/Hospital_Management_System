</div>
<!-- jQuery -->
<script src="assets/admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="assets/admin/vendor/raphael/raphael.min.js"></script>
<script src="assets/admin/vendor/morrisjs/morris.min.js"></script>
<script src="assets/admin/data/morris-data.js"></script>
<!-- DataTables JavaScript -->
<script src="assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="assets/admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="assets/admin/dist/js/sb-admin-2.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    $(document).ready(function () {
        $('.alert').delay(2000).fadeOut(500,function () {
            $(this).alert('close');
        });
    });

    $(document).on('click','.delete',function () {
        var id = $(this);
        $('#delete').val(id.data('id'));
    });

</script>

</body>

</html>