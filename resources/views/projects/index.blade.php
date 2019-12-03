
@extends('layout')
@section('title')
    Projects
@endsection

@section('content')
    <h1>Projects (<a href="/projects/create">create new</a>)</h1>
    @foreach ($projects as $project)
        <li>{{ $project->title }} ({{ $project->description }})</li>
    @endforeach

@endsection
