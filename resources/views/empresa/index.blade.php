@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Empresas">
    <x-boton-opciones>
        <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#modalformulario">
            <i class="la la-plus"></i> Crear Nueva Empresa
        </a>
    </x-boton-opciones>
</x-cabecera-pagina>


<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
           
           
            <x-table-form :cabeceras="(['Nombre','Logo','Codigo Banipay','NIT','Telefono'])" nombre="nombre" rutadelete="empresa.delete" :contenido="$empresas" :variables="(['nombre','logo','codigo_banipay','nit','telefono'])"/>

           
    </div>
</section>

<x-modal-form-create :lista="(['titulo'=>'text','compra'=>'number','venta'=>'number','cliente'=>'text'])" ruta="proyecto.create"/>

@endsection