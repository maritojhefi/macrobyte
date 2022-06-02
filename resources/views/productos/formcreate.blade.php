@extends('asistencia.master')
@section('content')
    <x-cabecera-pagina titulo="Creando Producto" />
    <x-card-form :lista="(['nombre'=>'text','imagen'=>'file','cantidad'=>'number','precio Venta'=>'number','codigo Barra'=>'text'])" ruta="producto.create"/>

@endsection