@extends('user/base');

@section('content')

    <div class="container">
        <div class="app-contenedor">
            <h2 class="app-titulo3">Cuentas</h2>
            <p class="app-separador2"></p>
            <p>Cada cuenta ofrece beneficios diferentes</p>
        </div>
        <div class="col-xs-12 col-sm-4">
            <ul class="list-group">
                <li class="list-group-item app-lista1">
                    <h2>Cuenta Básica</h2>
                    <p>Gratis</p>
                    @for($x=1; $x<4; $x++)
                        <i class="fa fa-star"></i>
                    @endfor
                </li>
                <li class="list-group-item">Usuarios Totales <span class="badge">50</span></li>
                <li class="list-group-item">Información privada, busquedas <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Perzonalización <i class="fa fa-times-circle pull-right fa-lg text-muted"></i></li>
                <li class="list-group-item">Chat <i class="fa fa-times-circle pull-right fa-lg text-muted"></i></li>
                <li class="list-group-item">Inicio de sesion con Facebook <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Notificaciones de nuevos usuarios <i class="fa fa-times-circle pull-right fa-lg text-muted"></i></li>
                <li class="list-group-item app-precio">
                    <span class="app-pago">Gratis</span>
                    <a href="{{ route('profile', \Auth::user()->name) }}">
                        <button class="btn app-btn1">Contratar</button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-4">
            <ul class="list-group">
                <li class="list-group-item app-lista2">
                    <h2>Cuenta Avanzada</h2>
                    <p>Desde $59 por mes</p>
                    @for($x=1; $x<6; $x++)
                        <i class="fa fa-star"></i>
                    @endfor
                </li>
                <li class="list-group-item">Usuarios Totales <span class="badge">100</span></li>
                <li class="list-group-item">Información privada, busquedas <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Perzonalización <i class="pull-right fa fa-times-circle pull-right fa-lg text-muted"></i></li>
                <li class="list-group-item">Chat <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Inicio de sesion con Facebook <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Notificaciones de nuevos usuarios <i class="fa fa-times-circle pull-right fa-lg text-muted"></i></li>
                <li class="list-group-item app-precio">
                    <span class="app-pago">$59 por Mes</span>
                    <a href="{{ route('profile', \Auth::user()->name) }}">
                        <button class="btn app-btn2">Contratar</button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-4">
            <ul class="list-group">
                <li class="list-group-item app-lista1">
                    <h2>Cuenta VIP</h2>
                    <p>Desde $99 por mes</p>
                    @for($x=1; $x<8; $x++)
                        <i class="fa fa-star"></i>
                    @endfor
                </li>
                <li class="list-group-item">Usuarios Totales <span class="badge">100</span></li>
                <li class="list-group-item">Información privada, busquedas <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Perzonalización <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Chat <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Inicio de sesion con Facebook <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item">Notificaciones de nuevos usuarios y más <i class="pull-right fa fa-check-circle fa-lg text-info"></i></li>
                <li class="list-group-item app-precio">
                    <span class="app-pago">$99 por Mes</span>
                    <a href="{{ route('profile', \Auth::user()->name) }}">
                        <button class="btn app-btn1">Contratar</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>

@stop