<div>
    <x-cabecera-pagina titulo="Editando pago"></x-cabecera-pagina>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
              <h5 class="card-header">Productos</h5>

              <div class="card-body p-0">
                  
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input wire:model.debounce.500ms="buscar" type="text" class="form-control input-rounded" id="demoTextInput2" placeholder="Busca producto" autofocus>
                        
                    </li>
                    <span wire:loading.remove class="badge  badge-success">{{$total}} encontrados</span>
                        <span wire:loading class="badge  badge-danger">Cargando...</span>
                    @foreach ($productos as $item)
                    <li class="list-group-item">
                      <a href="#" class="text-secondary">
                        <div class="custom-control">
                          <small class="" for="">{{$item->nombre}}</small>
                         
                        </div>
                      </a>
                      </li>
                    @endforeach
                 
                  
                </ul>
              </div>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="card">
              <h5 class="card-header">Agregados</h5>
              <div class="card-body p-0">
                <ul class="list-group list-group-flush">


                  <li class="list-group-item">
                    <div class="media">
                      <img class="align-self-center mr-3 w-40 rounded-circle" src="{{asset('images/logounico.png')}}" alt=" ">
                      <div class="media-body">
                        <p class="mb-0"><strong class="">Rebecca Harris</strong></p>
                        <span><a href="javascript:void(0)"></a></span>
                      </div>
                    </div>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
    </div>

    
</div>
