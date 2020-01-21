@extends('admin.layout.app')
@section('title', 'Edición de Datos del Cliente')
@section('seccion', 'Editar cliente')
@section('content')
@include('common.success')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <h3 class="card-title">Edición Datos del Cliente</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nombres</label>
                                    <input required type="text" name="nombres" class="form-control"
                                        value=" {{ $customer->nombres }} ">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Apellidos</label>
                                    <input required type="text" name="apellidos" class="form-control"
                                        value=" {{ $customer->apellidos }} ">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Cédula / RIF</label>
                                    <input required type="text" name="rif" class="form-control"
                                        value=" {{ $customer->rif }} ">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Número de Teléfono</label>
                                    <input required type="text" name="telefono" class="form-control"
                                        value=" {{ $customer->telefono }} ">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Correo electrónico</label>
                                    <input required type="email" name="email" class="form-control"
                                        value=" {{ $customer->email }} ">
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