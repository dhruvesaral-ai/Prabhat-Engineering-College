<!doctype html>
<html lang="en">
    <?php echo $__env->make('layout.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <?php echo $__env->make('layout.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>

    <div class="content">
        <?php echo $__env->make('layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
<?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/layout/main.blade.php ENDPATH**/ ?>