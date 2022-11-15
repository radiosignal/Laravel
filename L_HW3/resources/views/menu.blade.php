
{{--<a href="{{route('news.index')}}">Main news</a>--}}
{{--<a href="{{route('admin.index')}}">Main admin</a>--}}
{{--<a href="{{route('news.category.categories')}}">Category News</a>--}}
{{--<a href="{{route('users.index')}}">Main users</a>--}}

<li class="nav-item">
    <a class="nav-link{{request()->routeIs('home')? 'active':""}}" href="{{route('home')}}">Главная</a>
</li>

<li class="nav-item">
    <a class="nav-link{{request()->routeIs('news.index')? 'active':""}}" href="{{route('news.index')}}">Новости все</a>
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
