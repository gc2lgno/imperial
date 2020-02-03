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
                <div class="col-lg-3 col-md-3">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Datos del Cliente</h4>
                            <p class="card-text btn btn-outline-info">{{ $customer->nombres }}
                                , {{ $customer->apellidos }}</p>
                            <p class="card-text"><span class="font-bold">Cédula:</span> {{ $customer->rif }} </p>
                            <p class="card-text"><span class="font-bold">Teléfono: </span> {{ $customer->telefono }}</p>
                            <p class="card-text"><span
                                        class="font-bold">Registrado desde: </span> {{ $customer->created_at->format('d/m/Y') }}
                            </p>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                {{--Card para tipo de habitación--}}
                <div class="col-lg-3 col-md-3">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="room-type">
                                <h4 class="card-title">Tipo de Habitación</h4>
                                <select name="room_type_id" id="room_type_id" class="form-control" required>
                                    <option value="">--Seleccionar--</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">
                                            {{ $type->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="room">
                                <h4 class="card-title">Habitación</h4>
                                <select name="room_type_id" id="room_type_id" class="form-control" required>
                                    <option value="">--Seleccionar--</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">
                                            {{ $type->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </div>
@endsection