<?php $__env->startSection('title', 'Основная страница Администратора'); ?>


<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">


                        <h1>Это Основная страница Администратора</h1>

                        <ul>
                            <li>  <a href="<?php echo e(route('admin.test1')); ?>">Admin Test 1</a></li>
                            <li>  <a href="<?php echo e(route('admin.test2')); ?>">Admin Test 2</a></li>
                        </ul>




                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/index.blade.php ENDPATH**/ ?>