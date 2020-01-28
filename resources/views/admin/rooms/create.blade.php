@extends('admin.layout.app')
@section('title', 'Crear nueva Habitación')
@section('seccion', 'Crear Habitación')
@section('content')
    @include('common.errors')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('rooms.store') }}" method="POST">
                        @csrf
                        <div class="form-body">
                            <h3 class="card-title">Datos de la Habitación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="numero">Número de Habitación</label>
                                        <input required type="number" min="1" max="77" name="numero" id="numero" class="form-control">
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ubicacion">Ubicación</label>
                                        <select required name="ubicacion" id="ubicacion" class="form-control">
                                            <option value="">--Seleccionar--</option>
                                            @for($i = 1; $i <= $pisos; $i++)
                                                <option value="{{ $i }}">PISO {{ $i}}</option>
                                            @endfor
                                        </select>
                                        <small class="form-control-feedback"> Campo obligatorio</small>
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
                                                id="room_type_id" required>
                                            <option>--Selecciona una opción--</option>
                                            @foreach($roomTypes as $type)
                                                <option value="{{ $type->id }}">{{ $type->nombre }}</option>
                                            @endforeach
                                        </select>
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group has-success">
                                        <label class="control-label" for="room_status">Estatus</label>
                                        <select class="form-control" name="room_status"
                                                id="room_status" required>
                                            <option>--Selecciona una opción--</option>
                                            <option value="ACTIVA" selected>Activa</option>
                                            <option value="INACTIVA">Inactiva</option>
                                        </select>
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Servicios</h3>
                                <div class="form-group row pt-3">
                                    <div class="col-sm-6">
                                        @foreach($services as $service)
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
                            <button type="submit" class="btn waves-effect waves-light btn-success">
                                <i class="ti-save menu-icon"></i>
                                Guardar
                            </button>
                            <button type="reset" class="btn waves-effect waves-light btn-secondary">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection