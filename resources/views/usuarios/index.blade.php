@extends('asistencia.master')
@section('content')


 
    <x-cabecera-pagina titulo="Usuarios">
        <x-boton-opciones>
            <a href="javascript:void(0)" class="dropdown-item" data-toggle="modal" data-target="#modalformulario">
                <i class="la la-plus"></i> Crear Nuevo
            </a>
        </x-boton-opciones>
    </x-cabecera-pagina>

    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                
               
                <x-table-form :cabeceras="(['Nombre','Correo','Direccion','Telefono'])" nombre="name" rutadelete="usuario.delete" :contenido="$usuarios" :variables="(['name','email','address','telf'])" />

               
        </div>
    </section>

    <x-modal-form-create :lista="(['name'=>'text','email'=>'email','address'=>'text','telf'=>'number','password'=>'password'])" ruta="usuario.create"/>
      

@endsection