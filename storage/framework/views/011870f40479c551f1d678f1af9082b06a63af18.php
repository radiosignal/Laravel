<?php $__env->startSection('title', 'Создание новости'); ?>


<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('admin.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php dump(old()); ?>
<?php $__env->startSection('content'); ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

<div class="card-header"><?php echo e(__((!$news->id)? 'Create news':'Edit news')); ?></div>


                    <div class="card-body">


                        <h1>Page:<?php echo e(__((!$news->id)? ' Create ':' Edit ')); ?>news</h1>
                       <form action="<?php if(!$news->id): ?><?php echo e(route('admin.create')); ?><?php else: ?><?php echo e(route('admin.update',$news)); ?><?php endif; ?>" method="post">


                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="newsTitle">Заголовок новости</label>
                                <input type="text" name="title" id="newsTitle" class="form-control" value="<?php echo e($news->title ?? old('title')); ?>">


                            </div>
                            <div class="form-group">
                                <label for="newsCategory">Категория новости</label>
                                <select name="category_id" id="newsCategory" class="form-control">

                                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option <?php if($item->id == old('category')): ?> selected
                                                <?php endif; ?> value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <option value="0" selected>There no news</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="newsText">Текст новости</label>
                                <input type="text" name="text" id="newsText" class="form-control" value="<?php echo e($news->text ??old('text')); ?>">


                            </div>
                            <div class="form-group">

                                <div class="form-check">
                                    <input <?php if($news->isPrivate || old('isPrivate') == "1"): ?> checked
                                           <?php endif; ?> id="newsPrivate" name="isPrivate" type="checkbox" value="1" class="form-check-input">
                                    <label for="newsPrivate">Приватная</label>
                                </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="<?php if(!$news->id): ?> Create <?php else: ?> Edit <?php endif; ?>">
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/create.blade.php ENDPATH**/ ?>