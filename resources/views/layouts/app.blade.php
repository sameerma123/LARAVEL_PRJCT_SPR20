<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* general style applied across all the screens*/

* {
font-family: Roboto;
font-size: 15px;
font-weight: 400;
line-height: 1.667;
color: #888888;
}

h1,h2,h3,h4,h5,h6 {
font-family: Rajdhani;
}

#wrapper{
margin-left: auto;
margin-right: auto;
width: 80%;
}

.bold{
font-weight: bold;
color: #000000;
}




/*anchor styles*/

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5);
    text-decoration: none;
    color: #000000;
    font-weight: bold;
}

/*footer styles*/

.footer{
background-color: #04091e;
}

.footerText{
color: #888888;
}

/*purpose page styles*/

.purposeSpacing{
margin-left: auto;
margin-right: auto;
width: 60%;
}

/*container styling*/
.container {
display: flex;
justify-content: space-around;
}

.flex-container {
display: flex;
flex-wrap: nowrap;
}

.flex-container > div {
margin: 2%;
text-align: center;
}

.flex-container1 {
display: flex;
align-items: stretch;
flex-wrap: nowrap; 
}

.flex-container1 > div {
width: 100%;
margin: 3%;
}

.flex-footer {
display: flex;
align-items: stretch;
flex-wrap: nowrap;
margin: 2%;
}

.flex-footer > div {
margin: 1%; 
}

.flex-container2{
display: grid;
align-items: stretch;
flex-wrap: row wrap;

}

.box {
display: grid;
grid-template-columns: 1fr 1fr 1fr;
grid-gap: 20px;
}

.box2{
flex-grow: 3; 
padding-top: 8%; 
text-align: center;
background-color:#F8F8F8;
}

.flex-mission {
display: flex;
flex-wrap: wrap;
}

.flex-mission > div {
background-color: #f1f1f1;
width: 350px;
margin: 2%;
text-align: center;
}

/*login page styling*/

.spacing{
padding-top: 3%;
}

.formSpace{
width:45%;
margin:10px
}

/*button styles*/

.corners {
border-radius: 5px;
border: 1px solid #DCDCDC;   
}

.button{
/*background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%); 
color: #222222;
*/
background-color: #6059f6;
color: #fff;
background-size: 200% auto; 
width:20%;
margin:10px
}


/*.box1{
width: 70%;
}*/

/*projects page styling*/

.projectStyle{
color: #707070; 
font-weight: bold;
}


/*members page styling*/

.membersStyle{
padding: 0 10% 10% 10%; 

}

/*form styling*/

.textArea * {
vertical-align: middle;
}

label {
display: inline-block;
width: 140px;
text-align: left;
}

.fileUpload{
display: inline; 
margin-left: 1%;
}

/*table styles*/

table, th, td {
border: 1px solid #A9A9A9;
text-align: center !important;

border-style:double;



}

.adminpanel{
width: 95%;
margin-left:auto;
margin-right: auto;
margin-top: 2%;
}

.info{
color: red;
}

.navbar-brand {
    float: left;
    height: 100px;    
}
.form-control {
    font-size: 16px;
}

.btn {
    font-size: 16px;
}

    </style>
</head>
<body id="wrapper">
    <div >
        <nav class="navbar navbar-expand-md navbar-light  ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/storage/assets/logo.png" alt="logo" width="100px" height="100px"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item"><a href="{{url('/inicio')}}" class="nav-link">Inicio</a></li>
                        <li class="nav-item"><a href="{{url('/semblanza')}}" class="nav-link">Semblanza</a></li>
                        <li class="nav-item"><a href="{{url('/mission')}}" class="nav-link">Centro Augusto Mijares</a></li>
                        <li class="nav-item"><a href="{{url('/projects')}}" class="nav-link">Proyectos</a></li>
                        <li class="nav-item"><a href="{{url('/events')}}" class="nav-link">Eventos</a></li>
                        <li class="nav-item"><a href="{{url('/videos')}}" class="nav-link">Videos</a></li>
                        <li class="nav-item"><a href="{{url('/members')}}" class="nav-link">Equipos</a></li>
                        <li class="nav-item"><a href="https://blog.nxm1645.uta.cloud/" class="nav-link">Blog</a></li>
                        @if(!Auth::guest())
                            @if(Auth::user()->adminFlag == 1)
                                <li class="nav-item"><a href="{{url('/adminPanel')}}" class="nav-link">Admin Panel</a></li>
                            @endif
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio de Session') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('inc.messages')
            @yield('content')
        </main>
    </div>
</body>
<footer class="footer">
    <br/>
    <br/>
    <br/>
    <br/>
    <hr style="margin: 2%;" class="footerText">
    <div class="flex-footer">    
        <div style="flex-grow: 3">
            <p class="footerText">Copyright <i class="glyphicon glyphicon-copyright-mark"></i> 2020 All rights reserved | This template is made with 
                <i class="fa fa-heart" style="color: #6059f6;"></i> by <span style="color: #6059f6;">DiazApps</span></p>
        </div>
        <div>
            <i class="fa fa-facebook" class="footerText"></i>
        </div>
        <div>
            <i class="fa fa-twitter" class="footerText"></i>
        </div>
        <div><i class="fa fa-dribbble" class="footerText"></i></div>
        <div><i class="fa fa-behance" class="footerText"></i></div>   
    </div>     
</footer>
</html>
