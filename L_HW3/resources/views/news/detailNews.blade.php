

@extends('layouts.app')


@section('title', 'Одна новость')



@section('menu')
    @include('menu')
@endsection

@section('content')<h2>Одна новость</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">


                        @if ($news)
                            @if(!$news['isPrivate'])
                                <h2>{{$news['title']}}</h2>
                                <p>{{$news['text']}}</p>

                            @else
                                Please register to get news
                            @endif
                        @else
                            <h1>There is not this news!</h1>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection




