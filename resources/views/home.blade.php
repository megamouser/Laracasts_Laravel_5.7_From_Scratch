@extends('layout')

@section('title', 'home')

@section('content')
<div class="container">
    <h1 class="title">Home</h1>
    <hr>
    @include('nav')
    <hr>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
    <hr>
    <p>app name: {{ $name }}</p>
    <p>date: {{ $date }}</p>
</div>
@endsection

@section('script')
{!! $script !!}
@endsection