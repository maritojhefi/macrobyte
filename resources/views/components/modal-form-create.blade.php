<div>
    <div class="modal fade  " id="modalformulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalFixedHeightTitle" aria-hidden="true" data-modal="scroll">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFixedHeightTitle">Creando Nuevo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="zmdi zmdi-close"></span>
                    </button>
                </div>
                
                <form action="{{route($ruta)}}" class="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                  
                    <div class="card">
                       
                        <div class="">
                           
                                @csrf
                                <div class="form-body">
                                    
                                   @foreach ($lista as $item=>$tipo)
                                   @if ($tipo=='text' || $tipo=='number' || $tipo=='password' || $tipo=='email')
                                       
                                  
                                   <div class="form-group row">
                                    <label  class="control-label text-right col-md-3">{{ucwords($item)}}</label>
                                      <div class="col-md-5">
                                        <input type="{{$tipo}}" class="form-control input-rounded @error(str_replace(' ', '', $item)) is-invalid @enderror"  {{$tipo=='number'?'min="0"':''}} name="{{str_replace(' ', '', $item)}}" value="{{old(str_replace(' ', '', $item)),str_replace(' ', '', $item)}}">
                                        @error(str_replace(' ', '', $item)) <small class="text-danger text-sm">{{ $message }}</small> @enderror
 
                                    </div>
                                   </div>

                                   @if ($tipo=='password')
                                   
                                   <div class="form-group row">
                                    
                                        <label class=" control-label text-right col-md-3">Confirmar</label>
                                        <div class="col-md-5">
                                        <input type="password" class="form-control input-rounded"  id="password-confirm" placeholder="Confirmar"  name="password_confirmation">
                                    </div>
                                    
                                   </div>   
                                   @endif
                                   @elseif($tipo=='file')
                                   <div class="form-group row">
                                    <label  class="control-label text-right col-md-3">{{ucwords($item)}}</label>
                                    <div class="col">
                                        <div class="col-md-5">
                                            <div class="file-upload">
                                                <label for="upload" class="btn btn-primary btn-rounded btn-floating m-b-0 m-l-5 m-r-5">Subir foto</label>
                                                <input id="upload" class="file-upload__input" type="file" name="{{str_replace(' ', '', $item)}}">
                                                @error(str_replace(' ', '', $item)) <small class="text-danger text-sm">{{ $message }}</small> @enderror

                                            </div>
                                          </div>
                                    </div>
                                    <div class="col" id="preview">
                                        <img src="{{asset('images/logounico.png')}}" class="w-50 rounded-circle" alt="">
                                    </div>
                                   </div>
                                @elseif($tipo=='textarea')
                                
                                <div class="form-group row">
                                    <label  class="control-label text-right col-md-3">{{ucwords($item)}}</label>
                                      <div class="col-md-5">
                                        <textarea class="form-control input-rounded @error(str_replace(' ', '', $item)) is-invalid @enderror" name="{{str_replace(' ', '', $item)}}"  rows="3">{{old(str_replace(' ', '', $item)),str_replace(' ', '', $item)}}</textarea>
                                        @error(str_replace(' ', '', $item)) <small class="text-danger">{{ $message }}</small> @enderror
  
                                    </div>
                                   </div>

                                   @endif
                                   @endforeach
                                </div>
                    </div>
                

                </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary  btn-rounded btn-outline" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success btn-rounded">Guardar</button>
                </div>
           
            </div>
        </div>
    </form>
    </div>

    <script>
        document.getElementById("upload").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');
            image.className="w-50 rounded-circle";
            

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}
        </script>
</div>