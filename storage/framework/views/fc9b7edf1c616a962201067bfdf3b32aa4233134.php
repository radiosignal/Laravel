<?php

@extends('layouts.app')


@section('title', 'Основная страница Администратора')


@section('menu')
    @include('admin.categories.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">


                        <h1>Это Основная страница Администратора</h1>
                        <h2>Все категории</h2>

                        @forelse($categories as $item)

                            <h2>{{$item->title}}</h2>

                            <a href="{{route('admin.categories.edit',$item)}}" class="btn btn-success">Edit</a>

                            <a href="{{route('admin.categories.destroy',$item)}}" class="btn btn-danger">Delete</a><br><br>

                        @empty
                            <h1>Here is not any categories!</h1>
                        @endforelse



                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

 ?><?php /**PATH /var/www/html/resources/views/admin/categories/edit.blade.php ENDPATH**/ ?>