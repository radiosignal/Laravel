<?php $__env->startSection('title', 'CategoryNews'); ?>



<?php $__env->startSection('menu'); ?>
<?php echo $__env->make('news.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2>Новость категории</h2>

    <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <h2><?php echo e($item['title']); ?></h2>
        <?php if(!$item['isPrivate']): ?>
            <a href="<?php echo e(route('news.categoryNews',$item['id'])); ?>">Is detailed...</a><br><br>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>Here is not any news!</h1>
    <?php endif; ?>


<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/news/category.blade.php ENDPATH**/ ?>
