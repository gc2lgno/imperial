@extends('admin.layout.app')
@section('title', 'Crear nuevo tipo de Habitación')
@section('seccion', 'Crear tipo de habitación')
@section('content')
@include('common.errors')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('customer.store') }}" method="POST">
                    @csrf
                    <div class="form-body">
                        <h3 class="card-title">Datos del Tipo de habitación</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Nombre</label>
                                    <input required type="text" name="nombre" class="form-control">
                                    <small class="form-control-feedback"> Campo obligatorio </small> </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Precio</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Bs.</span>
                                        </div>
                                        <input type="number" name="precio" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">,00</span>
                                        </div>
                                    </div>
                                    <small class="form-control-feedback"> Campo obligatorio </small>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Capacidad</label>
                                    <input required type="number" name="total_room" class="form-control">
                                    <small class="form-control-feedback"> Campo obligatorio </small> </div>
                            </div>
                            <!--/span-->
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="control-label">Detalles</label>
                                        <textarea name="detalles" class="form-control" cols="120" rows="5"></textarea>
                                        <small class="form-control-feedback"> Campo obligatorio </small>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn waves-effect waves-light btn-success"> <i
                                    class="ti-save menu-icon"></i>
                                Guardar</button>
                            <button type="reset" class="btn waves-effect waves-light btn-secondary">Cancelar</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection