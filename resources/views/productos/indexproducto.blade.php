@extends('asistencia.master')
@section('content')
    <x-cabecera-pagina  titulo="Productos"/>
    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
               
               
                @livewire('search-users')
    
               
        </div>
    </section>
    <x-modal-form-create :lista="(['nombre'=>'text','codigo Barra'=>'text','imagen'=>'file','codigo Producto'=>'textarea'])" ruta="producto.create"/>
      

       
        @endsection