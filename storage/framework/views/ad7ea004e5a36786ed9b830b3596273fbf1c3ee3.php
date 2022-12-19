
<?php $__env->startSection('title'); ?>
Register
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<h1>Profile</h1>

<h3>

<?php echo e(session()->get('name')); ?>


</h3>

 <!-- React root DOM -->

 <div id="axioget">

</div>



<!-- React JS -->

<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    
</script>
<?php $__env->stopSection(); ?>
    




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PMS\resources\views/reactaxiosget.blade.php ENDPATH**/ ?>