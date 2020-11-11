@extends('layouts.app')

@section('content')
    <h1>Edit project</h1>

    {!! Form::open(['action' => ['\App\Http\Controllers\ProjectsController@update', $project->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $project->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label('technologies', 'Technologies')}}
            {{Form::textarea('technologies', $project->technologies, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Which technologies are necessary'])}}
        </div>

        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $project->description, ['id' => 'editor2', 'class' => 'form-control', 'placeholder' => 'Describe the project'])}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection