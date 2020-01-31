@extends('admin.layout.app')
@section('title', ' Lista de Reservaciones')
@section('seccion', 'Reservaciones')
@section('content')
    <div class="row">
        <!-- column -->
        <div class="col-12">
            @include('common.success')
            <div class="card">
                <div class="card-body">
                    <a href="#"
                       class="btn btn-success d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"><i
                                class="ti-search menu-icon"></i> Buscar</a>

                    <a href="{{ route('booking.create') }}"
                       class="btn btn-info d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"><i
                                class="ti-plus menu-icon"></i> Crear nueva</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">N° Reserva</th>
                                <th class="text-center">Fecha Reserva</th>
                                <th class="text-center">Cliente</th>
                                <th class="text-center">Habitación</th>
                                <th class="text-center">Checkin</th>
                                <th class="text-center">Checkout</th>
                                <th class="text-center">Pago</th>
                                <th class="text-center">Estatus</th>
                                <th class="text-nowrap text-center">Acción</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="float-right">

                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
@endsection