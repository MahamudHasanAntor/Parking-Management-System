

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-11">
                <h2>Details</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(url('users')); ?>"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th>Name:</th>
            <td><?php echo e($users->name); ?></td>
        </tr>
        <tr>
            <th>Email :</th>
            <td><?php echo e($users->email); ?></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><?php echo e($users->address); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PMS\resources\views/view.blade.php ENDPATH**/ ?>