@extends('layouts.app')

@section('content')
    @if(count($event)>=1)
        @foreach($event as $row)
            <div class="flex-container1">
                <div>
                    <h2 class="bold">{{$row['name']}}</h2><br/>
                    <p>{{$row['description']}}</p>
                        <br/>Los Interesados deben enviar sus datos a :<br/><br/>
                        {{$row['contactname']}} No. Teléf. {{$row['telephone']}} . Correo: {{$row['email']}}<br>
                        {{$row['contactname1']}} No. Télef. {{$row['telephone1']}}.<br>
                        Correo: {{$row['email1']}};<br> centroaugustomijares@gmail.com<br>
                        <br>
                        {{$row['location']}}
                        <br>
                        <br>
                        Se reciben preinscripciones hasta el {{$row['date']}}<br>
                        <br>
                        Saludos, gracias por difundir esta oferta académica y contribuir así con el desarrollo humano de nuestra gente.
                        <br>
                    </p>
                    @if(!Auth::guest())
                        @if(Auth::user()->adminFlag == 1)
                            <a href="/events/{{$row['tableid']}}/edit" class="btn btn-default">Edit</a>
                            {!! Form::open(['action'=>['EventsController@destroy', $row['tableid']], 'method'=>'POST', 'class'=>'']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                        @endif
                    @endif
                </div>
                <div style="padding-top: 10%;">
                    <img src="/storage/assets/{{$row['assets']}}" alt="logo" />
                </div>
                
            </div><br/><br/>
        @endforeach
    @else 
        <p>No Events</p>
    @endif

@endsection