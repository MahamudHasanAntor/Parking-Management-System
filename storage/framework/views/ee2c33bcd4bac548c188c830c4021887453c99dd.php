

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Parking Slot</h2>
        </div>
        <br>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(url('slot')); ?>"> Back</a>
        </div>
    </div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

   
    <form action="<?php echo e(route('slot.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="level">Level:</label>
            <input type="text" class="form-control" id="level" placeholder="Enter Level Name" name="level">
        </div>
        <div class="form-group">
            <label for="block">Block:</label>
            <input type="text" class="form-control" id="block" placeholder="Enter Block Name" name="block">
        </div>
        <div class="form-group">
            <label for="capacity">Capacity:</label>
            <input type="number" class="form-control" id="capacity" placeholder="Enter capacity number" name="capacity">
        </div>
        
        
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('slot.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PMS\resources\views/slot/slot.blade.php ENDPATH**/ ?>