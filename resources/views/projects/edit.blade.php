@extends('layout')

@section('content')
    <h1 class="title">Edit project</h1>
    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control"><input type="text" class="form-control" name="title" placeholder="Title" value="{{ $project->title }}"></div>
        </div>
        <div class="con">
            <label class="label" for="description">Description</label>
            <div class="control"><textarea name="description" class="form-control">{{ $project->description }}</textarea></div>
        </div>
        <div>
            <div class="control"><button type="submit" class="btn btn-success">Update project</button></div>
        </div>



    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <div class="field">
            <div class="control"><button type="submit" class="btn btn-danger">Delete Project</button></div>
        </div>
    </form>

@endsection
