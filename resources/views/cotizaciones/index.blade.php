@extends('asistencia.master')
@section('content')
    <x-cabecera-pagina titulo="Cotizaciones" />
    
    <x-barra-acciones titulo="Acciones">
                <a href="" class="btn btn-secondary text-dark btn-outline  btn-rounded btn-floating m-1"><i class="la la-plus"></i>Crear Nuevo</a>
                <a href="" class="btn btn-success text-dark btn-rounded btn-outline btn-floating m-1"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Ver mios</a>
                <a href="" class="btn btn-success text-dark  btn-outline btn-rounded btn-floating m-1"><i class="la la-credit-card"></i>Crear Pagos Online</a>
    </x-barra-acciones>

    <x-card-grill />
@endsection