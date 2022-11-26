<?php $__env->startSection('title', 'Создание категории'); ?>


<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.categories.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

<div class="card-header"><?php echo e(__((!$categories->id)? 'Create category':'Edit category')); ?></div>


                    <div class="card-body">


                        <h1>Page:<?php echo e(__((!$categories->id)? ' Create ':' Edit ')); ?>Category</h1>
                       <form action="<?php if(!$categories->id): ?><?php echo e(route('admin.categories.create')); ?><?php else: ?><?php echo e(route('admin.categories.update',$categories)); ?><?php endif; ?>" method="post">


                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="categoryTitle">Категория</label>
                                <input type="text" name="title" id="categoryTitle" class="form-control" value="<?php echo e($categories->title ?? old('title')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="categoryText">slug</label>
                                <input type="text" name="slug" id="categoryText" class="form-control" value="<?php echo e($categories->slug ??old('slug')); ?>">


                            </div>
                            <div class="form-group">


                                <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="<?php if(!$categories->id): ?> Create <?php else: ?> Edit <?php endif; ?>">


                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/categories/create.blade.php ENDPATH**/ ?>