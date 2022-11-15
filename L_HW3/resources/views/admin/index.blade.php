

@extends('layouts.app')


@section('title', 'Основная страница Администратора')


@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">


                        <h1>Это Основная страница Администратора</h1>

                        <ul>
                            <li>  <a href="{{route('admin.test1')}}">Admin Test 1</a></li>
                            <li>  <a href="{{route('admin.test2')}}">Admin Test 2</a></li>
                        </ul>




                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

