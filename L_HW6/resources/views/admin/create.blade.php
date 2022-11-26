
@extends('layouts.app')

@section('title', 'Создание новости')


@section ('menu')
    @include('admin.menu')
@endsection
@dump(old())
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

<div class="card-header">{{__((!$news->id)? 'Create news':'Edit news')}}</div>


                    <div class="card-body">


                        <h1>Page:{{__((!$news->id)? ' Create ':' Edit ')}}news</h1>
                       <form action="@if(!$news->id){{route('admin.create')}}@else{{route('admin.update',$news)}}@endif" method="post">


                            @csrf
                            <div class="form-group">
                                <label for="newsTitle">Заголовок новости</label>
                                <input type="text" name="title" id="newsTitle" class="form-control" value="{{$news->title ?? old('title')}}">


                            </div>
                            <div class="form-group">
                                <label for="newsCategory">Категория новости</label>
                                <select name="category_id" id="newsCategory" class="form-control">

                                    @forelse($categories as $item)
                                        <option @if ($item->id == old('category')) selected
                                                @endif value="{{ $item->id }}">{{ $item->title }}</option>

                                    @empty
                                        <option value="0" selected>There no news</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="newsText">Текст новости</label>
                                <input type="text" name="text" id="newsText" class="form-control" value="{{$news->text ??old('text')}}">


                            </div>
                            <div class="form-group">

                                <div class="form-check">
                                    <input @if ($news->isPrivate || old('isPrivate') == "1") checked
                                           @endif id="newsPrivate" name="isPrivate" type="checkbox" value="1" class="form-check-input">
                                    <label for="newsPrivate">Приватная</label>
                                </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="@if(!$news->id) Create @else Edit @endif">
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


