

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-11">
                <h2>User Details of <?php echo e($nuser->first_name); ?> <?php echo e($nuser->last_name); ?></h2>
        </div>
        <br>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(url('nuser')); ?>"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>First Name:</th>
            <td><?php echo e($nuser->first_name); ?></td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td><?php echo e($nuser->last_name); ?></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><?php echo e($nuser->address); ?></td>
        </tr>
        <tr>
            <th>Phone Number:</th>
            <td><?php echo e($nuser->phone); ?></td>
        </tr>
        <tr>
            <th>Car Number:</th>
            <td><?php echo e($nuser->carid); ?></td>
        </tr>
        <tr>
            <th>Date:</th>
            <td><?php echo e($nuser->date); ?></td>
        </tr>
        <tr>
            <th>Time:</th>
            <td><?php echo e($nuser->time); ?></td>
        </tr>

    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('nuser.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PMS\resources\views/nuser/view.blade.php ENDPATH**/ ?>