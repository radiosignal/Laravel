<?php $__env->startSection('title', 'Авторизация'); ?>


<?php $__env->startSection('menu'); ?>
    <?php echo $__env->make('users.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
            <h1> Authorize here</h1>
                    <form action="">
                        <dev>
                            <input  type="email">
                            <input type="password">
                            <input type="checkbox">
                            <button>Authorize</button>
                        </dev>
                    </form>


                    </div>
                </div>
            </div>
        </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/users/auth.blade.php ENDPATH**/ ?>