@extends('layout')
@section('content')
<div class="container">
    <h1 class="title">Create a New Project</h1>
    <hr>
    <form method="POST" action="/projects">
        {{ csrf_field() }}
    
        <div class="field">
            <label class="label" for="title">Project Title</label>
    
            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Project Title" value="{{ old('title') }}" required>
            </div>
        </div>
    
        <div class="field">
            <label class="label" for="description">Project Description</label>
    
            <div class="control">
                <textarea type="description" name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}" placeholder="Project Description" required>{{ old('description') }}</textarea>
            </div>
        </div>
    
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

        @include('errors')
    </form>
</div>
@endsection