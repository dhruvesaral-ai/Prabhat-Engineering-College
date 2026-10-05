<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Admin-Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('public/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')); ?>"
        rel="stylesheet">
    <link href="<?php echo e(asset('public/cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css')); ?>"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('public/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('public/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('public/css/style.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="<?php echo e(route('admin.login')); ?>">
                                    <h3 class="text-primary">Admin</h3>
                                </a>
                                <h3>Sign In</h3>
                            </div>

                            <?php if(session('error')): ?>
                                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
                            <?php endif; ?>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="floatingInput"
                                    placeholder="info@yourdomain.com" required>
                                <label for="floatingInput">Email address</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="floatingPassword"
                                    placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>


                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                            
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <script src="<?php echo e(asset('public/code.jquery.com/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/cdn.jsdelivr.net/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/chart/chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/tempusdominus/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/tempusdominus/js/moment-timezone.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>

</body>


<!-- Mirrored from themewagon.github.io/dashmin/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Apr 2025 09:57:43 GMT -->

</html>
<?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/auth/admin-login.blade.php ENDPATH**/ ?>