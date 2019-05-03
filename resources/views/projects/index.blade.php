@extends('layout')
@section('content')
<div class="container">
    <h1 class="title">Projects</h1>
    <hr>
    <ul>
        @foreach($projects as $project)
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
            <li>{{ $project->description }}</li>
            <br>
        @endforeach
    </ul>
</div>
@endsection
