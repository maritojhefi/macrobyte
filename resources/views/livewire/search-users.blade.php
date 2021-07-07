<div>


    <div class="card ">
        
                   <div class="card-header ">
                    <div class="row">
                        <div class="col-md-1 mb-3 col-sm-3 col-6">
                            
                            <select wire:model.debounce.500ms="paginate" class="form-control input-rounded form-control-sm">
                                <option>5</option>
                                <option>10</option>
                                <option>20</option>
                                <option>30</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3 col-sm-3 col-6">
                            <a href="#" wire:click="ordenacion" class="btn btn-outline btn-rounded btn-secondary input-rounded btn-sm"><i class="zmdi zmdi-long-arrow-{{$order=='asc'?'up':'down'}} zmdi-hc-fw"></i>{{$order=='asc'?'ASC':'DESC'}}</a>
                           </div>
                        <div class="col-md-4 mb-3">
                            <input wire:model.debounce.500ms="search" type="text" placeholder="Buscar Usuarios" class="form-control form-control-sm input-rounded"/>
                
                        </div>
                        <div class="col-md-4 mb-3">
                            <span wire:loading wire:target="search,paginate" class="badge badge-secondary"><i class="la la-hourglass-start text-white"></i>Cargando...</span>
                            <span wire:loading.remove wire:target="search,paginate" class="badge badge-success"><i class="zmdi zmdi-badge-check zmdi-hc-fw text-white"></i>{{$total}} encontrados</span>
                            <span wire:offline class="badge badge-danger"><i class="zmdi zmdi-cloud-off zmdi-hc-fw text-white"></i>No hay internet</span>

                        </div>
                       
                    </div>
                   
                   </div>
        <div class="card-body">
            <div  class="dataTables_wrapper container-fluid dt-bootstrap4 ">
                <div class="row  table-responsive-md table-responsive-xs">

                    <div class="col-sm-12">
                        <table id="" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="bs4-table_info">
                <thead>
                    <tr role="row ">
                    
                        <th>Nombre  </th>
                        <th>Imagen</th>
                        <th>Codigo Producto</th>
                        <th>Codigo Barra</th>
                        <th style="width: 5px;"> <i class="icon dripicons-gear text-success"></i></th>
                    </tr>
                          </thead>
                <tbody>
                  @if ($productos->count()==0)
                    <td class="text-danger">No hay coincidencias</td>
                  @else    
                  @foreach($productos as $producto)
                    <tr>
                        <td>
                           @foreach (array($producto->nombre) as $item)
                            
                        {{$item}}
                        @endforeach</td>
                        <td>{{ $producto->imagen }}</td>
                        <td>{{ $producto->codigoProducto }}</td>
                        <td>{{ $producto->codigoBarra }}</td> 
                        <td>
                            <div class="row">
                            <div class="col-6"><a href="{{route('producto.edit',$producto->id)}}"><i class="zmdi zmdi-edit zmdi-hc-fw text-info"></i></a></div>
                            <div class="col-6"> <a href="#" data-toggle="modal" data-target="#modaleliminar{{$producto->id}}"><i class="la la-trash text-danger"></i></a> </div>
                        </div>  </td>
                        

                    </tr>
                    
                    @livewire('delete-product', ['productId'=>$producto->id], key($producto->id))
                 
              @endforeach
                  @endif
                   
                  
                 
                </tbody>
               
            </table>
        </div>
    </div>
    <div class="row"><div class="col-sm-12 col-md-5">
        
        

        <div class="dataTables_info" id="bs4-table_info" role="status" aria-live="polite">Mostrando {{$productos->count()}} usuarios</div>
    </div>
    <div class="row">
        <div class="btn btn-sm m-2">
            {{$productos->links()}}
    </div>
</div>
</div>


        </div>

</div>
</div>
