@extends('layout')
@section('header')
    <h1 class="title">Projects</h1>
@endsection
@section('content')
<hr>
    <ul>
        @foreach($projects as $project)
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
            <li>{{ $project->description }}</li>
            <br>
        @endforeach
    </ul>
@endsection
