@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Pagos Online" />
    
<x-barra-acciones titulo="Acciones">
            <a href="#" data-toggle="modal" data-target="#modalformulario" class="btn btn-secondary text-secondary btn-outline  btn-rounded btn-floating m-1"><i class="font-size-22 v-align-middle zmdi zmdi-plus-circle zmdi-hc-fw"></i>Crear Pago</a>
            <a href="#" class="btn btn-success text-secondary btn-rounded btn-outline btn-floating m-1"><i class=" font-size-22 v-align-middle zmdi zmdi-account zmdi-hc-fw"></i>Ver mios</a>
</x-barra-acciones>

<div class="row">
   @foreach ($pagos as $item)
   <div class="col-sm-3 col-6">
    <div class="card  border">
        <div class="d-flex bg-danger">
            <a href="{{route('pago.editar',$item->id)}}">
            <div class="col p-t-10">
                
                    <div class="row mx-auto">
                        <div class="col-4"><h2><i class="la la-money text-white"></i></h2></div>
                        <div class="col-4"><h2><i class="la la-credit-card text-white"></i></h2></div>
                        <div class="col-4"><h2><i class="la la-cc-visa text-white"></i></h2></div>
                        
                    </div>
                    <div class="row">
                        <div class="col text-center"><h2 class="text-white ">{{$item->monto==0?'0':$item->monto}} Bs</h2></div>
                       

                    </div>
            </div>
        </a>
        </div>
        <div class=" text-center">
           <small>{{$item->nombre}}</small> <br>
           <small class="text-danger">{{$item->tipo}}</small> 

        </div>
    </div>
</div>
   @endforeach
    
    
   
</div>
<x-modal-form-create :lista="(['nombre'=>'text','tipo'=>'text'])" ruta="pago.create"/>

@endsection