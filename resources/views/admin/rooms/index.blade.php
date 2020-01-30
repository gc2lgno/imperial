@extends('admin.layout.app')
@section('title', ' Lista de Habitaciones')
@section('seccion', 'Lista de Habitaciones')
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

                    <a href="{{ route('rooms.create') }}"
                       class="btn btn-info d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"><i
                                class="ti-plus menu-icon"></i> Crear nueva</a>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center" width="150px">N° Habitación</th>
                                <th class="text-center">Ubicación</th>
                                <th class="text-center">Tipo</th>
                                <th class="text-center">Estatus</th>
                                <th class="text-nowrap text-center">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($rooms as $room)
                                <tr>
                                    <td class="text-center"> {{ $room->numero }}</td>
                                    <td class="text-center"> PISO {{ $room->ubicacion }} </td>
                                    <td class="text-center"> <span data-toggle="tooltip" title="Capacidad: {{ $room->roomType->total_room }} personas">{{ $room->roomType->nombre }}</span> </td>
                                    <td class="text-center"><h1
                                                class="badge @if($room->room_status == "ACTIVA") badge-success @else badge-danger @endif">{{ $room->room_status }}</h1></td>
                                    <td>
                                        <div class="row button-group">
                                            <a href=" {{ route('rooms.show', $room->id) }} "
                                               class="btn btn-circle btn-success" data-toggle="tooltip"
                                               title="Datos de la Habitación">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-circle btn-danger"
                                                        data-toggle="tooltip"
                                                        title="Eliminar Habitación">
                                                    <i class="ti-trash"></i>
                                                </button>
                                            </form>
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
                        {{ $rooms->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
@endsection