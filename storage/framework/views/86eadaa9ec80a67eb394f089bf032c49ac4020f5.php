
  
<?php $__env->startSection('content'); ?>
<div class="container">
    <style>
         Button {
  background-color: 90EE90;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  width: 40%;
  cursor: pointer;
}
</style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Supervisor')); ?></div>
  
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    
                    You are Logged In<br><br>

                    <button><a href="nuser">Offline Users </a></button><br><br>
                    <button><a href="slot">Add Slot</button><br><br>
                    <!-- <button><a href="">Requests</button><br><br> -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PMS\resources\views/dashboard.blade.php ENDPATH**/ ?>