
@extends('layouts.app')


@section('title', 'Страница добавления новостей')


@section('menu')
@include('menu')
@endsection

@section('content')
<h2>Это страница добавления новостей</h2>
<form action="">Add News
    <dev>
        <li>
            <input type="text">
            <input type="text">
            <input type="textarea">

        </li>

    </dev>

</form>
@endsection
