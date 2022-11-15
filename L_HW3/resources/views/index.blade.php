
{{--@extends('layouts.app')--}}


{{--@section('title', 'Главная новости')--}}


{{--@section('menu')--}}
{{--    @include('menu')--}}
{{--@endsection--}}

{{--@section('content')--}}

{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}

{{--                    <div class="card-body">--}}
{{--                        <H1>Самая Главная Страница "Новости"</H1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--@endsection--}}




@extends('layouts.app')

@section('menu')
    @include('menu')
@endsection



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


