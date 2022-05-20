@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Editando"/>
<x-edit-form :variables="(['nombre'=>'text','codigo Barra'=>'text','codigo Producto'=>'text','imagen'=>'file', 'cantidad'=>'number'])" :modelo="$producto" rutaeditar="producto.actualizar" />

@endsection