@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Editando"/>
    @livewire('edit-product', ['producto' => $producto])
@endsection