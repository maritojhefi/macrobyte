@extends('asistencia.master')
@section('content')
<x-cabecera-pagina titulo="Compras">
    <x-boton-opciones>
        
    </x-boton-opciones>
</x-cabecera-pagina>
<br>
<div class="col-md-6">
    <div class="card">
        <h5 class="card-header">Rounded Input Style</h5>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="demoTextInput2">Text Input</label>
                    <input type="text" class="form-control input-rounded" id="demoTextInput2" placeholder="What's your name?">
                </div>
                <div class="form-group">
                    <label for="exampleInputHelp3">Helping text</label>
                    <input type="text" class="form-control" id="exampleInputHelp3" autocomplete="username" aria-describedby="textHelp2" placeholder="Help text">
                    <small id="textHelp2" class="form-text text-muted">A block of help text that breaks onto a new line and may extend beyond one line.</small>
                </div>
                <div class="form-group">
                    <label for="demoPasswordInput2">Password</label>
                    <input type="password" class="form-control input-rounded" id="demoPasswordInput2" autocomplete="current-password" placeholder="Choose a password">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Example select</label>
                    <select class="form-control input-rounded" id="exampleFormControlSelect3">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect4">Example multiple select</label>
                    <select multiple="" class="form-control input-rounded" id="exampleFormControlSelect4">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea2">Example textarea</label>
                    <textarea class="form-control input-rounded" id="exampleFormControlTextarea2" rows="3"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection