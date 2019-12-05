
@extends('layout')
@section('title')
    Projects
@endsection

@section('content')
    <h1 class="title">Projects (<a href="/projects/create">create new</a>)</h1>

    <div class="bd-example bd-example-tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach ($projects as $i => $project)
                <li class="nav-item">
                    <a class="nav-link @if ($i == 0) active @endif" id="tab-{{ $project->id }}" data-toggle="tab"
                       href="#href_{{ $project->id }}" role="tab" aria-controls="aria_{{ $project->id }}" aria-selected="@if ($i == 0) true @else false @endif">
                        {{ $project->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="myTabContent">
            @foreach ($projects as $i => $project)
                <div class="tab-pane fade @if ($i == 0) active show @endif" id="href_{{ $project->id }}" role="tabpanel" aria-labelledby="aria_{{ $project->id }}-tab">
                    <p>
                        {{ $project->description }}
                    </p>
                    <a class="btn btn-primary" href="/projects/{{ $project->id }}/edit" role="button">Edit</a>
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

                </div>
            @endforeach
        </div>
    </div>
@endsection
