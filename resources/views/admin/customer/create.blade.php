@extends('admin.layout.app')
@section('title', 'Crear nuevo cliente')
@section('seccion', 'Crear cliente')
@section('content')
    @include('common.errors')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        <div class="form-body">
                            <h3 class="card-title">Datos del Cliente</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombres" class="control-label">Nombres</label>
                                        <input required type="text" name="nombres" id="nombres" class="form-control">
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="apellidos" class="control-label">Apellidos</label>
                                        <input required type="text" name="apellidos" id="apellidos"
                                               class="form-control">
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="rif" class="control-label">Cédula / RIF</label>
                                        <input required type="text" name="rif" id="rif" class="form-control">
                                        <small class="form-control-feedback"> Campo obligatorio</small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="telefono" class="control-label">Número de Teléfono</label>
                                        <input required type="text" name="telefono" id="telefono" class="form-control">
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="control-label">Correo electrónico</label>
                                        <input required type="email" name="email" id="email" class="form-control">
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
                            <button type="reset" class="btn waves-effect waves-light btn-secondary">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection