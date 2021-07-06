
<aside class="sidebar sidebar-left">
    <div class="sidebar-content">
        <nav class="main-menu">
            <ul class="nav metismenu">
                <li class="sidebar-header"><span>MENU</span></li>
                
               
                <li class="nav-dropdown {{ Request::path()=='empresa' ? 'active':''}}">
                    <a href="{{route('control')}}"><i class="la la-building"></i><span>Empresa</span></a>
                </li>
               
               
                <li class="nav-dropdown {{ Request::path()=='control' ? 'active':''}}">
                    <a href="{{route('control')}}"><i class="zmdi zmdi-hourglass-alt zmdi-hc-fw"></i><span>Control Pasantes</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='usuario' ? 'active':''}}">
                    <a href="{{route('usuario.index')}}"><i class="zmdi zmdi-shield-security zmdi-hc-fw"></i><span>Usuarios</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='proyecto' ? 'active':''}}">
                    <a href="{{route('proyecto.index')}}"><i class="la la-diamond"></i><span>Proyectos</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='producto' ? 'active':''}}">
                    <a href="{{route('producto.index')}}"><i class="la la-diamond"></i><span>Productos</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='compra' ? 'active':''}}">
                    <a href="{{route('proyecto.index')}}"><i class="la la-diamond"></i><span>Compras</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='venta' ? 'active':''}}">
                    <a href="{{route('proyecto.index')}}"><i class="la la-diamond"></i><span>Ventas</span></a>
                </li>
                <li class="nav-dropdown {{ Request::path()=='cotizacion' ? 'active':''}}">
                    <a href="{{route('cotizacion.index')}}"><i class="la la-diamond"></i><span>Cotizaciones</span></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
     

    