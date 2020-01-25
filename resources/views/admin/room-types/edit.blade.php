@extends('admin.layout.app')
@section('title', 'Editar tipo de Habitación')
@section('seccion', 'Edición tipo de habitación')
@section('content')
    @include('common.errors')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('room-types.update', $roomType->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-body">
                            <h3 class="card-title">Datos del Tipo de habitación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="nombre">Nombre</label>
                                        <input required type="text" id="nombre" name="nombre" class="form-control"
                                               value="{{ $roomType->nombre }}">
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="precio">Precio</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Bs.</span>
                                            </div>
                                            <input type="number" name="precio" id="precio" class="form-control"
                                                   value="{{ $roomType->precio }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text">,00</span>
                                            </div>
                                        </div>
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="total_room">Capacidad</label>
                                        <input required type="number" name="total_room" id="total_room" class="form-control" value="{{ $roomType->total_room }}">
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                                <!--/span-->
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="control-label" for="detalles">Detalles</label>
                                            <textarea name="detalles" id="detalles" class="form-control" cols="120"
                                                      rows="5">{{ $roomType->detalles }}</textarea>
                                            <small class="form-control-feedback"> Campo obligatorio</small>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn waves-effect waves-light btn-success"><i
                                            class="ti-save menu-icon"></i>
                                    Guardar
                                </button>
                                <button type="reset" class="btn waves-effect waves-light btn-secondary">Cancelar
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection