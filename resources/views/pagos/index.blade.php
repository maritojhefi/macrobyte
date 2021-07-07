@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Pagos Online" />
    
<x-barra-acciones titulo="Acciones">
            <a href="" class="btn btn-secondary text-dark btn-outline  btn-rounded btn-floating m-1"><i class="la la-plus"></i>Crear Pago</a>
            <a href="" class="btn btn-success text-dark btn-rounded btn-outline btn-floating m-1"><i class="zmdi zmdi-account zmdi-hc-fw"></i>Ver mios</a>
</x-barra-acciones>

<div class="row">
    <div class="col-sm-3 col-6">
        <div class="card no-shadow border">
            <div class="d-flex mx-auto">
                <div class="col bg-lt">
                   
                </div>
                
            </div>
            <div class="p-20 text-center">
                primary
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-6">
        <div class="card no-shadow border">
            <div class="d-flex bg-secondary">
                <div class="col bg-lt">  </div>
                <div class="col p-t-30 p-b-30"></div>
                <div class="col bg-dk"></div>
            </div>
            <div class="p-20 text-center">
                secondary
            </div>
        </div>
    </div>
    
    <div class="col-sm-3 col-6">
        <div class="card no-shadow border">
            <div class="d-flex bg-light">
                <div class="col bg-white"></div>
                <div class="col p-t-30 p-b-30 bg-light"></div>
                <div class="col bg-dark"></div>
            </div>
            <div class="p-20 text-center">
                white | light | dark
            </div>
        </div>
    </div>
</div>
@endsection