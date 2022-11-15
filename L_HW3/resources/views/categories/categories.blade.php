<h2>All categories</h2>
<?php
include_once 'menu.php';
?>

<?php foreach ($category as $value): ?>
    <a href="/categories/categories/<?=$value['id']?>"><?=$value['title']?></a><br>
<?php endforeach;?>



@extends('layouts.main')


@section('title', 'AllNews')


@section('menu')
    @include('menu')
@endsection

@section('content')
    <h2>All categories</h2>

    @forelse($news as $value)

        <a href="{{route('news.detailNews',$value['id'])}}">{{$value['title']}}</a><br><br>

    @empty
        <h1>Here is not any news!</h1>
    @endforelse
@endsection


