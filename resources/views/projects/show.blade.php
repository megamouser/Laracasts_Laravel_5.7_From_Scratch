@extends('layout')

@section('header')
    <h1 class="title">{{ $project->title }}</h1>
@endsection
@section('content')
    <hr>
    <div class="content">
        {{ $project->description }}
    </div>
    <div>
        <a href="/projects/{{ $project->id }}/edit">edit</a>
    </div>
@endsection
