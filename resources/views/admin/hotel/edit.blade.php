@extends('admin.layout.app')
@section('title', 'Editar Hotel')
@section('seccion', 'Edición Hotel')
@section('content')
    @include('common.success')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action=" {{ route('hotel.update', $hotel->id) }} ">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="card-title">Datos del Hotel</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label" for="nombre">Nombre</label>
                                        <input required type="text" name="nombre" id="nombre" class="form-control"
                                               value="{{ $hotel->nombre }}">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label" for="rif">RIF</label>
                                        <input required type="text" name="rif" id="rif" class="form-control"
                                               value="{{ $hotel->rif }}">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label" for="telefono">Teléfono</label>
                                        <input required type="text" name="telefono" id="telefono" class="form-control"
                                               value="{{ $hotel->telefono }}">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label" for="pisos">Cantidad de Pisos</label>
                                        <input required type="number" min="1" max="7" name="pisos" id="pisos"
                                               class="form-control"
                                               value="{{ $hotel->pisos }}">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="control-label" for="direccion">Dirección</label>
                                        <textarea name="direccion" id="direccion" cols="15" rows="5"
                                                  class="form-control">{{ $hotel->direccion }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label" for="hotel_status_id">Estado del Hotel</label>
                                        <select name="hotel_status_id" id="hotel_status_id" class="form-control"
                                                required>
                                            <option value="">Selecciona</option>
                                            @foreach ($status as $stat)
                                                <option value="{{ $stat->id }}">{{ $stat->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn waves-effect waves-light btn-success">
                                <i class="ti-pencil"></i>
                                Guardar
                            </button>
                            <button type="reset" class="btn waves-effect waves-light btn-secondary">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection