@extends('admin.layout.app')
@section('title', ' Lista de Reservaciones')
@section('seccion', 'Reservaciones')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    @include('common.success')
                    <div class="card">
                        <div class="card-body">
                            <a href="#"
                               class="btn btn-success d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"><i
                                        class="ti-search menu-icon"></i> Buscar</a>

                            <button class="btn btn-info d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"
                                    data-toggle="modal" data-target="#customerSearch">
                                <i class="ti-plus menu-icon"></i> Crear nueva
                            </button>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center">N° Reserva</th>
                                        <th class="text-center">Fecha Reserva</th>
                                        <th class="text-center">Cliente</th>
                                        <th class="text-center">Habitación</th>
                                        <th class="text-center">Checkin</th>
                                        <th class="text-center">Checkout</th>
                                        <th class="text-center">Pago</th>
                                        <th class="text-center">Estatus</th>
                                        <th class="text-nowrap text-center">Acción</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                            <div class="float-right">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- column -->
            </div>
            {{--MODAL --}}
            <form action="{{ route('customer.search') }}" method="POST">
                @csrf
                <div class="modal" id="customerSearch" tabindex="-1" role="dialog" aria-labelledby="customerSearch">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="customerSearch">Buscar Cliente</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="datos" class="control-label">Datos del Cliente:</label>
                                        <input type="text" name="datos" class="form-control" id="datos" required>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection