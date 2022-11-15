<?php $__env->startSection('title', 'AllCategoryNews'); ?>



<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('news.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h2>Все Новости категории</h2>

    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

            <a href="<?php echo e(route('news.categoriesNews',$category['slug'])); ?>"><h2><?php echo e($category['title']); ?></h2></a><br><br>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>Here is not a category!</h1>
    <?php endif; ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/news/categories.blade.php ENDPATH**/ ?>
