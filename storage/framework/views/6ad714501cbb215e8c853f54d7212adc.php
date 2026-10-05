

<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Faculty Career Record's</h6>
                <div class="table-responsive">
                    <?php
                        $sr = 1;
                    ?>
                    <table class="table table-striped" id="myDataTable">
                        <thead>
                            <tr>
                                <th scope="col">Sr.</th>
                                <th scope="col">Post Applied</th>
                                <th scope="col">Department</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Experience</th>
                                <th scope="col">Highest Degree</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Resume</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($sr++); ?></th>
                                    <td><?php echo e($faculty->post_applied); ?></td>
                                    <td><?php echo e($faculty->department); ?></td>
                                    <td><?php echo e($faculty->full_name); ?></td>
                                    <td><?php echo e($faculty->email); ?></td>
                                    <td><?php echo e($faculty->experience); ?></td>
                                    <td><?php echo e($faculty->highest_degree); ?></td>
                                    <td><?php echo e($faculty->phone); ?></td>
                                    <td style="min-width:300px;">
                                        <div class="d-flex align-items-center">
                                             <a class="btn btn-sm btn-success me-2" href="<?php echo e(route('faculty.view.resume', $faculty->id)); ?>" target="_blank">
                                                <i class="fa fas fa-file-pdf"></i> Show Resume
                                             </a>
      
                                            <a class="btn btn-sm btn-warning" href="<?php echo e(route('faculty.resume.download', $faculty->id)); ?>" target="_blank">
                                                <i class="fa fas fa-file-pdf"></i> Download Resume
                                            </a>
                                        </div>

                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('faculty.records.delete', $faculty->id)); ?>" method="POST" class="delete-form" style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash text-white"></i>
                                            </button>
                                        </form>
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

<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/login-register/faculty-career-view.blade.php ENDPATH**/ ?>