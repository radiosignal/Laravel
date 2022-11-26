

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
                        <h2>Все новости</h2>

                        @forelse($news as $item)

                            <h2>{{$item->title}}</h2>

                            <a href="{{route('admin.edit',$item)}}" class="btn btn-success">Edit</a>

                            <form action="{{route('admin.destroy',$item)}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="delete">
                            </form>

{{--                       <a href="{{route('admin.destroy',$item)}}" class="btn btn-danger">Delete</a><br><br>--}}

                        @empty
                            <h1>Here is not any news!</h1>
                        @endforelse
                        {{ $news->links() }}


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

