    <?php $__env->startSection('MainContent'); ?>
        <section class='container grey-text'>
            <h4 class='center'>Edit a User</h4>
            <form action="<?php echo e(route('customer.update', $customer->id)); ?>" method="POST">
                <?php echo method_field('put'); ?>
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <label>Full name : </label>
                <input type="text" name="fname" value="<?php echo e($customer->fname); ?>">
                <label>Email : </label>
                <input type="email" name="email" value="<?php echo e($customer->email); ?>">
                <label>Address : </label>
                <input type="text" name="address" value="<?php echo e($customer->address); ?>">
                <label>Password : </label>
                <input type="text" name="password" value="<?php echo e($customer->password); ?>">
                <div class="center">
                    <input type="submit" name="submit" value="Edit" class="btn brand z-depth-10">
                </div>
            </form>
        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\Downloads\AKB_Project-main\resources\views/admin/edit.blade.php ENDPATH**/ ?>