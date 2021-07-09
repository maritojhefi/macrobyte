<div class=" col-md-6" id="cardactual">
    
    </div>

<script>
    document.querySelectorAll(".actual").
   forEach(link=>link.addEventListener("click", function(){
      
   $.ajax({
     method: "get",
     url: "{{route('musica.actual')}}",
     data:{'_token': '{{csrf_token()}}'}
   })
     .done(function( approved ) {
         if(approved!='error')
         {
            leerjson2(approved)

         }
         else
         {
            var error = document.getElementById("tab-cola");
            error.innerHTML='   <div id="cardactual" class="result-info p-b-30"><div class="alert alert-rounded alert-info alert-dismissible fade show" role="alert">Sin permisos para ver esta seccion...<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" class="la la-close"></span></button></div></div>';
            
        setTimeout(function() {
          $("#contenedor").hide(1000);
        }, 6000);
      }
         });
  
     
   }))

   function leerjson2(approved){
    console.log(approved);
    
     var imagen =  document.getElementById("cardactual");
      
       imagen.innerHTML='<div class="card text-white"><img class="card-img" src="'+approved[0]+'" style="width: auto" alt="Card image"><div class="card-img-overlay"><img src="{{asset('gifs/hojas.gif')}}" style="width: 80%; height:auto; position: absolute; " alt=""><h3 class="card-title texto-borde">'+approved[2]+'</h3><p class="texto-artist ">'+approved[1]+'</p><div style="position: absolute; left:15px;bottom:15px;"><a class="btn btn-rounded btn-dark mr-2" style="padding:10px 10px 30px 10px"><i class="zmdi zmdi-thumb-up zmdi-hc-fw" style="color:white"></i></a><a class="btn btn-rounded btn-dark" style="padding:10px 10px 30px 10px"><i class="zmdi zmdi-thumb-down zmdi-hc-fw" style="color:white"></i></a></div><img src="{{asset('gifs/casette.gif')}}" style="width: 100px; position: absolute; right:15px;bottom:15px;" alt=""></div></div>';

       
   }
</script>