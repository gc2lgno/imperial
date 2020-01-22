@extends('admin.layout.app')
@section('title', 'Datos del Hotel')
@section('seccion', 'Datos Hotel')
@section('content')
@include('common.success')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form>
                    @csrf
                    <div class="form-body">
                        <h3 class="card-title">Datos del Hotel</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Nombre</label>
                                    <input required type="text" name="nombres" class="form-control"
                                        value=" {{ $hotel->nombre }} " readonly>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">RIF</label>
                                    <input required type="text" name="rif" class="form-control"
                                        value=" {{ $hotel->rif }} " readonly>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Teléfono</label>
                                    <input required type="text" name="telefono" class="form-control"
                                        value=" {{ $hotel->telefono }} " readonly>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Dirección</label>
                                    <textarea name="direccion" cols="15" rows="5" class="form-control"
                                        readonly>{{ $hotel->direccion }}</textarea>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Estado del Hotel</label>
                                    <select name="hotel_status" class="form-control" disabled>
                                        <option value="{{ $hotel->status->id }}">{{ $hotel->status->nombre }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <a href=" {{ route('hotel.edit', $hotel->id) }} "
                            class="btn waves-effect waves-light btn-success">
                            <i class="ti-pencil"></i>
                            Editar Datos</a>
                        <a href="#" class="btn waves-effect waves-light btn-info">
                            <i class="ti-back-left"></i>
                            Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection