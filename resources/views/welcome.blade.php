@extends('layout')
@section('title')
    Home page
@endsection

@section('content')

    <h1>My first page!</h1>

    <ul class="list-group">
        @foreach($tasks as $task)

            <li class="list-group-item">{{ $task }}</li>

        @endforeach
    </ul>


@endsection
