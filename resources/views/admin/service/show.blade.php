@extends('admin.layout.app')
@section('title', 'Detalles de Servicio')
@section('seccion', 'Servicio')
@section('content')
@include('common.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form>
                    @csrf
                    <div class="form-body">
                        <h3 class="card-title">Datos del Servicio</h3>
                        <hr>
                        <div class="row p-t-10">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombre" class="control-label">Nombre</label>
                                    <input required type="text" name="nombre" id="nombre" class="form-control"
                                        value="{{ $service->nombre }}" readonly>
                                    <small class="form-control-feedback"> Campo obligatorio </small> </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="detalle" class="control-label">Detalle del Servicio</label>
                                    <textarea name="detalle" id="detalle" cols="30" rows="5" class="form-control"
                                        required readonly>{{ $service->detalle }}</textarea>
                                    <small class="form-control-feedback"> Campo obligatorio </small> </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <a href="{{ route('service.edit', $service->id) }}" class="btn waves-effect waves-light btn-success"> <i
                                class="ti-pencil menu-icon"></i>
                            Editar</a>
                        <a href="{{ route('service.index') }}" class="btn waves-effect waves-light btn-info"><i
                                class="ti-back-left"></i> Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection