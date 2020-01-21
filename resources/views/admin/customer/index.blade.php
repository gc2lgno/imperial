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
                                    <td> {{ $customer->nombres }}, {{ $customer->apellidos }} </td>
                                    <td> {{ $customer->rif }} </td>
                                    <td> Acciones </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
@endsection