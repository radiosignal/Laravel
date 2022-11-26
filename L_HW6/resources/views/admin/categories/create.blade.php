
@extends('layouts.app')

@section('title', 'Создание категории')


@section ('menu')
    @include('admin.categories.menu')
@endsection
{{--@dump(old())--}}
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

<div class="card-header">{{__((!$categories->id)? 'Create category':'Edit category')}}</div>
{{--                    @dd($categories)--}}

                    <div class="card-body">


                        <h1>Page:{{__((!$categories->id)? ' Create ':' Edit ')}}Category</h1>
                       <form action="@if(!$categories->id){{route('admin.categories.create')}}@else{{route('admin.categories.update',$categories)}}@endif" method="post">


                            @csrf

                            <div class="form-group">
                                <label for="categoryTitle">Категория</label>
                                <input type="text" name="title" id="categoryTitle" class="form-control" value="{{$categories->title ?? old('title')}}">
                            </div>
{{--                           @dd($categories )--}}
                            <div class="form-group">
                                <label for="categoryText">slug</label>
                                <input type="text" name="slug" id="categoryText" class="form-control" value="{{$categories->slug ??old('slug')}}">


                            </div>
                            <div class="form-group">


                                <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="@if(!$categories->id) Create @else Edit @endif">


                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


