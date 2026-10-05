<!DOCTYPE html>
<html lang="en" dir="ltr">

    <?php echo $__env->make('website.layout.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <body id="top-header" class="loading">
        <div class="loader"><img src=""></div>
        <!-- start header -->
<div id="wrapper">
    <!-- start header -->    
        <?php echo $__env->make('website.layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


    <div class="contents">
        
        <?php echo $__env->yieldContent('content'); ?>
    </div>

<?php echo $__env->make('website.layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\prabh\resources\views/website/layout/main.blade.php ENDPATH**/ ?>