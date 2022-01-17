<?php $__env->startSection('MainContent'); ?>
<!-- Content Row -->
<div class="row">
    <div class="col-12">
        <table class="table table-hover">
            <thead>
            <tr class="bg-dark text-white">
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td><?php echo e($customer->fname); ?></td>
                    <td><?php echo e($customer->email); ?></td>
                    <td><?php echo e($customer->address); ?></td>
                    <td><?php echo e($customer->password); ?></td>
                    <td>
                        <a href="<?php echo e(route('customer.edit', $customer->id)); ?>" class="btn btn-primary btn-sm" style="background-color: green">Edit</a>
                        <form style="display: inline" action="<?php echo e(route('customer.destroy', $customer->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button onclick="return confirm('are you sure?')" class="btn btn-danger btn-sm" style="background-color: red">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <?php echo e($customers->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH P:\Downloads\AKB_Project-main\resources\views/admin/index.blade.php ENDPATH**/ ?>