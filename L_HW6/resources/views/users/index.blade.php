




@extends('layouts.app')


@section('title', 'Авторизация')


@section('menu')
@include('users.menu')
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <H1>Main page of users</H1>
                        <a href="{{route('users.auth')}}">Страница Авторизации</a><br><br>


                    </div>
                </div>
            </div>
        </div>






@endsection


