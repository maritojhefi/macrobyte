@extends('asistencia.master')
@section('content')
    <x-cabecera-pagina  titulo="Productos">
        <x-boton-opciones>
            <a href="{{route('product.form')}}" class="dropdown-item">
                <i class="la la-plus"></i> Crear Nuevo
            </a>
            <a href="{{route('product.venta')}}" class="dropdown-item">
                <i class="la la-plus"></i> Nueva venta
            </a>
        </x-boton-opciones>
    </x-cabecera-pagina>
    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
               
               
                @livewire('search-users')
    
               
        </div>
    </section>
      

       
        @endsection