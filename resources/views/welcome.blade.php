@extends('layout')
@section('title')
    Home page
@endsection

@section('content')

    <h1>My first page!</h1>

    <ul>
        @foreach($tasks as $task)

            <li>{{ $task }}</li>

        @endforeach
    </ul>


@endsection
