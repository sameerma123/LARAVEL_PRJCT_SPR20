@extends('layouts.app')

@section('content')
    <div style="margin-left: 5%; margin-right: 30%; margin-bottom:3%;">
        <h3>Edit Video Page</h3>
    {!! Form::open(['action' => ['VideosController@update', $video['tableid']], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $video['name'], ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('video', 'Video URL')}}
            {{Form::text('video', $video['video'], ['class' => 'form-control', 'placeholder' => 'Video URL'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $video['decription'], ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('url', 'URL')}}
            {{Form::text('url', $video['url'], ['class' => 'form-control', 'placeholder' => 'URL'])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
@endsection
