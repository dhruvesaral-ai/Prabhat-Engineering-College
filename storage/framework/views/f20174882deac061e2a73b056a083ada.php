      <!-- Back to Top -->
      <a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="<?php echo e(asset('public/code.jquery.com/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/chart/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/tempusdominus/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/tempusdominus/js/moment-timezone.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>


    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script>
    $(document).ready(function () {
        $('#myDataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel',
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    orientation: 'landscape', // portrait or landscape
                    pageSize: 'A4', // A4, A3, etc.
                    title: 'My Custom Report',
                    customize: function (doc) {
                        // Set default styles
                        doc.styles.tableHeader = {
                            bold: true,
                            fontSize: 11,
                            color: 'white',
                            fillColor: '#2d4154', // header background
                            alignment: 'center'
                        };

                        doc.styles.tableBodyEven = {
                            fillColor: '#f3f3f3'
                        };

                        doc.styles.tableBodyOdd = {
                            fillColor: '#ffffff'
                        };

                        // Set column widths
                        doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');

                        // Add margins
                        doc.pageMargins = [40, 60, 40, 60];

                        // Set font size
                        doc.defaultStyle.fontSize = 10;
                    }
                },
                'print'
            ]
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "This record will be deleted permanently!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
    <!-- Template Javascript -->
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
<?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/layout/footer.blade.php ENDPATH**/ ?>