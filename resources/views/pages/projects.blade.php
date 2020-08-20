@extends('layouts.app')

@section('content')
<div class="flex-container1">
    <div style="text-align: center;">
        <img src="storage/assets/logo.png" alt="logo" width="80px" height="80px"/>
        <h2 class="bold">RESPONSABILIDAD SOCIAL UNIVERSITARIA​ Y DESARROLLO SUSTENTABLE ¿QUÉ Y PARA QUÉ?
        </h2>
    </div>
</div>
    @if(count($project)>=1)
        @foreach($project as $row)
            
            <div class="flex-container1">
                <div style="flex-grow: 5;">
                    <img src="/storage/assets/{{$row['assets']}}" alt="logo" />
                </div>
                <div style="flex-grow: 5;">
                    <h4 class="bold">{{$row['name']}}</h4>
                    <p>{{$row['description']}}</p>
                    <p><span class="projectStyle">Propósito:</span> {{$row['purpose']}}</p>  
                    <p><span class="projectStyle">Valores:</span> {{$row['values']}}</p>  
                    <p> <span class="projectStyle">Métodos:</span> {{$row['methods']}}</p>
           l     </div>
            </div><br/><br/>
            <div class="flex-container1">
                <div style="flex-grow: 5;">
                    <p ><span class="projectStyle">Investigación:</span>{{$row['investigation']}}</p>
                    <p><span class="projectStyle">Asociación:</span>{{$row['associations']}}</p>
                    <p><span class="projectStyle">Diálogo:</span>{{$row['research']}}</p>
                    @if(!Auth::guest())
                        @if(Auth::user()->adminFlag == 1)
                            <a href="/projects/{{$row['tableid']}}/edit" class="btn btn-default">Edit</a>
                            {!! Form::open(['action'=>['ProjectsController@destroy', $row['tableid']], 'method'=>'POST', 'class'=>'pull-right']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                        @endif
                    @endif
                </div>
                <div style="flex-grow: 5;">
                    <img src="/storage/assets/{{$row['assets']}}" alt="logo" />
                </div>
                
            </div>
        @endforeach
    @else 
        <p> no projects </p>
    @endif
@endsection