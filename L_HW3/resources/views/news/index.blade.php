
@extends('layouts.app')


@section('title', 'Основная страница новостей')


@section('menu')
    @include('news.menu')
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">

    <H1>Это Основная Страница Новостей</H1>
                        <a href="{{route('news.briefNews')}}">Все Новости</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
