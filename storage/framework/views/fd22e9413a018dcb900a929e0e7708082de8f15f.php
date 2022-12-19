

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-11">
            <h2>Update User</h2>
        </div>
        <br>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(url('nuser')); ?>"> Back</a>
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
    <form method="post" action="<?php echo e(route('nuser.update',$nuser->id)); ?>" >
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="txtFirstName">First Name:</label>
            <input type="text" class="form-control" id="txtFirstName" placeholder="Enter First Name" name="txtFirstName" value="<?php echo e($nuser->first_name); ?>">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName" value="<?php echo e($nuser->last_name); ?>">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="5" placeholder="Enter Address"><?php echo e($nuser->address); ?></textarea>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" value="<?php echo e($nuser->phone); ?>">
        </div>
        <div class="form-group">
            <label for="carid">Car Number:</label>
            <input type="text" class="form-control" id="carid" placeholder="Enter your car number" name="carid" value="<?php echo e($nuser->carid); ?>">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" placeholder="" name="date" value="<?php echo e($nuser->date); ?>">
        </div>
        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" id="time" placeholder="" name="time" value="<?php echo e($nuser->time); ?>">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('nuser.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PMS\resources\views/nuser/edit.blade.php ENDPATH**/ ?>