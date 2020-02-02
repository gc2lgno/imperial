@extends('admin.layout.app')
@section('title', ' Lista de Clientes')
@section('seccion', 'Lista de Clientes')
@section('content')
    <div class="row">
        <!-- column -->
        <div class="col-12">
            @include('common.success')
            @include('common.errors')
            @include('common.errorsb')
            <div class="card">
                <div class="card-body">
                    <div class="row button-group float-right ">
                        <div class="float-right">
                            <a href="{{ route('customer.create') }}"
                               class="btn btn-info d-none d-lg-block m-l-15 float-right m-b-10 waves-effect waves-dark"
                               data-toggle="tooltip"
                               title="Nuevo cliente">
                                <i class="ti-plus menu-icon"></i>Crear nuevo</a>
                        </div>
                    </div>
                    {{--Formulario para la busqueda de Cliente--}}
                    <div class="row has-info">
                        <form action="{{ route('customer.search') }}" class="app-search d-none d-md-block d-lg-block"
                              method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="datos" id="nombres" class="form-control"
                                       placeholder="Buscar cliente" required>
                                <div class="input-group-append">
                                <button type="submit" class="input-group-text" id="basic-addon11">
                                        <i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Nombres y Apellidos</th>
                                <th>Cédula / RIF</th>
                                <th class="text-nowrap">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td> {{ $customer->nombres }} {{ $customer->apellidos }} </td>
                                    <td> {{ $customer->rif }} </td>
                                    <td>
                                        <div class="row button-group">
                                            <a href=" {{ route('customer.show', $customer->id) }} "
                                               class="btn btn-circle btn-success" data-toggle="tooltip"
                                               title="Datos del Cliente">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-circle btn-info" data-toggle="tooltip"
                                               title="Ver Historial">
                                                <i class="ti-search"></i>
                                            </a>
                                            <form action="{{ route('customer.destroy', $customer->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-circle btn-danger"
                                                        data-toggle="tooltip"
                                                        title="Eliminar Cliente">
                                                    <i class="ti-trash"></i>
                                                </button>
                                            </form>
                                            <a href="#" class="btn btn-circle btn-primary" data-toggle="tooltip"
                                               title="Agendar Reserva">
                                                <i class="ti-bookmark-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="float-right">
                        {{ $customers->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
    </div>
@endsection