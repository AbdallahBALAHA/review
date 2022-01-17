<!DOCTYPE html>
<html>
<head>
    <title>USERS MANAGEMENT</title>
    <?php echo $__env->make('includes.AppStyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="grey lighten-4">
<?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <?php echo $__env->yieldContent('MainContent'); ?>
</div>
</body>
<?php echo $__env->make('includes.AppJS', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</html>
<?php /**PATH P:\Downloads\AKB_Project-main\resources\views/layouts/main.blade.php ENDPATH**/ ?>