



@extends('layouts.app')


@section('title', 'Новость категории')



@section('menu')
@include('news.menu')
@endsection

@section('content')
<h2>Новость категории {{$category}}</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">


                <div class="card-body">

                    @forelse($news as $item)
                        <h2>{{$item['title']}}</h2>
                        @if(!$item['isPrivate'])
                            <a href="{{route('news.detailNews',$item['id'])}}">Is detailed...</a><br>
                        @endif

                    @empty
                        <h1>Here is not any news!</h1>
                    @endforelse



                </div>
            </div>
        </div>
    </div>
</div>



@endsection





