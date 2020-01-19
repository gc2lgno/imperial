@extends('layouts.app')
@section('title', 'Registro de Usuario')
@section('content')
@section('styles')
    <link rel="stylesheet" href=" {{ asset('css/login-register.css') }} ">
@endsection
<section id="wrapper" class="login-register login-sidebar">
    <div class="login-box card">
        <div class="card-body">
            <!-- FORMULARIO PARA REGISTRO -->
            <div>
                <form class="form-horizontal" method="POST" action="{{ route('register') }} ">
                    @csrf
                    <h3 class="box-title m-t-10 m-b-0">Registro de Usuario</h3>
                    @include('common.errors')
                    <div class="form-group m-t-10">
                        <div class="col-xs-12">
                            <input class="form-control" name="nombres" type="text" required placeholder="Nombres" />
                        </div>
                    </div>
                    <div class="form-group m-t-10">
                        <div class="col-xs-12">
                            <input class="form-control" name="apellidos" type="text" required placeholder="Apellidos" />
                        </div>
                    </div>
                    <div class="form-group m-t-10">
                        <div class="col-xs-12">
                            <input class="form-control" name="cedula" type="text" required placeholder="Cédula" />
                        </div>
                    </div>
                    <div class="form-group m-t-10">
                        <div class="col-xs-12">
                            <input class="form-control" name="username" type="text" required placeholder="Nombre de usuario" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="email" type="text" required placeholder="Correo electrónico" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" type="password" required placeholder="Contraseña" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password_confirmation" type="password" required placeholder="Confirmar contraseña" />
                        </div>
                    </div>
                    <div class="form-group text-center m-t-10">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">
                                Regístrate
                            </button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <!-- Botón para ir al Login -->
                        <div class="col-sm-12 text-center">
                            ¿Ya estás registrado?
                            <a href="{{ route('login') }}" class="text-muted">¡Inicia Sesión!</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- FIN FORMULARIO REGISTRO -->
        </div>
    </div>
</section>
@endsection