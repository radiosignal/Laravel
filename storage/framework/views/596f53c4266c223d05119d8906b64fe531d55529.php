<?php $__env->startSection('title', 'Основная страница Администратора'); ?>


<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.categories.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">


                        <h1>Это Основная страница Администратора</h1>
                        <h2>Все категории</h2>

                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <h2><?php echo e($item->title); ?></h2>

                            <a href="<?php echo e(route('admin.categories.edit',$item)); ?>" class="btn btn-success">Edit</a>

                            <a href="<?php echo e(route('admin.categories.destroy',$item)); ?>" class="btn btn-danger">Delete</a><br><br>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <h1>Here is not any categories!</h1>
                        <?php endif; ?>



                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>