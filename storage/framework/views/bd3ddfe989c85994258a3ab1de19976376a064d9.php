<?php $__env->startSection('title', 'Новость категории'); ?>



<?php $__env->startSection('menu'); ?>
<?php echo $__env->make('news.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">
                    <h1>Category news:<?php echo e($category); ?></h1>
                    <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <h2><?php echo e($item->title); ?></h2>
                        <?php if(!$item->isPrivate): ?>
                            <a href="<?php echo e(route('news.detailNews',$item->id)); ?>">Is detailed...</a><br>
                        <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h1>Here is not any news!</h1>
                    <?php endif; ?>



                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/news/category.blade.php ENDPATH**/ ?>