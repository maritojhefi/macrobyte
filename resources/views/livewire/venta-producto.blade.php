<div>
        
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
                    <a href="#" class="text-secondary add" id="add{{$item->id}}" data-id="{{$item->id}}" onclick="sumarproducto({{$item->id}})">
                    <li class="list-group-item">
                      
                      
                        <div class="custom-control">
                          <i class="font-size-22 v-align-middle la la-plus-circle "></i><small class="" for="">{{$item->nombre}}</small>
                         
                        </div>
                      
                      </li>
                    </a>
                    @endforeach
                 
                  
                </ul>
              </div>
            </div>
          

</div>
