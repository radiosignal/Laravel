<?php $__env->startSection('title', 'Одна новость'); ?>



<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?><h2>Одна новость</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">


                        <?php if($news): ?>
                            <?php if(!$news->isPrivate): ?>
                                <h2><?php echo e($news->title); ?></h2>
                                <p><?php echo e($news->text); ?></p>


                                <div class="card-img" style="background-image: url(<?php echo e(asset($news->img)); ?>)"></div>


                            <?php else: ?>
                                Please register to get news
                            <?php endif; ?>
                        <?php else: ?>
                            <h1>There is not this news!</h1>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/news/detailNews.blade.php ENDPATH**/ ?>