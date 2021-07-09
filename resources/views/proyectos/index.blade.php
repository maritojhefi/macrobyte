@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Proyectos">
    <x-boton-opciones>
        <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#modalformulario">
            <i class="la la-plus"></i> Crear Nuevo
        </a>
    </x-boton-opciones>
</x-cabecera-pagina>


<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
           
           
            <x-table-form :cabeceras="(['Titulo','Precio Compra','Precio Venta','Cliente'])" nombre="titulo" rutadelete="proyecto.delete" :contenido="$proyectos" :variables="(['titulo','compra','venta','cliente'])"/>

           
    </div>
</section>

<x-modal-form-create :lista="(['titulo'=>'text','compra'=>'number','venta'=>'number','cliente'=>'text'])" ruta="proyecto.create"/>

@endsection