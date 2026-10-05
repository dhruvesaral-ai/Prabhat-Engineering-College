

<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Online Registration View</h6>
                            <div class="table-responsive">
                                <?php
                                    $sr=1;
                                ?>
                                <table class="table" id="myDataTable" table-striped>
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Courses</th>
                                            <th scope="col">E-Mail</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">DOB</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Action</th>
                                      

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($sr++); ?></th>
                                            <td><?php echo e($registration->contact_name); ?></td>
                                            <td><?php echo e($registration->courses); ?></td>
                                            <td><?php echo e($registration->contact_email); ?></td>
                                            <td><?php echo e($registration->contact_phone); ?></td>
                                            <td><?php echo e($registration->dob); ?></td>
                                            <td><?php echo e($registration->gender); ?></td>
                                            <td>

                                                <form action="<?php echo e(route('online.registration.delete',$registration->id)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" style="float: ; border:none; background:none;">
                                                        <i class="fa fa-trash text-danger"></i>
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



<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/admissions/online-registration-view.blade.php ENDPATH**/ ?>