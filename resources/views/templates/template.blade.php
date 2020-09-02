<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oficina 2.0</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/ajax.js')}}"></script>

</head>

<body>
    @yield('content')
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{url('https://codificar.com.br/')}}" target="_blank" title="Página Inicial" style="margin-top: 30px">
                <img src="{{URL::asset('img/codificar.jpeg')}}" style="margin-top: -30px">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="link-white">
                <li>
                    <a href="{{url("clientes")}}" style="text-decoration: none">
                        <span class="glyphicon glyphicon-home"></span>
                        <span id="underline">Panel</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{url("clientes")}}" style="text-decoration: none">
                        <span class="glyphicon glyphicon-pencil"></span>
                        <span id="underline">Cadastros</span>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url("clientes")}}">Clientes</a></li>
                        <li><a href="#">Vendedor</a></li>
                        <li><a href="#">Peças</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="link-white">
                <li><a href="{{url("clientes")}}" style="text-decoration: none">
                        <span class="glyphicon glyphicon-log-in"></span>
                        <span id="underline">Sair</span></a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>
        </div>
    </nav>
    <div id="footer">
        <p>Developed By Thiago Feldner © <?= date('Y'); ?></p>
    </div>
</body>
<script src="{{url("assets/js/javascritp.js")}}"></script>
</html>