<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title><?php $__env->startSection('title'); ?>Page@show</title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
<?php echo $__env->yieldContent('menu'); ?>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/layouts/main.blade.php ENDPATH**/ ?>