@if ($errors->any())
    
    <div class="alert alert-danger alert-dismissible fade show  mt-2" role="alert" id="contenido">
        @if (count($errors) > 1)
        <strong>Errores en el formulario...</strong> 
        @else
        <strong>Casi listo! </strong> 

        @endif
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="material-icons">
                close
                </span>
        </button><br>
        @foreach ($errors->all() as $error)
        <span class="material-icons">
            error_outline
            </span> {{$error}}<br>
        @endforeach
        
    </div>
    
    <script>
        $(document).ready(function() {
            //Ejecutamos método que oculta las cajas
            OcultarContenedores1();
          });
          
          //Método que oculta el primer contenedor para mostrar el otro
          function OcultarContenedores1() {
            setTimeout(function() {
              $("#contenido").hide(1000);
            }, 8000);
          }
         
    
    </script>

    @endif

    