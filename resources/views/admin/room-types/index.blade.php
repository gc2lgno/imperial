@extends('admin.layout.app')
@section('title', 'Tipos de Habitación')
@section('seccion', 'Tipos de Habitación')
@section('content')
<div class="row">
    <!-- column -->
    <div class="col-12">
        @include('common.success')
        <div class="card">
            <div class="card-body">
                <a href="{{ route('room-types.create') }}"
                    class="btn btn-info d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"><i
                        class="ti-plus menu-icon"></i> Crear nuevo</a>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Detalles</th>
                                <th>Precio</th>
                                <th>Capacidad</th>
                                <th class="text-nowrap">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roomTypes as $type)
                            <tr>
                                <td>{{ $type->nombre }}</td>
                                <td>{{ $type->detalles }}</td>
                                <td>{{ $type->precio }}</td>
                                <td>{{ $type->total_room }}</td>
                                <td>
                                    <div class="row button-group">
                                        <a href=" {{ route('room-types.show', $type->id) }} "
                                            class="btn btn-circle btn-success" data-toggle="tooltip"
                                            title="Datos del Cliente">
                                            <i class="ti-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-circle btn-danger" data-toggle="tooltip"
                                            title="Eliminar Cliente">
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
                    {{ $roomTypes->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- column -->
</div>
@endsection