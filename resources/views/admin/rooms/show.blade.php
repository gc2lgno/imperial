@extends('admin.layout.app')
@section('title', 'Datos de Habitación')
@section('seccion', 'Habitación')
@section('content')
    @include('common.errors')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="form-body">
                            <h3 class="card-title">Datos de la Habitación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="numero">Número de Habitación</label>
                                        <input type="number" value="{{ $room->numero }}" name="numero" id="numero"
                                               class="form-control" disabled>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ubicacion">Ubicación</label>
                                        <select name="ubicacion" id="ubicacion" class="form-control" disabled>
                                            <option selected> PISO {{ $room->ubicacion }}</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="room_type_id">Tipo de Habitación</label>
                                        <select class="form-control" name="room_type_id"
                                                id="room_type_id" disabled>
                                            <option selected>{{ $room->roomType->nombre }}</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group @if($room->room_status == "ACTIVA") has-success @else has-danger @endif">
                                        <label class="control-label" for="room_status">Estatus</label>
                                        <select class="form-control" name="room_status"
                                                id="room_status" disabled>
                                            <option selected>{{ $room->room_status }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @if(count($room->services) != 0)
                                    <h4 class="card-title">Servicios con los que cuenta la habitación:</h4>
                                    <div class="form-group row pt-3">
                                        <div class="col-sm-6">
                                            <ul class="list-group list-group-flush">
                                                @foreach($room->services as $service)
                                                    <li class="list-group-item">
                                                        <i class="ti-star"></i>
                                                        {{ $service->nombre }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <h4 class="btn btn-danger">La habitación no cuenta con servicios disponibles</h4>
                                @endif
                            </div>
                        </div>
                        <div class="form-actions">
                            <a href="{{ route('rooms.edit', $room->id) }}" class="btn waves-effect waves-light btn-success">
                                <i class="ti-pencil menu-icon"></i>
                                Editar
                            </a>
                            <a href="{{ url()->previous() }}" class="btn waves-effect waves-light btn-secondary"> <i
                                        class="ti-back-left menu-icon"></i>Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection