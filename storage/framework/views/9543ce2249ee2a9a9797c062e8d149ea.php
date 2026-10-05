<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Fees Record's</h6>
                    <div class="table-responsive">
                        <?php
                            $sr = 1;
                        ?>
                        <table class="table table-striped" id="myDataTable">
                            <thead>
                                <tr>
                                    <th scope="col">Sr.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Roll No.</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">
                                       Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($sr++); ?></th>
                                        <td><?php echo e($fee->contact_name); ?></td>
                                        <td><?php echo e($fee->email); ?></td>
                                        <td><?php echo e($fee->mobile); ?></td>
                                        <td><?php echo e($fee->course); ?></td>
                                        <td><?php echo e($fee->roll_no); ?></td>
                                        <td><?php echo e($fee->amount_inr); ?></td>
                                        
                                        <td>
                                            <form action="<?php echo e(route('payment.delete', $fee->id)); ?>"  class="delete-form"  method="POST" >
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

<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/login-register/payment-view.blade.php ENDPATH**/ ?>