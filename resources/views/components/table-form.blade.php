<div>
    <div class="card ">
                   
        <div class="card-body">
            <div  class="dataTables_wrapper container-fluid dt-bootstrap4 ">
                <div class="row  table-responsive-md table-responsive-xs">
                    
                    <div class="col-sm-12">
                        <table id="" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="bs4-table_info">
                <thead>
                    <tr role="row ">
                       @foreach ($cabeceras as $item)
                           <th>{{$item}}</th>
                       @endforeach
                       
                        
                        <th style="width: 5px;"> <i class="icon dripicons-gear text-success"></i></th>
                    </tr>
                          </thead>
                <tbody>
                  

                    @foreach ($contenido as $datostabla)
                        <tr>
                            @foreach ($variables as $variable)
                            
                            <td>{{$datostabla[$variable]?$datostabla[$variable]:'N/A'}}</td>
                           
                            @endforeach
                            
                            <td><a href="#" data-toggle="modal" data-target="#modaleliminar{{$datostabla->id}}"><i class="la la-trash"></i></a> </td>
                        </tr>
                        <x-modal :nombre="$datostabla[$nombre]" ruta="{{$rutadelete}}" :id="$datostabla['id']"/>
                    @endforeach
                 
                </tbody>
               
            </table>
        </div>
    </div>
    <div class="row"><div class="col-sm-12 col-md-5">
        
        

        <div class="dataTables_info" id="bs4-table_info" role="status" aria-live="polite">Mostrando {{$contenido->count()}} </div>
    </div>
    <div class="row">
        <div class="btn btn-sm">
            {{$contenido->links()}}
    </div>
</div>
</div>


        </div>

</div>
</div>