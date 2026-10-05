<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Admission Enquiry View</h6>
                            <div class="table-responsive">
                                <?php
                                    $sr=1;
                                ?>
                                <table class="table" id="myDataTable" table-striped>
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Enquiry date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $enquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($sr++); ?></th>
                                            <td><?php echo e($enquiry->name); ?></td>
                                            <td><?php echo e($enquiry->mobile); ?></td>
                                            <td><?php echo e($enquiry->email); ?></td>
                                            <td><?php echo e($enquiry->courses); ?></td>
                                            <td><?php echo e($enquiry->created_at->format('d-m-Y')); ?></td>
                                            <td>

                                                <form action="<?php echo e(route('enquiry.delete',$enquiry->id)); ?>" class="delete-form" action="post">
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



<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/admissions/enquiry-view.blade.php ENDPATH**/ ?>