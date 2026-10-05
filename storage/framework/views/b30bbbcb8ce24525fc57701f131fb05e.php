

<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                  <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Faculty Feedback Records</h6>
                            <div class="table-responsive">
                                <?php
                                    $sr=1;
                                ?>
                                <table class="table" id="myDataTable" table-striped>
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr.</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Suggestions</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($sr++); ?></th>
                                            <td><?php echo e($faculty->contact_name); ?></td>
                                            <td><?php echo e($faculty->department); ?></td>
                                            <td><?php echo e($faculty->designation); ?></td>
                                            <td><?php echo e($faculty->suggestions); ?></td>
                                            <td>
                                                <form action="<?php echo e(route('faculty.feedback.delete',$faculty->id)); ?>" class="delete-form" method="post">
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



<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/pages/faculty-feedback-view.blade.php ENDPATH**/ ?>