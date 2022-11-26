



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






@endsection
