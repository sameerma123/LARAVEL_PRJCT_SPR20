@extends('layouts.app')

@section('content')
    @if(count($inicio)>=1)
        @foreach($inicio as $row)
            <div class="flex-container1">
                <div style="flex-grow: 5">
                    <img src="/storage/assets/logo.png" alt="logo"/>
                    <h1 style="color: #6059f6;" class="bold">CENTRO AUGUSTO MIJARES</h1>
                    ​<h2 class="bold" >DESARROLLO HUMANO SUSTENTABLE</h2>
                </div>
                <div style="flex-grow: 5">
                    <h3 class="bold">BIENVENIDA</h3>
                    <div>{{$row['message']}}</div>
                </div>
            </div> 
            <div class="flex-container">
                <div style="text-align: center;">
                    <img src="/storage/assets/logo.png" alt="logo" width="50px" height="50px"/>
                    <h3 class="bold">PROPÓSITO</h3>
                    <div class="purposeSpacing">{{$row['purpose']}}</div>
                </div>
            </div>
            <div class="flex-container1" style="background-color:#F8F8F8;">
                <div style="flex-grow: 5; padding-top: 4%; padding-left: 4%;">
                    <iframe src="https://youtube.com/embed/Kcl-T98Wtvo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div style="flex-grow: 5">
                    <h3 class="bold">OBJETIVOS</h3>
                    <ol>
                        <li>{{$row['objective1']}}</li>
                        <li>{{$row['objective2']}}</li>
                        <li>{{$row['objective3']}}</li>
                        <li>{{$row['objective4']}}</li>
                    </ol>
                </div>
            </div>
        @endforeach
    @else 
        <p> Something went wrong. Please try after sometime. </p>
    @endif
@endsection