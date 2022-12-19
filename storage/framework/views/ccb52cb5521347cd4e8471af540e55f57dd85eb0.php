

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-11">
                <h2>User Information</h2>
        </div>
        <div class="col-lg-1">
           

        <a class="btn btn-success" href="<?php echo e(route('create')); ?>">Add</a>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Car Number</th>
            <th>Time</th>
            <th>Date</th>

            <th width="280px">Action</th>
        </tr>
        <?php
            $i = 0;
        ?>
        <?php $__currentLoopData = $nusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($nuser->first_name); ?></td>
                <td><?php echo e($nuser->last_name); ?></td>
                <td><?php echo e($nuser->carid); ?></td>
                <td><?php echo e($nuser->time); ?></td>
                <td><?php echo e($nuser->date); ?></td>

                <td>
                    <form action="<?php echo e(route('nuser.destroy',$nuser->id)); ?>" method="POST">
                        <a class="btn btn-info" href="<?php echo e(route('nuser.show',$nuser->id)); ?>">Show</a>
                        <a class="btn btn-primary" href="<?php echo e(route('nuser.edit',$nuser->id)); ?>">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PMS\resources\views/list.blade.php ENDPATH**/ ?>