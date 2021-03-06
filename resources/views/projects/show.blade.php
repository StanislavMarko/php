@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <div class="content">
        {{ $project->description }}
        <p>
            <a class="myClass" href="/projects/{{ $project->id }}/edit">EDIT</a>
        </p>
    </div>


    @if($project->tasks->count())
        <div>
            @foreach($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </div>
    @endif

@endsection
