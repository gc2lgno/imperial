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
                <a href="#" class="btn btn-success d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"><i class="ti-search menu-icon"></i> Buscar</a>

                <a href="{{ route('service.create') }}" class="btn btn-info d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"><i class="ti-plus menu-icon"></i> Crear nuevo</a>
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
                                        <a href="{{ route('service.show', $service->id) }}"
                                            class="btn btn-circle btn-success" data-toggle="tooltip"
                                            title="Datos del Servicio">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-circle btn-danger"
                                                data-toggle="tooltip" title="Eliminar Servicio">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form>
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