@extends('layouts.app')


@section('title', 'Все новости категории')



@section('menu')
    @include('news.menu')
@endsection

@section('content')
    <h2>Все Новости категории</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
{{--@dd($categories)--}}
                        @forelse($categories as $category)

                            <a href="{{route('news.category.show',$category->slug)}}">
                                <h2>{{$category->title}}</h2></a><br>

                        @empty
                            <h1>Here is not a category!</h1>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection



