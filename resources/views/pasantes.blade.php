@extends('master')
@section('content')
<div id="app">
    <!-- TOP TOOLBAR WRAPPER -->
  
  
    <!-- END TOP TOOLBAR WRAPPER -->
        <div class="content-wrapper">
            <!-- MENU SIDEBAR WRAPPER -->
            
                <!-- END MENU SIDEBAR WRAPPER -->
            <div class="content container-fluid">
                @include('partials.session-flash-status')

                <header class="page-header container">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h1 class="separator">Rellena el form.</h1>
                           
                        </div>
                        <ul class="actions top-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
                                    <i class="la la-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
                                    <div class="dropdown-header">
                                        Acciones rapidas
                                    </div>
                                    <a href="https://macrobyte.site" class="dropdown-item">
                                        <i class="zmdi zmdi-city-alt zmdi-hc-fw"></i>Pagina de la empresa
                                    </a>
                                    <a href="https://www.facebook.com/macrobyte.tja" class="dropdown-item">
                                        <i class="zmdi zmdi-facebook-box zmdi-hc-fw"></i>Macrobyte
                                    </a>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <section class="page-content container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <h5 class="card-header">Informacion del solicitante</h5>
                                <div class="card-body">
                                    <form id="vertical-wizard" action="{{route('formulario')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <h3>Datos personales</h3>
                                        <section>
                                            <h5 class="card-title">Esta informacion es confidencial</h5>
                                            
                                            <div class="form-group">
                                                <label for="userName">Nombres y Apellidos</label>
                                                <input type="text" class="form-control required" name="nombre" >
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Cedula de identidad</label>
                                                <input name="cedula" type="number" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Telefono</label>
                                                <input name="telefono" type="number" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="confirm">Fecha de nacimiento</label>
                                                <input id="" name="fecha" type="date" class="form-control required" placeholder="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="confirm">Nivel de estudios</label>
                                                <textarea  class="form-control required" name="estudios" placeholder="Breve resumen de titulos obtenidos y estudios en curso"></textarea>
                                            </div>
                                            <div class="form-group">
                                                
                                                <div class="file-upload">
                                                    <label for="confirm">Foto actual del rostro</label>
                                                    <label for="subir" class="btn btn-success m-b-0 m-l-5 m-r-5 btn-rounded btn-outline"  data-toggle="tooltip" data-placement="top" data-original-title="Subir una nueva foto"><span class="material-icons">file_upload</span></label>
                                                    <input id="subir" class="form-control file-upload__input" type="file" name="imagen">
                                                </div>
                                            
                                            <div id="vistazo" class=" card-img img-fluid mb-4" style="width:50px"></div>

                                        </div>
                                            
                                        </section>
                                        <h3>Conocimiento</h3>
                                        <section>
                                            <h5 class="card-title">Habilidades</h5>
                                            <small class="text-danger">Indica el nivel de conocimiento</small>
                                            <div class="custom-control custom-checkbox checkbox-primary form-check">
                                                <input type="checkbox" class="custom-control-input" id="stateCheck1" onclick="myFunction(1)">
                                                <label class="custom-control-label" for="stateCheck1">Adobe Photoshop</label>
                                                <div id="barra1"></div>


                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-warning form-check">
                                                <input type="checkbox" class="custom-control-input" id="stateCheck2" onclick="myFunction(2)">
                                                <label class="custom-control-label" for="stateCheck2">Paquete office(word, excel, powerpoint)</label>
                                                <div id="barra2"></div>

                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-accent form-check">
                                                <input type="checkbox" class="custom-control-input" id="stateCheck3" onclick="myFunction(3)">
                                                <label class="custom-control-label" for="stateCheck3">Publicidad y manejo de paginas en redes sociales</label>
                                                <div id="barra3"></div>

                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-success form-check">
                                                <input type="checkbox" class="custom-control-input" id="stateCheck4" onclick="myFunction(4)">
                                                <label class="custom-control-label" for="stateCheck4">Posicionamiento y marketing de marcas</label>
                                                <div id="barra4"></div>

                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-info form-check">
                                                <input type="checkbox" class="custom-control-input" id="stateCheck5" onclick="myFunction(5)">
                                                <label class="custom-control-label" for="stateCheck5">Edicion de videos</label>
                                                <div id="barra5"></div>

                                            </div>
                                          
                                           
                                           
                                        </section>
                                        <h3>Informacion importante</h3>
                                        <section>
                                            
                                            <div class="custom-control custom-checkbox checkbox-primary form-check">
                                                <input type="checkbox" class="custom-control-input " id="acceptTerms1" name="computadora">
                                            <label class="custom-control-label" for="acceptTerms1">Poseo computadora portatil</label>
                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-primary form-check">
                                                <input type="checkbox" class="custom-control-input " id="acceptTerms2" name="vivetarija">
                                            <label class="custom-control-label" for="acceptTerms2">Vivo en Tarija-Bolivia</label>
                                            </div>
                                            
                                            <div class="custom-control custom-checkbox checkbox-primary form-check">
                                                <input type="checkbox" class="custom-control-input " id="acceptTerms4" name="practica">
                                            <label class="custom-control-label" for="acceptTerms4">Requiero hacer practicas profesionales para terminar mis estudios</label>
                                            </div>
                                            
                                            <h5 class="card-title">Informacion Importante</h5>
                                            <small>Luego de enviar este formulario, en un plazo maximo de 4 dias, en caso de haber sido seleccionad@, nos pondremos en contacto contigo para coordinar la entrevista personal. Gracias por tu tiempo y exitos en tu carrera profesional!</small>
                                            <br>
                                            <button type="submit" class="btn btn-success btn-sm btn-block">Enviar formulario</button>

                                        </section>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- SIDEBAR QUICK PANNEL WRAPPER -->
                                                                   
                                                                    <!-- END SIDEBAR QUICK PANNEL WRAPPER -->
        </div>
    </div>
    <!-- END CONTENT WRAPPER -->
    <script>
 document.getElementById("subir").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('vistazo'),
            image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}

        function refrescar(){
            var fin = document.getElementById("Finalizar");
            console.log(fin)
           fin.href="{{route('formulario')}}";
           fin.style.display="block"
           fin.innerHTML='<a href="http://macrobyte.test/formulario" id="Finalizar" onclick="refrescar()" role="menuitem" style="display: block;">Finalizar</a>'
        }
      
        function myFunction(num) {
// Get the checkbox
         var checkBox = document.getElementById("stateCheck"+num);
// Get the output text
         var barra = document.getElementById("barra"+num);
// If the checkbox is checked, display the output text
         if (checkBox.checked == true){
             
             barra.innerHTML='<div class="row"><div class="col-3"><small class="text-danger">Bajo</small></div><div class="col-6"><input type="range" class="custom-range" min="0" max="5" id="customRange2" name="lista'+num+'"></div><div class="col-3"><small class="text-success">Alto</small></div></div>'

         } else {
             barra.innerHTML='';
          }
     }
    </script>
@endsection