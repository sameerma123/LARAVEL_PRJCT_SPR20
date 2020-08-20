@extends('layouts.app')

@section('content')
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Edit Events Page</h3>
        
    {!! Form::open(['action' => ['MembersController@update', $member['tableid']], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $member['name'], ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $member['description'], ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('telephone', 'Telephone')}}
            {{Form::text('telephone', $member['telephone'], ['class' => 'form-control', 'placeholder' => 'Telephone'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::email('email', $member['email'], ['class' => 'form-control', 'placeholder' => 'Email'])}}
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