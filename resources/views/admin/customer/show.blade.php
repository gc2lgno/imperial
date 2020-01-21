@extends('admin.layout.app')
@section('title', 'Datos del Cliente')
@section('seccion', 'Datos cliente')
@section('content')
@include('common.success')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form>
                    @csrf
                    <div class="form-body">
                        <h3 class="card-title">Datos del Cliente</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nombres</label>
                                    <input required type="text" name="nombres" class="form-control"
                                        value=" {{ $customer->nombres }} " readonly>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Apellidos</label>
                                    <input required type="text" name="apellidos" class="form-control"
                                        value=" {{ $customer->apellidos }} " readonly>
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
                                        value=" {{ $customer->rif }} " readonly>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Número de Teléfono</label>
                                    <input required type="text" name="telefono" class="form-control"
                                        value=" {{ $customer->telefono }} " readonly>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Correo electrónico</label>
                                    <input required type="email" name="email" class="form-control"
                                        value=" {{ $customer->email }} " readonly>
                                </div>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <a href=" {{ route('customer.edit', $customer->id) }} "
                            class="btn waves-effect waves-light btn-success">
                            <i class="ti-pencil"></i>
                            Editar Cliente</a>
                        <a href="{{ route('customer.index') }}" class="btn waves-effect waves-light btn-info">
                            <i class="ti-back-left"></i>
                            Volver</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection