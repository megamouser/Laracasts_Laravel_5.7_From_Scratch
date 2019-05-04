@extends('layout')
@section('content')
<div class="container">
    <h1 class="title">{{ $project->title }}</h1>

    <hr>

    <div>
        {{ $project->description }}
    </div>

    <div>
        <a href="/projects/{{ $project->id }}/edit">Edit</a>
    </div>

    <br>
    
    @if ($project->tasks->count())
        <div>
            @foreach($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">

                        @method('PATCH')
                        @csrf

                    <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
