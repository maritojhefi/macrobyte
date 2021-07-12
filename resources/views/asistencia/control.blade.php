@extends('asistencia.master')
@section('content')

<div class="card-deck m-b-100">
    <div class="card card-elevate text-center">
        <a href="#gettingStartedTitle" class="smooth-scroll showlist1" data-toggle="modal" data-target=".bd-example-modal-1">
            <div class="card-body">
                <i class="la la-check font-size-80 text-primary"></i>
                <h5 class="card-title m-t-20">Marcar entrada de Tarjeta</h5>
                
                <small class="text-muted">Registra RFID para marcar la hora.</small>
            </div>
        </a>
    </div>
   
    <div class="card card-elevate card-hover text-center">
        <a href="#faqTitle" class="smooth-scroll showlist2" data-toggle="modal" data-target=".bd-example-modal-2">
            <div class="card-body">
                <i class="la la-mail-reply-all font-size-80 text-primary"></i>
                <h5 class="card-title m-t-20">Marcar salida de Tarjeta</h5>
                <small class="text-muted">Ya te vas?</small>
            </div>
        </a>
    </div>
    <div class="card card-elevate card-hover text-center">
        <a href="#" class="smooth-scroll showlist3" data-toggle="modal" data-target=".bd-example-modal-3">
            <div class="card-body">
                <i class="la la-square-o font-size-80 text-primary"></i>
                <h5 class="card-title  m-t-20">Registrar tarjeta</h5>
                <small class="text-muted">Puedes registrar o editar.</small>
            </div>
        </a>
    </div>
</div>
<div class="modal fade bd-example-modal-1" id="modal1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Marca ahora!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="zmdi zmdi-close"></span>
                </button>
            </div>
            <div class="modal-body mx-auto">
                <p>
                    <img src="{{asset('images/in.gif')}}" alt="">
                </p>
                <form action="{{route('entrada')}}" method="post">
                    @csrf
                    <input id="numero1"  type="number" class="form-control" name="numero">
                    <button type="submit"  class="btn btn-secondary">Marcar Entrada</button>
                </form>
            </div>
          
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-2" id="modal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Marca ahora!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="zmdi zmdi-close"></span>
                </button>
            </div>
            <div class="modal-body mx-auto">
                <p>
                    <img src="{{asset('images/exit.gif')}}" alt="">
                </p>
                <form action="{{route('salida')}}" method="post">
                    @csrf
                    <input id="numero2" type="number" class="form-control" name="numero">
                    <button type="submit" class="btn btn-secondary">Marcar Salida</button>
                </form>
            </div>
          
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-3" id="modal3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Marca ahora!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="zmdi zmdi-close"></span>
                </button>
            </div>
            <div class="modal-body mx-auto">
                <p>
                    <img src="{{asset('images/check.gif')}}" alt="">
                </p>
                <form action="{{route('revisar')}}" method="post">
                    @csrf
                    <input id="numero3" type="number" class="form-control" name="numero">
                    <button type="submit" class="btn btn-secondary">Revisar</button>
                </form>
            </div>
          
        </div>
    </div>
</div>
<script>
     document.querySelectorAll(".showlist1").
   forEach(link=>link.addEventListener("click", function(){
       var id=link.getAttribute("data-id");
       $('#modal1').on('shown.bs.modal', function() {
    $('#numero1').trigger('focus');
  });
   }))
  
   document.querySelectorAll(".showlist2").
   forEach(link=>link.addEventListener("click", function(){
       var id=link.getAttribute("data-id");
       $('#modal2').on('shown.bs.modal', function() {
    $('#numero2').trigger('focus');
  });
   }))
   document.querySelectorAll(".showlist3").
   forEach(link=>link.addEventListener("click", function(){
       var id=link.getAttribute("data-id");
       $('#modal3').on('shown.bs.modal', function() {
    $('#numero3').trigger('focus');
  });
   }))
</script>
@endsection