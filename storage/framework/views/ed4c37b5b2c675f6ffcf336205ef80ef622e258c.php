<?php $__env->startSection('title', 'Основная страница новостей'); ?>


<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('news.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">

    <H1>Это Основная Страница Новостей</H1>
                        <a href="<?php echo e(route('news.briefNews')); ?>">Все Новости</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/news/index.blade.php ENDPATH**/ ?>