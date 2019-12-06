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
            <div class="control"><button type="button" class="btn btn-primary btn-danger" data-toggle="modal" data-target="#exampleModal">Delete Project</button></div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hey</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Do you want delete this project ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
