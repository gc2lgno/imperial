@extends('admin.layout.app')
@section('title', 'Tipo de Habitación')
@section('seccion', 'Tipo de habitación')
@section('content')
    @include('common.errors')
    @include('common.success')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="form-body">
                            <h3 class="card-title">Datos del Tipo de habitación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="nombre">Nombre</label>
                                        <input required type="text" id="nombre" name="nombre" class="form-control"
                                               value="{{ $roomType->nombre }}" readonly>
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
                                                   value="{{ $roomType->precio }}" readonly>
                                            <div class="input-group-append">
                                                <span class="input-group-text">,00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="total_room">Capacidad</label>
                                        <input required type="number" name="total_room" id="total_room"
                                               class="form-control" value="{{ $roomType->total_room }}" readonly>
                                    </div>
                                </div>
                                <!--/span-->
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="control-label" for="detalles">Detalles</label>
                                            <textarea name="detalles" id="detalles" class="form-control" cols="120"
                                                      rows="5" readonly>{{ $roomType->detalles }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <div class="form-actions">
                                <a href=" {{ route('room-types.edit', $roomType->id) }} "
                                   class="btn waves-effect waves-light btn-success">
                                    <i class="ti-pencil"></i>
                                    Editar</a>
                                <a href="{{ route('room-types.index') }}" class="btn waves-effect waves-light btn-info">
                                    <i class="ti-back-left"></i>
                                    Volver</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection