@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Proyectos"/>

<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
           
           
            <x-table-form :cabeceras="(['Titulo','Precio Compra','Precio Venta','Cliente'])" nombre="titulo" :contenido="$proyectos" :variables="(['titulo','compra','venta','cliente'])"/>

           
    </div>
</section>

<x-modal-form-create :lista="(['titulo'=>'text','compra'=>'number','venta'=>'number','cliente'=>'text'])" ruta="proyecto.create"/>

@endsection