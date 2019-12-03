
@extends('layout')
@section('title')
    Projects
@endsection

@section('content')
    <h1 class="title">Projects (<a href="/projects/create">create new</a>)</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                {{ $project->title }} ({{ $project->description }})
                </a>
            </li>
        @endforeach
    </ul>
@endsection
