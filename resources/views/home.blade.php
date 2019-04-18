@extends('layout')

@section('title', 'home')

@section('header')
<h1>home</h1>
@endsection

@section('content')
<ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
<p>app name: {{ $name }}</p>
<p>date: {{ $date }}</p>
@endsection

@section('script')
{!! $script !!}
@endsection