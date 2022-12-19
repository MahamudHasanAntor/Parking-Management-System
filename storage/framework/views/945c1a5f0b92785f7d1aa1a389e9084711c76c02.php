<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
    <title>Send form data with vue js in laravel</title>
</head>
<body>
     
    <div id="app">
    <div class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
     
    </div>
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
</body>
</html> <?php /**PATH C:\xampp\htdocs\PMS\resources\views/layouts/app.blade.php ENDPATH**/ ?>