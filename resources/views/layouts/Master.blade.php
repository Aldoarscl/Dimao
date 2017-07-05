<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login Dimao</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/Estilo.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="shortcut icon" href="{{asset('img/fav.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/fav.ico')}}" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#">Documentación</a></li>
                <li><a href="#">Sobreproductores</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-check"></span> Configuración
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Mis Datos</a></li>
                        <li><a href="#">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="cuerpo">
        @yield('cuerpo')
    </div>
    <div class="footer">
        <label>Dirección de Medio Ambiente, Aseo, Ornato y Áreas Verdes</label>
    </div>
</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>