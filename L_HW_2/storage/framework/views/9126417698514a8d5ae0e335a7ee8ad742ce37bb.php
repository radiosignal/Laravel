





<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('home')? 'active':""); ?>" href="<?php echo e(route('home')); ?>">Главная</a>
</li>

<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('news.index')? 'active':""); ?>" href="<?php echo e(route('news.index')); ?>">Новости</a>
</li>

<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('admin.index')? 'active':""); ?>" href="<?php echo e(route('admin.index')); ?>">Админка</a>
</li>

<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('news.category.categories')? 'active':""); ?>" href="<?php echo e(route('news.category.categories')); ?>">Категории новостей</a>
</li>

<li class="nav-item">
    <a class="nav-link<?php echo e(request()->routeIs('users.index')? 'active':""); ?>" href="<?php echo e(route('users.index')); ?>">Пользователь</a>
</li>
<?php /**PATH /var/www/html/resources/views/news/menu.blade.php ENDPATH**/ ?>