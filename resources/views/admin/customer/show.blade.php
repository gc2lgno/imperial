@extends('admin.layout.app')
@section('title', 'Datos del Cliente')
@section('seccion', 'Datos cliente')
@section('content')
    @include('common.success')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('customer.destroy', $customer->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="form-body">
                            <h3 class="card-title">Datos del Cliente</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="nombres">Nombres</label>
                                        <input required type="text" name="nombres" id="nombres" class="form-control"
                                               value=" {{ $customer->nombres }} " readonly>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="apellidos">Apellidos</label>
                                        <input required type="text" name="apellidos" id="apellidos" class="form-control"
                                               value=" {{ $customer->apellidos }} " readonly>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="rif">Cédula / RIF</label>
                                        <input required type="text" name="rif" id="rif" class="form-control"
                                               value=" {{ $customer->rif }} " readonly>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label" for="telefono">Número de Teléfono</label>
                                        <input required type="text" name="telefono" id="telefono" class="form-control"
                                               value=" {{ $customer->telefono }} " readonly>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Correo electrónico</label>
                                        <input required type="email" name="email" id="email" class="form-control"
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
                            <div class="float-right">
                                <button type="submit" class="btn waves-effect btn-danger">
                                    <i class="ti-trash"></i>
                                    Eliminar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection