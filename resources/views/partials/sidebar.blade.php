
<aside class="sidebar sidebar-left">
    <div class="sidebar-content">
        <nav class="main-menu">
            <ul class="nav metismenu">
                <li class="sidebar-header"><span>MENU</span></li>
                
               
                <li class="nav-dropdown {{ Request::path()=='empresa' ? 'active':''}}">
                    <a href="{{route('empresa.info')}}"><i class="la la-building"></i><span>Empresa</span></a>
                </li>
               
               
                <li class="nav-dropdown {{ Request::path()=='control' ? 'active':''}}">
                    <a href="{{route('control')}}"><i class="zmdi zmdi-hourglass-alt zmdi-hc-fw"></i><span>Control Pasantes</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='usuario' ? 'active':''}}">
                    <a href="{{route('usuario.index')}}"><i class="zmdi zmdi-shield-security zmdi-hc-fw"></i><span>Usuarios</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='rol' ? 'active':''}}">
                    <a href="{{route('rol.index')}}"><i class="zmdi zmdi-shield-security zmdi-hc-fw"></i><span>Roles</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='proyecto' ? 'active':''}}">
                    <a href="{{route('proyecto.index')}}"><i class="la la-diamond"></i><span>Proyectos</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='producto' ? 'active':''}}">
                    <a href="{{route('producto.index')}}"><i class="zmdi zmdi-shopping-cart zmdi-hc-fw"></i><span>Productos</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='compra' ? 'active':''}}">
                    <a href="{{route('compra.index')}}"><i class="la la-cart-plus"></i><span>Compras</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='venta' ? 'active':''}}">
                    <a href="{{route('venta.index')}}"><i class="la la-bar-chart-o"></i><span>Ventas</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='inventario' ? 'active':''}}">
                    <a href="{{route('inventario.index')}}"><i class="zmdi zmdi-collection-case-play zmdi-hc-fw"></i><span>Inventario</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='cotizacion' ? 'active':''}}">
                    <a href="{{route('cotizacion.index')}}"><i class="la la-file-text"></i><span>Cotizaciones</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='pago' ? 'active':''}}">
                    <a href="{{route('pago.index')}}"><i class="la la-cc-visa"></i><span>Crear Pagos</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='qr' ? 'active':''}}">
                    <a href="{{route('qr.index')}}"><i class="zmdi zmdi-audio zmdi-hc-fw"></i><span>Generar QR</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='musica' ? 'active':''}}">
                    <a href="{{route('musica.index')}}"><i class="zmdi zmdi-audio zmdi-hc-fw"></i><span>Reproductor</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='periferico' ? 'active':''}}">
                    <a href="{{route('periferico.index')}}"><i class="zmdi zmdi-collection-music zmdi-hc-fw"></i><span>Perifericos</span></a>

                </li>
            </ul>
        </nav>
    </div>
</aside>
     

    