@extends('layout')
@section('title')
    Created
@endsection

@section('content')
    <h1>Create a New Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>
        <div>
            <textarea name="description" id="" cols="30" rows="5" placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>

    </form>

@endsection
