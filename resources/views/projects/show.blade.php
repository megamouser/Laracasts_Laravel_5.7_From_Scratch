@extends('layout')
@section('content')
<div class="container">
    <h1 class="title">{{ $project->title }}</h1>
    <hr>
    <div class="content">
        {{ $project->description }}
    </div>
    <div>
        <a href="/projects/{{ $project->id }}/edit">edit</a>
    </div>
</div>
@endsection
