<?php $__env->startSection('title', 'Страница добавления новостей'); ?>


<?php $__env->startSection('menu'); ?>
<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h2>Это страница добавления новостей</h2>
<form action="">Add News
    <dev>
        <li>
            <input type="text">
            <input type="text">
            <input type="textarea">

        </li>

    </dev>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/news/addNews.blade.php ENDPATH**/ ?>