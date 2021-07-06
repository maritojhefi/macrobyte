@extends('asistencia.master')
@section('content')


 
    <x-cabecera-pagina titulo="Usuarios"/>

    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                
               
                <x-table-form :cabeceras="(['Nombre','Correo','Direccion','Telefono'])" nombre="name" :contenido="$usuarios" :variables="(['name','email','address','telf'])" />

               
        </div>
    </section>

    <x-modal-form-create :lista="(['name'=>'text','email'=>'email','address'=>'text','telf'=>'number','password'=>'password'])" ruta="usuario.create"/>
      

@endsection