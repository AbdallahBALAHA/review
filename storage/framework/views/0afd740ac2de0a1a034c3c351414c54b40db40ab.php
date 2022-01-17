<?php $__env->startSection('MainContent'); ?>
    <section class='container grey-text'>
        <h4 class='center'>Add a User</h4>
            <form class="white" action="<?php echo e(route('customer.store')); ?>" method="POST">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <label>Full name : </label>
            <input type="text" name="fname">
            <label>Email : </label>
            <input type="email" name="email">
            <label>Address : </label>
            <input type="text" name="address">
            <label>Password : </label>
            <input type="text" name="password">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-10">
            </div>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\Downloads\AKB_Project-main\resources\views/admin/create.blade.php ENDPATH**/ ?>