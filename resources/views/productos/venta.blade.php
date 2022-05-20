@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Crear venta"></x-cabecera-pagina>
<div class="row">
    <div class="col-lg-4">
    @livewire('venta-producto')
    </div>
    <div class="col-lg-4">
        <div class="card">
          <h5 class="card-header">Agregados</h5>
          <div class="card-body p-0" id="tablacuenta">
            <ul class="list-group list-group-flush">


              
             
            </ul>
          </div>
        </div>
      </div>


      <div class="col-lg-4">
        <div class="card">
          <h5 class="card-header">Acciones</h5>
          <div class="card-body p-3">
           <a class="btn btn-success btn-rounded text-white">Imprimir boleta</a>
           
          </div>
        </div>
      </div>
</div>
<script>
    function sumarproducto(id){
var idproducto= document.getElementById("add"+id).getAttribute("data-id");

$.ajax({
  method: "POST",
  url: "{{route('addtolist')}}",
  data:{'_token': '{{csrf_token()}}','id_producto':idproducto,'id_venta':'{{$venta->id}}'}
})
  .done(function( approved ) {
  if(approved=='agotado')
  {
    toastagotado()
  }
  else{
    leerjson(approved)
  }
    
  
 
  });
}
function leerjson(approved){
  var tabla = document.getElementById("tablacuenta");
  var total = document.getElementById("total");

  //console.log(approved);
   var i=0;
   var string='';
   var sum=0;
   let id=0;
   var link='';
      for (var a in approved) {
       string=string+ '<li class="list-group-item"><p class="mb-0"><strong class="">'+approved[i].cantidad+'-'+approved[i].nombre+'('+approved[i].subtotal+')'+'</strong></p></li>';
        sum=sum+parseInt(approved[i].subtotal);
      
        i++;
        

    }
    
    string=string+ '<th></th><th>Total: '+sum+' Bs</th><th></th>';
    tabla.innerHTML=string;

   
}
</script>
@endsection