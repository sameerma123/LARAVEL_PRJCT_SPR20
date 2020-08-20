@extends('layouts.app')

@section('content')
    
    <div style="text-align: center">
        <img src="/storage/assets/logo.png" alt="logo">
        <h3 class="bold">UN ESPACIO PARA DEBATIR A PARTIR DEL VÍDEO</h3>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="box box1">
        @if(count($video)>=1)
            @foreach($video as $row)
                <div class="box2">
                    <iframe src="{{$row['video']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen width="100%"></iframe><br>
                    <div style="padding: 8%;">
                        <h4 class="bold">{{$row['name']}}</h4><br>
                        <span style="text-align: center;">{{$row['decription']}}<br/> URL: 
                        <a href="{{$row['url']}}">{{$row['url']}}</a>
                        </span><br>
                    </div>
                    @if(!Auth::guest())
                        @if(Auth::user()->adminFlag == 1)
                            <a href="/videos/{{$row['tableid']}}/edit" class="btn btn-default">Edit</a>
                            {!! Form::open(['action'=>['VideosController@destroy', $row['tableid']], 'method'=>'POST', 'class'=>'pull-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                        @endif
                    @endif
                </div>
            @endforeach
        @else 
            <p>No Videos</p>
        @endif    
    </div> <br/><br/>
@endsection