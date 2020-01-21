@extends('admin.layout.app')
@section('title', ' Lista de Clientes')
@section('seccion', 'Lista de Clientes')
@section('content')
<div class="row">
    <!-- column -->
    <div class="col-12">
        @include('common.success')
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombres y Apellidos</th>
                                <th>Cédula / RIF</th>
                                <th class="text-nowrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <td> {{ $customer->nombres }} {{ $customer->apellidos }} </td>
                                <td> {{ $customer->rif }} </td>
                                <td>
                                    <div class="row button-group">
                                        <a href=" {{ route('customer.show', $customer->id) }} " class="btn btn-circle btn-success" data-toggle="tooltip"
                                            title="Datos del Cliente">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-circle btn-info" data-toggle="tooltip"
                                            title="Ver Historial">
                                            <i class="ti-search"></i>
                                        </a>
                                        <a href="#" class="btn btn-circle btn-danger" data-toggle="tooltip"
                                            title="Eliminar Cliente">
                                            <i class="ti-trash"></i>
                                        </a>
                                        <a href="#" class="btn btn-circle btn-primary" data-toggle="tooltip"
                                            title="Agendar Reserva">
                                            <i class="ti-bookmark-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="float-right">
                    {{ $customers->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
@endsection