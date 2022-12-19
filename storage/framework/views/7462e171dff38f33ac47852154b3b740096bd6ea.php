

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New users</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="<?php echo e(url('users')); ?>"> Back</a>
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
    <form action="<?php echo e(route('users.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="txtFirstName">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email_address" placeholder="Enter Your Email" name="email" required autofocus>
        </div>
        <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="10" placeholder="Enter Address"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PMS\resources\views/create.blade.php ENDPATH**/ ?>