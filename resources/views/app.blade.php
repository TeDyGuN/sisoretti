<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gestion Academica </title>
    <link rel="icon" type="image/x-icon" href="{{asset('/images/favicon.ico')}}"/>
    <meta name="description" content="Sistema De Gestion Academica Para el Colegio Goretti">

    <link href="{{asset('/Bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the pages via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="headeremi">
    <div class="row">
        <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
            <img id="imglogo" src={{ asset('images/logo_col.png') }} class="img-responsive"/>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-center">
            <h1>
                Sistema de Gestion Academica y Administrativa</br>Colegio Goretti
            </h1>
        </div>
        <div class="hidden-xs col-sm-2 col-md-2 col-lg-2">
            <img id="imgsis" src={{ asset('images/educacion.jpg') }} class="img-responsive"/>
        </div>
    </div>
</header>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Maria Goretti</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/')}}" class="glyphicon glyphicon-home">Inicio</a></li>
            </ul>
            @if(Auth::guest())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/auth/login') }}" class="glyphicon glyphicon-user">Ingresar</a></li>
                </ul>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->email }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('/Bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>


