@extends('master')
@section('content')


<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card ">
               
                <div class="card-body   ">
                    <div  class="dataTables_wrapper container-fluid dt-bootstrap4 ">
                        {{$pasantes->links()}}

                        <div class="row  table-responsive-md table-responsive-xs">
                            <div class="col-sm-12">
                                <table id="bs4-table" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="bs4-table_info">
                        <thead>
                            <tr role="row ">
                                <th class="sorting_asc">Foto</th>

                                <th class="sorting_asc">Nombre</th>
                                <th class="sorting_asc">Cedula</th>
                                <th class="sorting_asc">Telefono</th>
                                <th class="sorting_asc">Acciones</th>
                            </tr>
                                  </thead>
                        <tbody>
                            
                            @foreach ($pasantes as $pasante)
                                
                          
                            <tr role="row" class="odd  ">
                               
                               
                              <td><img class=" mr-3 rounded-circle" src="{{asset('images')}}/{{$pasante->foto}}"  style="width:50px;height:50px" alt=" ">                              </td>
                                <td>{{$pasante->nombre}}</td>

                                <td>{{$pasante->cedula}}</td>
                                <td>{{$pasante->telefono}}</td>
                                <td><button type="button" class="btn btn-accent btn-sm btn-rounded btn-floating btn-outline" data-toggle="modal" data-target="#exampleModalLong{{$pasante->id}}">
                                    Ver
                                </button><a href="{{route('borrarpasante',$pasante->id)}}" class="btn btn-danger btn-sm btn-rounded btn-floating text-white">Borrar</a></td>
                            </tr>
                            <div class="modal fade" id="exampleModalLong{{$pasante->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Postulante #{{$pasante->id}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="zmdi zmdi-close"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <div class="profile-card text-center">
                                                    <div class="thumb-xl member-thumb m-b-10 center-block">
                                                                                <img src="{{asset('images')}}/{{$pasante->foto}}" class="rounded-circle img-thumbnail" alt="profile-image" style="width:150px;height:150px">
                                
                                                                            </div>
                                                    <div class="">
                                                        <h5 class="m-b-5">{{$pasante->nombre}}</h5>
                                                        <p class="text-muted">{{$pasante->telefono}}</p>
                                                    </div>
                                                     
                                                    <ul class="list-reset text-left m-t-40">
                                                        <li class="text-muted"><strong>Nacimiento: </strong><span class="m-l-15">{{$pasante->nacimiento}}</span></li>
                                                        <li class="text-muted"><strong>Cedula: </strong> <span class="m-l-15">{{$pasante->cedula}}</span></li>
                                                        <li class="text-muted"><strong>Photoshop: </strong> <span class="m-l-15">{{$pasante->photoshop}}</span></li>
                                                        <li class="text-muted"><strong>Office: </strong><span class="m-l-15">{{$pasante->office}}</span></li>
                                                        <li class="text-muted"><strong>Redes sociales: </strong><span class="m-l-15">{{$pasante->redes}}</span></li>
                                                        <li class="text-muted"><strong>Marketing: </strong><span class="m-l-15"> {{$pasante->marketing}}</span></li>
                                                        <li class="text-muted"><strong>Edicion de videos: </strong><span class="m-l-15">{{$pasante->edicionvideos}}</span></li>
                                                        <li class="text-muted"><strong>Posee Computadora?: </strong><span class="m-l-15">{{$pasante->poseecompu=='on'? 'SI':'NO'}}</span></li>
                                                        <li class="text-muted"><strong>Vive en Tarija?: </strong><span class="m-l-15">{{$pasante->tarijeno=='on'? 'SI':'NO'}}</span></li>
                                                        <li class="text-muted"><strong>Desea hacer practicas?: </strong><span class="m-l-15">{{$pasante->practica=='on'? 'SI':'NO'}}</span></li>
                                                        <li class="text-muted"><strong>Es menor de 25?: </strong><span class="m-l-15">{{$pasante->menora25=='on'? 'SI':'NO'}}</span></li>

                                                    </ul>
                                                    <div class="card bg-primary text-center p-3">
                                                        <blockquote class="blockquote mb-0">
                                                            <p class="text-white">Estudios: {{$pasante->estudios}}</p>
                                                            
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                        </tbody>
                       
                    </table>
                </div>
            </div>
            
        </div>
    </div>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection