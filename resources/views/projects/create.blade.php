@extends('layout')

@section('header')
<h1 class="title">Create a New Project</h1>
@endsection

@section('content')
<hr>
<form method="POST" action="/projects">
    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="title">Project Title</label>

        <div class="control">
        <input type="text" class="input" name="title" placeholder="Project Title" value="">
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Project Description</label>

        <div class="control">
            <textarea type="description" name="description" class="textarea" placeholder="Project Description"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </div>
</form>
@endsection