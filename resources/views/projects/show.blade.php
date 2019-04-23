@extends('layout')

@section('header')
    <h1 class="title">Single Project: {{ $project->title }}</h1>
@endsection

@section('content')
    <p>
        <a href="/projects/{{ $project->id }}/edit">edit</a>
    </p>
@endsection
