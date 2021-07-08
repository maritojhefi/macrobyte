<div class="card">
    <div class="card-body">
        <div class="result-info p-b-30 d-flex flex-column  p-2">
            @isset($canciones)
            <div wire:loading.remove class="h6 result-count row mb-2 ml-2"><small><strong>{{$canciones->count()}}</strong> <strong>Resultados para "{{$buscar}}"</strong></small></div>
            <div wire:loading class="h6 result-count row"><span>Buscando...</span> </div>
            <div class="row">
                <div class="card no-shadow">
                    @foreach ($canciones as $cancion)
                    <div class="row no-gutters m-b-30">
                        <div class="col-auto">
                            <img src="{{$cancion['foto']}}" class="img-thumbnail max-w-100" alt="">
                        </div>
                        <div class="col">
                            <div class="m-l-10">
                                <h6 class="card-title m-0"><a class="text-dark">{{$cancion['nombre']}}</a></h6>
                                <small class="card-text">{{$cancion['artista']}}</small>
                                <a href="#" wire:click="add('{{ $cancion['uri'] }}')">  <small class="text-muted"><span class="badge badge-pill badge-accent"><i class="font-size-22 zmdi zmdi-plus-circle zmdi-hc-fw text-white"></i>Añadir</span></small> </a> <br>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                   
                    </div>
            </div>
            
            @endisset
            
           @empty($canciones)
           <div class="h6 result-count"><span>Ingrese al menos 4 caracteres</span> </div>

           @endempty
        </div>
      
        </div>
    </div>