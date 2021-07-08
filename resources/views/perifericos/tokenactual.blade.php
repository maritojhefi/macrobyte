@extends('perifericos.index')
@section('aside-content')
        <div class="row">
            <div class="col">
                @isset($token)
                <div class="card">
                    <h5 class="card-header">Token en uso</h5>
                    <div class="card-body">

                            
                                
                                <div class="form-group">
                                    <label for="exampleInputHelp1">Token</label>
                                    <textarea class="form-control" rows="5"  disabled="">{{$token->token}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputHelp1">Creado por</label>
                                    <input type="text" class="form-control" disabled=""  value="{{$token->user->name}}">
                                    <small id="textHelp1" class="form-text text-muted"> <i class="font-size-22 v-align-middle zmdi zmdi-time-interval zmdi-hc-fw"></i> Hace {{$diferencia}} minutos</small>
                                </div>
                                
                            
                        </div>
                    </div>
                @endisset
                @empty($token)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> No se encuentra ningun token<a href="#" class="alert-link"> genere uno aqui!</a>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                @endempty
            </div>
                        
        </div>
@endsection