@extends('admin.layout.app')
@section('title', ' Lista de Servicios')
@section('seccion', 'Servicios')
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
                                <th>Nombre</th>
                                <th>Detalle</th>
                                <th class="text-nowrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->nombre }}</td>
                                <td>{{ $service->detalle }}</td>
                                <td>
                                    <div class="row button-group">
                                        <a href=" {{ route('service.show', $service->id) }} "
                                            class="btn btn-circle btn-success" data-toggle="tooltip"
                                            title="Datos del Servicio">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-circle btn-danger" data-toggle="tooltip"
                                            title="Eliminar Servicio">
                                            <i class="ti-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="float-right">
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
@endsection