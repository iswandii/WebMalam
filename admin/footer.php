<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->


<script src="../js/jquery.js"></script>
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
<script src="vendors/summernote-0.8.18-dist/umd/popper.min.js"></script>
<script src="vendors/summernote-0.8.18-dist/summernote-bs4.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="vendors/summernote-0.8.18-dist/lang/summernote-id-ID.js"></script>
<!-- datatables -->
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange: true,
            buttons: ['copy', 'excel', 'pdf', 'colvis'],
            // dom: "<'row'<'col-md-2'l><'col-md-8'B><'col-md-4'f>>" +
            //     "<'row<'col-md-12'tr>>" +
            //     "<'row'<col-md-5'i><'col-md-7'p>>",
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ]
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
</script>
<script>
    $('#content').summernote({
        placeholder: 'Isi Konten',
        tabsize: 2,
        height: 120,
        lang: 'id-ID',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>




<script type="text/javascript" src="vendors/datatables/js/jquery.js"></script>
<script src="vendors/DataTabless/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
<script src="vendors/DataTabless/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="vendors/DataTabless/Buttons-1.6.3/js/dataTables.buttons.min.js"></script>
<script src="vendors/DataTabless/Buttons-1.6.3/js/buttons.bootstrap4.min.js"></script>
<script src="vendors/DataTabless/JSZip-2.5.0/jszip.min.js"></script>
<script src="vendors/DataTabless/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="vendors/DataTabless/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="vendors/DataTabless/Buttons-1.6.3/js/buttons.html5.min.js"></script>
<script src="vendors/DataTabless/Buttons-1.6.3/js/buttons.print.min.js"></script>
<script src="vendors/DataTabless/Buttons-1.6.3/js/buttons.colVis.min.js"></script>

<!-- <script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap4.min.js"></script> -->

<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/chart.js"></script>
<!-- End custom js for this page-->
</body>

</html>