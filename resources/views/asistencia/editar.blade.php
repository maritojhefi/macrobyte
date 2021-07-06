@extends('asistencia.master')
@section('content')
<div class="col-md-6">
    <div class="card">
        <h5 class="card-header">{{$texto}}</h5>
        <div class="card-body">

                <form method="POST" action="{{route('actualizar',$tarjeta->id)}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="demoTextInput1">Nombre</label>
                        <input type="text" class="form-control"  placeholder="Nombre completo" name="nombre" value="{{$tarjeta->nombre}}">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputHelp1">Numero de tarjeta</label>
                        <input type="text" class="form-control" id="inputDisabled" autocomplete="name" placeholder="{{$tarjeta->numero}}" disabled="" >
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-lg">Horas</span>
                            </div>
                            <input type="number" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" value="{{$tarjeta->minutos}}" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{($tarjeta->minutos*100)/160}}%">{{round(($tarjeta->minutos*100)/160)}}%</div>
                    </div>
                    <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-rounded btn-success">Guardar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection