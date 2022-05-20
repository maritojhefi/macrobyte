<div>
    <div class="col-md-12 col-sm-12 mt-2">
        <div class="card">
            <h5 class="card-header">Formulario</h5>
            <div class="card-body">
               
                    <form action="{{route($rutaeditar)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach ($variables as $item=>$tipo)
                           @if ($tipo=='text' || $tipo=='number' || $tipo=='password' || $tipo=='email' || $tipo=='date')
                               
                          
                           <div class="form-group row">
                            <label  class="control-label text-right col-md-3">{{ucwords($item)}}</label>
                              <div class="col-md-5">
                                
                                <input type="{{$tipo}}" class="form-control input-rounded @error(str_replace(' ', '', $item)) is-invalid @enderror"  {{$tipo=='number'?'min="0"':''}} name="{{str_replace(' ', '', $item)}}" value="{{$modelo[str_replace(' ', '', $item)]}}">
                                @error(str_replace(' ', '', $item)) <small class="text-danger text-sm">{{ $message }}</small> @enderror

                            </div>
                           </div>

                           @elseif ($tipo=='password')
                           
                           <div class="form-group row">
                            
                                <label class=" control-label text-right col-md-3">Confirmar</label>
                                <div class="col-md-5">
                                <input type="password" class="form-control input-rounded"  id="password-confirm" placeholder="Confirmar"  name="password_confirmation">
                            </div>
                            
                           </div>   
                           
                           @elseif($tipo=='file')
                           <div class="form-group row">
                            <label  class="control-label text-right col-md-3">{{ucwords($item)}}</label>
                            <div class="col-md-3 col-6">
                                <div class="col-md-5">
                                    <div class="file-upload">
                                        <label for="upload" class="btn btn-primary btn-rounded btn-floating m-b-0 m-l-5 m-r-5">Subir foto</label>
                                        <input id="upload" class="file-upload__input" type="file" name="{{str_replace(' ', '', $item)}}" >
                                        @error(str_replace(' ', '', $item)) <small class="text-danger text-sm">{{ $message }}</small> @enderror

                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 col-6" id="preview">
                                <img src="{{asset($modelo[$item])}}" class="w-50 rounded-circle" alt="foto">
                            </div>
                           </div>
                        @elseif($tipo=='textarea')
                        
                        <div class="form-group row">
                            <label  class="control-label text-right col-md-3">{{ucwords($item)}}</label>
                              <div class="col-md-5">
                                <textarea class="form-control input-rounded @error(str_replace(' ', '', $item)) is-invalid @enderror" name="{{str_replace(' ', '', $item)}}"  rows="3">{{$modelo[str_replace(' ', '', $item)]}}</textarea>
                                @error(str_replace(' ', '', $item)) <small class="text-danger">{{ $message }}</small> @enderror

                            </div>
                           </div>

                           @endif
                     @endforeach


                     <button type="submit" class="btn btn-success btn-rounded btn-floating">Actualizar</button>

</form>
                </div>
            </div>
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