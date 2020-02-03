@extends('admin.layout.app')
@section('title', 'Crear Reserva')
@section('seccion')
    Reserva para {{ $customer->nombres }}, {{ $customer->apellidos }}
@endsection
@section('content')
    @include('common.errors')
    @include('common.success')
    <div class="row">
        <div class="col-12">
            <div class="col-lg-3 col-md-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Datos del Cliente</h4>
                        <p class="card-text btn btn-outline-info">{{ $customer->nombres }}, {{ $customer->apellidos }}</p>
                        <p class="card-text"><span class="font-bold">Cédula:</span> {{ $customer->rif }} </p>
                        <p class="card-text"><span class="font-bold">Teléfono: </span> {{ $customer->telefono }}</p>
                        <p class="card-text"><span
                                    class="font-bold">Registrado desde: </span> {{ $customer->created_at->format('d/m/Y') }}
                        </p>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
    </div>
@endsection