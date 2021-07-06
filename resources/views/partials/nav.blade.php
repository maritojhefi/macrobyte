<nav class="top-toolbar navbar navbar-desktop flex-nowrap">
    <ul class="navbar-nav nav-left">
     
           
        <li class="nav-item">
            <a href="javascript:void(0)" data-toggle-state="content-menu-close">
                <i class="icon dripicons-align-left"></i>
            </a>
        </li>
    </ul>
    <ul class="site-logo">
        <li>
            <!-- START LOGO -->
                <a href="/">
                    <img src="{{asset('images/logo2.png')}}"  alt="" style="width: 300px">
                </a>
            <!-- END LOGO -->
        </li>
    </ul>
    <ul class="navbar-nav nav-right">
        <li class="nav-item">
            <a href="javascript:void(0)" class="open-search-button" data-q-action="open-site-search">
                <i class="icon dripicons-search"></i>
            </a>
        </li>
        <li class="nav-item dropdown dropdown-menu-lg">
            <a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon dripicons-view-apps"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right p-0">
                <div class="dropdown-menu-grid">
                    <div class="menu-grid-row">
                        <div><a class="dropdown-item  border-bottom border-right" href=""><i class="la la-newspaper-o"></i><span>Usuarios</span></a></div>
                        <div><a class="dropdown-item  border-right" href=""><i class="zmdi zmdi-assignment-check zmdi-hc-fw"></i><span>Productos Vendidos</span></a></div>

                     </div>
                  
                    <div class="menu-grid-row">
                      
                        <div><a class="dropdown-item  border-bottom" href=""><i class="la la-unlock-alt"></i><span>Compras</span></a></div>

                                               
                         <div> <a class="dropdown-item" href="javascript:void(0)"><i class="icon dripicons-calendar"></i><span>Promociones</span></a></div>
                    </div>
                  
                </div>
            </div>
        </li>
       
        <li class="nav-item dropdown">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="align-self-center mr-3 w-40 rounded-circle" src="{{asset('images/logounico.png')}}" alt="Albert Einstein">

        

            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                <div class="dropdown-header pb-3">
                    <div class="media d-user">
                        <img class="align-self-center mr-3 w-40 rounded-circle" src="{{asset('images/logounico.png')}}" alt="Albert Einstein">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">     {{auth()->user()->name}}</h5>
                            <span></span>
                        </div>
                    </div>
                </div>
                <a class="dropdown-item" href="javascript:void(0);"><i class="icon dripicons-mail"></i> Mi Empresa <span class="badge badge-accent rounded-circle w-15 h-15 p-0 font-size-10">4</span></a>
            <a class="dropdown-item" href=""><i class="icon dripicons-user"></i> Perfil</a>

                <a class="dropdown-item" href=""><i class="icon dripicons-gear"></i>Productos</a>
                <div class="dropdown-divider"></div>
                
                <a class="dropdown-item" href=""  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="icon dripicons-lock-open"></i> Cerrar Sesion</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                  @csrf
                </form>
            </div>
        </li>
        
        
        <li class="nav-item">
           
        </li>
    </ul>
    <form role="search" action="javascript:void(0);" class="navbar-form">
        <div class="form-group">
            <input type="text" placeholder="Busca alguna funcion del sistema..." class="form-control navbar-search" autocomplete="off">
            <i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>
        </div>
        <button type="submit" class="d-none">Submit</button>
    </form>
</nav>