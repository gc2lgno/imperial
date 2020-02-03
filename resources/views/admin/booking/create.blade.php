@extends('admin.layout.app')
@section('title', 'Crear Reserva')
@section('seccion', 'Reserva')
@section('content')
    @include('common.errors')
    @include('common.success')
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-3 col-md-6">
                <!-- Card -->
                <div class="card">
                    <img class="card-img-top img-responsive" src="../assets/images/big/img1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- Card -->
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-body">
                                <h3 class="card-title">
                                    Datos del Cliente
                                    {{ $customer->nombres }}
                                    {{ $customer->apellidos }}
                                </h3>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection