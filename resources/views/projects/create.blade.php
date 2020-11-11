@extends('layouts.app')

@section('content')
    <h1>Create Project</h1>

    {!! Form::open(['action' => '\App\Http\Controllers\ProjectsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        {{-- @error('title')
            <div class="alert-danger">{{$message}}</div>
        @enderror --}}
        <div class="form-group">
            {{Form::label('technologies', 'Technologies')}}
            {{Form::textarea('technologies', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Which technologies are necessary'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['id' => 'editor2', 'class' => 'form-control', 'placeholder' => 'Describe the project'])}}
        </div>
        {{-- @error('body')
            <div class="alert-danger">{{$message}}</div>
        @enderror --}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection