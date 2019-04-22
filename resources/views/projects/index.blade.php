@extends('layout')

@section('header')
    <h1 class="title">projects</h1>
@endsection

@section('content')
    <ul>
        @foreach($projects as $project)
            <li>title: {{ $project->title }}</li>
            <li>description: {{ $project->description }}</li>
        @endforeach
    </ul>
@endsection
