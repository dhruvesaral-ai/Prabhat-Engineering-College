

<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Student Record's</h6>
                    <div class="table-responsive">
                        <?php
                            $sr = 1;
                        ?>
                        <table class="table" id="myDataTable" table-striped>
                            <thead>
                                <tr>
                                    <th scope="col">Sr.</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Father's Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Alternate Number</th>
                                    <th scope="col">Aadhar</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Courses</th>
                                    <th scope="col">Sub Courses</th>
                                    <th scope="col">State</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e($sr++); ?></th>
                                        <td><?php echo e($registration->full_name); ?></td>
                                        <td><?php echo e($registration->father_name); ?></td>
                                        <td><?php echo e($registration->gender); ?></td>
                                        <td><?php echo e($registration->dob); ?></td>
                                        <td><?php echo e($registration->email); ?></td>
                                        <td><?php echo e($registration->mobile); ?></td>
                                        <td><?php echo e($registration->alt_mobile); ?></td>
                                        <td><?php echo e($registration->aadhaar); ?></td>
                                        <td><?php echo e($registration->religion); ?></td>
                                        <td><?php echo e($registration->courses); ?></td>
                                        <td><?php echo e($registration->sub_courses); ?></td>
                                        <td><?php echo e($registration->state); ?></td>
                                        <td><?php echo e($registration->city); ?></td>
                                        <td>
                                            <div class="d-flex align-items-center g-3">
                                                <a href="<?php echo e(route('student.records.show', $registration->id)); ?>"
                                                    style="margin-right: 8px;" class="btn btn-sm btn-info">
                                                    <i class="fa fa-eye text-white"></i>
                                                </a>
                                                <form action="<?php echo e(route('student.records.delete', $registration->id)); ?>"
                                                      method="POST"
                                                      class="delete-form">
                                                
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                
                                                    <button type="submit"  class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash text-white"></i>
                                                    </button>
                                                </form>
                                           </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/login-register/student-registration-view.blade.php ENDPATH**/ ?>