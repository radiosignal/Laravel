<li class="nav-item">
    <a class="nav-link{{request()->routeIs('home')? 'active':""}}" href="{{route('home')}}">Главная</a>
</li>

<li class="nav-item">
    <a class="nav-link{{request()->routeIs('admin.index')? 'active':""}}" href="{{route('admin.index')}}">Админка</a>
</li>

<li class="nav-item">
    <a class="nav-link{{request()->routeIs('news.category.categories')? 'active':""}}" href="{{route('news.category.categories')}}">Категории новостей</a>
</li>

<li class="nav-item">
    <a class="nav-link{{request()->routeIs('users.index')? 'active':""}}" href="{{route('users.index')}}">Пользователь</a>
</li>
