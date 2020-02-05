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
            <div class="row">
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $customer->id }}" name="customer_id" id="customer_id">
                    <div class="card-group">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Datos del Cliente</h4>
                                <p class="card-text"><span class="font-bold">Nombres:</span> {{ $customer->nombres }}
                                    , {{ $customer->apellidos }}</p>
                                <p class="card-text"><span class="font-bold">Cédula:</span> {{ $customer->rif }} </p>
                                <p class="card-text"><span class="font-bold">Teléfono: </span> {{ $customer->telefono }}
                                </p>
                                <p class="card-text"><span
                                            class="font-bold">Registrado desde: </span> {{ $customer->created_at->format('d/m/Y') }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        {{--Card para tipo de habitación--}}
                        <booking-rooms-component></booking-rooms-component>
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ asset('img/room.jpeg') }}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Hotel Imperial</h4>
                                <p class="card-text">Para continuar con el proceso de crear una nueva reserva pulse el
                                    botón
                                    "Siguiente".</p>
                                <p class="card-text">
                                    <button type="submit" class="btn btn-primary float-right">Siguiente</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection