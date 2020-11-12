@extends('layouts.app')

@section('content')

<a href="/projects" class="btn btn-outline-secondary">Go Back</a>
<br>
<br>
<h1>{{$project->title}}</h1>
<hr>
<div>
    <h5>Technologies/tools required</h5>
    {!!$project->technologies!!}
</div>
<hr>
<div>
    <h5>Project detailed description</h5>
    {!!$project->description!!}
</div>
<hr>
<small>Written on {{$project->created_at}} by {{$project->user->name}}</small>
<br>
<br>
@if (!Auth::guest())   
    @if (Auth::user()->id == $project->user_id)        
        <a href="/projects/{{$project->id}}/edit" class="btn btn-outline-primary">Edit</a>
        {!!Form::open(['action' => ['\App\Http\Controllers\ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endif

@endsection