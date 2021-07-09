
    @if (session('success'))
    <div class="alert alert-success alert-rounded alert-dismissible fade show  mt-2" role="alert" id="contenido">
        <strong><span class="material-icons v-align-middle">
            done
            </span> 
            {{session('success')}} </strong>  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="contenido">
            <span class="material-icons">
            close
            </span>
        </button>
    </div>
    @endif
    @if (session('info'))
    <div class="alert alert-info alert-rounded alert-dismissible fade show  mt-2" role="alert" id="contenido">
        <strong><span class="material-icons v-align-middle">
            info
            </span> 
            </strong> {{session('info')}} 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
            <span class="material-icons">
            close
            </span>
        </button>
    </div>
@endif
@if (session('danger'))
<div class="alert alert-danger alert-rounded alert-dismissible fade show  mt-2" role="alert" id="contenido">
    <strong> <span class="material-icons v-align-middle">
        new_releases
        </span> 
    </strong> {{session('danger')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="material-icons">
        close
        </span>
    </button>
</div>
@endif
@if (session('warning'))
<div class="alert alert-warning alert-rounded alert-dismissible fade show mt-2" role="alert" id="contenido">
    <strong> <span class="material-icons v-align-middle">
        new_releases
        </span> 
    </strong> {{session('warning')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="material-icons">
        close
        </span>
    </button>
</div>
@endif

<script>
    $(document).ready(function() {
        //Ejecutamos método que oculta las cajas
        OcultarContenedores1();
      });
      
      //Método que oculta el primer contenedor para mostrar el otro
      function OcultarContenedores1() {
        setTimeout(function() {
          $("#contenido").hide(1000);
        }, 6000);
      }
     

</script>