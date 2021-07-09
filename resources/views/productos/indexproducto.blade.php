@extends('asistencia.master')
@section('content')
    <x-cabecera-pagina  titulo="Productos">
        <x-boton-opciones>
            <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#modalformulario">
                <i class="la la-plus"></i> Crear Nuevo
            </a>
        </x-boton-opciones>
    </x-cabecera-pagina>
    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
               
               
                @livewire('search-users')
    
               
        </div>
    </section>
    <x-modal-form-create :lista="(['nombre'=>'text','codigo Barra'=>'text','imagen'=>'file','codigo Producto'=>'textarea'])" ruta="producto.create"/>
      

       
        @endsection