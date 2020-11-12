@extends('layouts.app')

@section('content')
    <h1>Projects</h1>
    @if (count($projects) > 0)
        @foreach ($projects as $project)
            <div class="well">
                <h3><a href="/projects/{{$project->id}}">{{$project->title}}</a></h3>
                <small>Written on {{$project->created_at}} by {{$project->user->name}}</small>
            </div>
        @endforeach
        <br>
        {{$projects->links("pagination::bootstrap-4")}}
    @else
        <p>No projects found</p>
    @endif
@endsection