@extends('layouts.app')
@section('title', 'Inicio de Sesión')
@section('content')
<section id="wrapper" class="login-register login-sidebar">
    <div class="login-box card">
        <div class="card-body">
            <!-- FORMULARIO PARA INICIO DE SESIÓN -->
            <div id="loginform" style="margin-top: 80px;">
                <form class="form-horizontal form-material text-center" action="#">
                    <a href="" class="db">
                        <img src="{{ asset('img/imperial-logo.png') }}" alt="Home" /><br />
                    </a>
                    @include('common.errors')
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Usuario" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" required="" placeholder="Contraseña" />
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">
                                Iniciar Sesión
                            </button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <!-- Botón para Register -->
                        <div class="col-sm-12 text-center">
                            ¿No estás registrado?
                            <a href="{{ route('register') }}" id="to-register" class="text-muted">¡Regístrate!</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- FIN FORMULARIO INICIO DE SESIÓN -->
        </div>
    </div>
</section>
@endsection