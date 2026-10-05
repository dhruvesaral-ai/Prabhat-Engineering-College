 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="<?php echo e(route('admin.dashboard')); ?>" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa me-2"></i>PRABHAT</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?php echo e(asset('public/img/user.jpg')); ?>" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Admin</h6>
                
            </div>
        </div>
        <div class="navbar-nav w-100">

            
            
             <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Online Payment's</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="<?php echo e(route('payment.records')); ?>" class="dropdown-item">Fees Detail's</a>
                </div>
            </div>
    
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Admission Enquiry </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="<?php echo e(route('admission.enquiry.view')); ?>" class="dropdown-item">Admission enquiry</a>
                </div>
            </div>

            
            
              <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Feedback Record</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="<?php echo e(route('student.feedback.view')); ?>" class="dropdown-item">Student Feedback</a>
                    <a href="<?php echo e(route('faculty.feedback.view')); ?>" class="dropdown-item">Faculty feedback</a>
                </div>
            </div>

             <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Admission Form</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="<?php echo e(route('student.registration.view')); ?>" class="dropdown-item">Student Record's</a>
                </div>
            </div>

              <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Career Record</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="<?php echo e(route('faculty.view')); ?>" class="dropdown-item">Faculty Record's</a>
                    <a href="<?php echo e(route('staff.view')); ?>" class="dropdown-item">Staff Record's</a>
                </div>
            </div>
            


        </div>
    </nav>
</div>
<!-- Sidebar End --><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/layout/sidebar.blade.php ENDPATH**/ ?>