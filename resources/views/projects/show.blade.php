@extends('layouts.app')

@section('content')

<a href="/projects" class="btn btn-outline-secondary">Go Back</a>
<br>
<br>
<h1>{{$project->title}}</h1>
<div>
    {!!$project->technologies!!}
</div>
<hr>
<div>
    {!!$project->description!!}
</div>
<hr>
<small>Written on {{$project->created_at}}</small>
<br>
<br>
<a href="/projects/{{$project->id}}/edit" class="btn btn-outline-primary">Edit</a>

{!!Form::open(['action' => ['\App\Http\Controllers\ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection