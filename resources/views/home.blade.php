@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/projects/create" class="btn btn-primary">Create Project</a>
                        <br>
                        <br>
                    @if (count($projects) > 0)                        
                        {{ __('Your Projects') }}
                    <table class="table table-striped">
                        <tr>
                            <th class="lead">Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->title}}</td>
                            <td><a href="/projects/{{$project->id}}/edit" class="btn btn-secondary">Edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['\App\Http\Controllers\ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>You have no projects</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
