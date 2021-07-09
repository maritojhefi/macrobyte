@extends('asistencia.master')
@section('content')
    <x-cabecera-pagina titulo="Roles">
        <x-boton-opciones>
            <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#modalformulario">
                <i class="la la-plus"></i> Crear Rol
            </a>
        </x-boton-opciones>
    </x-cabecera-pagina>
    
    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                
               
                <x-table-form :cabeceras="(['Nombre','Detalle'])" nombre="nombre" rutadelete="rol.delete" :contenido="$roles" :variables="(['nombre','detalle'])" />

               
        </div>
    </section>

    <x-modal-form-create :lista="(['nombre'=>'text','detalle'=>'text'])" ruta="rol.create"/>
      

@endsection