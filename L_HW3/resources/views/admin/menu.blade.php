<!--<a href="/">Main Page</a>-->
{{--<a href="{{route('home')}}">Main</a>--}}
{{--<!--<a href="/news">Main news</a>-->--}}
{{--<a href="{{route('news.index')}}">Main news</a>--}}
{{--<!--<a href="/admin/test1">Test1</a>-->--}}
{{--<a href="{{route('admin.test1')}}">Admin Test 1</a>--}}
{{--<!--<a href="/admin/test2">test2</a>-->--}}
{{--<a href="{{route('admin.test2')}}">Admin Test 2</a>--}}

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
