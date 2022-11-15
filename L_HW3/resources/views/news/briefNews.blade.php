

@extends('layouts.app')


@section('title', 'Все новости')


@section('menu')
    @include('menu')
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">

    <h2>Все новости</h2>

   @forelse($news as $item)

    <a href="{{route('news.detailNews',$item['id'])}}">{{$item['title']}}</a><br><br>

   @empty
    <h1>Here is not any news!</h1>
   @endforelse
@endsection


                    </div>
                </div>
            </div>
        </div>



