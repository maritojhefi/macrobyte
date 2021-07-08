@extends('asistencia.master')
@section('content')
<div class="page-aside-left">
    <aside class="aside-left">
        <div class="card">
            <div class="card-header">
                Opciones
            </div>
            <div class="card-body">
                <ul class="nav sub-nav v-sub-nav flex-column p-b-30">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path()=='periferico/reproductor' ? 'active':''}}" href="{{route('periferico.reproductores')}}"><i class="icon la la-music font-size-22 v-align-middle p-r-15 p-t-5"></i>Reproductores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path()=='periferico/token' ? 'active':''}}" href="{{route('periferico.token')}}"><i class="icon la la-code-fork font-size-22 v-align-middle p-r-15 p-t-5"></i>Token activo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path()=='periferico/historial' ? 'active':''}}" href="{{route('periferico.historial')}}"><i class="icon zmdi zmdi-collection-video zmdi-hc-fw font-size-22 v-align-middle p-r-15 p-t-5"></i>Canciones Reproducidas</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="https://accounts.spotify.com/authorize?response_type=code&state=&client_id=a7814781430f49b38051ef66eb2baa99&scope=user-read-playback-state%20user-modify-playback-state&redirect_uri=https%3A%2F%2Fmacrobyte.site%2Fmusica%2Fcallback"><i class="icon la la-spotify font-size-22 v-align-middle p-r-15 p-t-5"></i>Generar token</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </aside>
    <div class="main-content">
        <header class="page-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h1 class="separator">Perifericos</h1>
                    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon dripicons-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Page Layouts</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Left Sidebar</li>
                        </ol>
                    </nav>
                </div>
                <ul class="actions top-left mobile-menu">
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="btn btn-fab" data-q-action="page-aside-left-open">
                            <i class="la la-navicon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <section class="page-content container-fluid">
            @yield('aside-content')
        </section>
    </div>
</div>
@endsection