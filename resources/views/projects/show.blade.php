@extends('layout')
@section('content')
<div class="container">
    <h1 class="title">{{ $project->title }}</h1>

    <hr>

    <div>
        {{ $project->description }}
    </div>
    
    @if ($project->tasks->count())
        <div>
            @foreach($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </div>
    @endif
    
    <div>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </div>
</div>
@endsection
