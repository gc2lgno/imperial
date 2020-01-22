@extends('admin.layout.app')
@section('title', 'Editar Hotel')
@section('seccion', 'Edición Hotel')
@section('content')
@include('common.success')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action=" {{ route('hotel.update', $hotel->id) }} ">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <h3 class="card-title">Datos del Hotel</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Nombre</label>
                                    <input required type="text" name="nombres" class="form-control"
                                        value="{{ $hotel->nombre }}">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">RIF</label>
                                    <input required type="text" name="rif" class="form-control"
                                        value="{{ $hotel->rif }}">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Teléfono</label>
                                    <input required type="text" name="telefono" class="form-control"
                                        value="{{ $hotel->telefono }}">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="control-label">Dirección</label>
                                    <textarea name="direccion" cols="15" rows="5"
                                        class="form-control">{{ $hotel->direccion }}</textarea>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn waves-effect waves-light btn-success">
                            <i class="ti-pencil"></i>
                            Guardar</button>
                        <button type="reset" class="btn waves-effect waves-light btn-secondary">
                            Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection