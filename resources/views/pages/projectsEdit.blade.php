@extends('layouts.app')

@section('content')
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Edit Project Page</h3>
    {!! Form::open(['action' => ['ProjectsController@update', $project['tableid']], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $project['name'], ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $project['description'], ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('purpose', 'Purpose')}}
            {{Form::textarea('purpose', $project['purpose'], ['class' => 'form-control', 'placeholder' => 'Purpose'])}}
        </div>
        <div class="form-group">
            {{Form::label('values', 'Values')}}
            {{Form::textarea('values', $project['values'], ['class' => 'form-control', 'placeholder' => 'Values'])}}
        </div>
        <div class="form-group">
            {{Form::label('methods', 'Methods')}}
            {{Form::textarea('methods', $project['methods'], ['class' => 'form-control', 'placeholder' => 'Methods'])}}
        </div>
        <div class="form-group">
            {{Form::label('investigation', 'Investigation')}}
            {{Form::textarea('investigation', $project['investigation'], ['class' => 'form-control', 'placeholder' => 'Investigation'])}}
        </div>
        <div class="form-group">
            {{Form::label('associations', 'Associations')}}
            {{Form::textarea('associations', $project['associations'], ['class' => 'form-control', 'placeholder' => 'Associations'])}}
        </div>
        <div class="form-group">
            {{Form::label('research', 'Research')}}
            {{Form::textarea('research', $project['research'], ['class' => 'form-control', 'placeholder' => 'Research'])}}
        </div>
        <div class="form-group">
            {{Form::label('upload', 'Upload File')}}
            {{Form::file('assets')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection
