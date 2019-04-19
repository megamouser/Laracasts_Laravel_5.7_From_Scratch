@extends('layout')

@section('title', 'projects')

@section('header')
<h1>projects</h1>
@endsection

@section('content')
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
@endsection