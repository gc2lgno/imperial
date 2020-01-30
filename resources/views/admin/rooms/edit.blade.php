@extends('admin.layout.app')
@section('title', 'Editar Habitación')
@section('seccion', 'Habitación')
@section('content')
    @include('common.errors')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="card-title">Datos de la Habitación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="numero">Número de Habitación</label>
                                        <input type="number" value="{{ $room->numero }}" name="numero" id="numero"
                                               class="form-control" readonly>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ubicacion">Ubicación</label>
                                        <select name="ubicacion" id="ubicacion" class="form-control">
                                            <optgroup label="Piso actual">
                                                <option value="{{ $room->ubicacion }}" selected>
                                                    PISO {{ $room->ubicacion }}</option>
                                            </optgroup>
                                            <optgroup label="Pisos disponibles">
                                                @for($i = 1; $i <= $pisos; $i++)
                                                    <option value="{{ $i }}">PISO {{ $i }}</option>
                                                @endfor
                                            </optgroup>
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
                                                id="room_type_id">
                                            <optgroup label="Tipo actual">
                                                <option value="{{ $room->room_type_id }}"
                                                        selected>{{ $room->roomType->nombre }}</option>
                                            </optgroup>
                                            <optgroup label="Tipos Disponibles">
                                                @foreach($roomTypes as $type)
                                                    <option value="{{ $type->id }}">{{ $type->nombre }}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group @if($room->room_status == "ACTIVA") has-success @else has-danger @endif">
                                        <label class="control-label" for="room_status">Estatus</label>
                                        <select class="form-control" name="room_status"
                                                id="room_status">
                                            <optgroup label="Estatus actual">
                                                <option value="{{ $room->room_status }}">{{ $room->room_status }}</option>
                                            </optgroup>
                                            <optgroup label="Estatus disponibles">
                                                <option value="ACTIVA">ACTIVA</option>
                                                <option value="INACTIVA">INACTIVA</option>
                                            </optgroup>
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
                                    <div class="form-group row pt-2">
                                        <div class="col-sm-6">
                                            @foreach($room->services as $serviceActivo)
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           name="services[]" id="{{ $serviceActivo->id }}"
                                                           value="{{ $serviceActivo->id }}" checked>
                                                    <label class="custom-control-label"
                                                           for="{{ $serviceActivo->id }}">
                                                        {{ $serviceActivo->nombre }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @else
                                    <h4 class="btn btn-danger">La habitación no cuenta con servicios disponibles</h4>
                                @endif
                            </div>
                            {{--SPAN--}}
                            <div class="col-md-5">
                                <h4 class="card-title">Servicios disponibles:</h4>
                                <div class="form-group row pt-23">
                                    <div class="col-sm-6">
                                        @foreach($serviciosDisponibles as $service)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="service_id[{{ $service->id }}]" name="services[]"
                                                       value="{{ $service->id }}">
                                                <label class="custom-control-label"
                                                       for="service_id[{{ $service->id }}]">
                                                    {{ $service->nombre }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="ti-save menu-icon"></i>
                                Guardar
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect waves-light"><i
                                        class="ti-close menu-icon"></i>Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection