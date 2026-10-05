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
    $(document).ready(function() {
        $('#myDataTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
</script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>
<?php /**PATH C:\xampp\htdocs\prabh\resources\views/layout/footer.blade.php ENDPATH**/ ?>