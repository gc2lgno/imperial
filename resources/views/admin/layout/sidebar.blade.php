<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Panel de Control</span></a>
                </li>
                <li class="nav-small-cap">--- Usuario</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-calendar"></i>
                        <span class="hide-menu">Reservaciones</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">
                                <i class="ti-plus menu-icon"></i>
                                Crear</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-menu-alt menu-icon"></i>
                                Lista</a>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-user"></i>
                        <span class="hide-menu">Clientes</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('customer.create') }}">
                                <i class="ti-plus menu-icon"></i>
                                Crear</a>
                        </li>
                        <li>
                            <a href="{{ route('customer.create') }}">
                                <i class="ti-search menu-icon"></i>
                                Buscar</a>
                        </li>
                        <li>
                            <a href="{{ route('customer.index') }}">
                                <i class="ti-menu-alt menu-icon"></i>
                                Lista</a>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-direction-alt"></i>
                        <span class="hide-menu">Habitaciones</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">
                                <i class="ti-plus menu-icon"></i>
                                Crear</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-menu-alt menu-icon"></i>
                                Lista</a>
                        </li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-credit-card"></i>
                        <span class="hide-menu">Pagos</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">
                                <i class="ti-plus menu-icon"></i>
                                Crear</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-menu-alt menu-icon"></i>
                                Lista</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-small-cap">--- Administración</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-directions"></i>
                        <span class="hide-menu">Hotel</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href=" {{ route('hotel.detalle', 1) }} ">
                                <i class="icon-info menu-icon"></i>
                                Datos</a>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-badge"></i>
                        <span class="hide-menu">Servicios</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href=" {{ route('service.index') }} ">
                                <i class="ti-menu-alt menu-icon"></i>
                                Lista</a>
                        </li>
                        <li><a href=" {{ route('service.create') }} ">
                                <i class="ti-plus menu-icon"></i>
                                Crear</a>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-user"></i>
                        <span class="hide-menu">Clientes</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">
                                <i class="ti-plus menu-icon"></i>
                                Crear</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-menu-alt menu-icon"></i>
                                Lista</a>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-direction-alt"></i>
                        <span class="hide-menu">Habitaciones</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">
                                <i class="ti-plus menu-icon"></i>
                                Crear</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-menu-alt menu-icon"></i>
                                Lista</a>
                        </li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-credit-card"></i>
                        <span class="hide-menu">Pagos</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="#">
                                <i class="ti-plus menu-icon"></i>
                                Crear</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-menu-alt menu-icon"></i>
                                Lista</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->