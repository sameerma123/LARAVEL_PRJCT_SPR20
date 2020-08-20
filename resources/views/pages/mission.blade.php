@extends('layouts.app')

@section('content')
    @if(count($mission)>=1)
        @foreach($mission as $row)
        <div class="flex-container1" style="text-align: center;">
            <div style="flex-grow: 5" >
                <h1 style="color: #6059f6;" class="bold">MISIÓN</h2>
                <p>{{$row['mission']}}</p>
            </div>
            <div style="flex-grow: 5">
                <h1 style="color: #6059f6;" class="bold">VISIÓN</h2>
                <p >{{$row['vision']}}</p>
            </div>
        </div>
        <div class="flex-container1" style="text-align: center;">
            <div>
                <img src="/storage/assets/logo.png" alt="logo"  width="50px" height="50px"/><br>
                <h2 class="bold">VALORES</h2>
                <p  class="purposeSpacing">{{$row['valores']}}</p>
            </div>  
        </div><br/>
        <div class="box box1">
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">RESPONSABILIDAD SOCIAL</h4><br>
                <p>{{$row['value1']}}</p>
                
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">FRATERNIDAD</h4>
                <p>{{$row['value2']}} </p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">LIBERTAD</h4>
                <p>{{$row['value3']}}</p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">CORRESPONSABILIDAD</h4>
                <p>{{$row['value4']}}</p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">SOLIDARIDAD</h4>
                <p>{{$row['value5']}}</p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">CONSTANCIA</h4>
                <p>{{$row['value6']}} </p>  
            </div>
            <br/><br/>
        </div>
    @endforeach 
    @else 
        <p>Something went wrong. Please try again later.</p>
    @endif
@endsection
