<div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 col-xxl-2">
            <div class="card card-menu">
                <div class="card-header">Diseño</div>
                <div class="card-body p-10">
                    <ul class="nav metismenu">
                        <li class="nav-dropdown active">
                            <a class="has-arrow" href="#" aria-expanded="false"><span>Forma</span></a>
                            <ul class="collapse in nav-sub" aria-expanded="true">
                                <li><a href="javascript:void(0)"><span>Cuadrado</span></a></li>
                                <li class="active"><a href="javascript:void(0)"><span>Puntos</span></a></li>
                                <li><a href="javascript:void(0)"><span>Circular</span></a></li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a class="has-arrow" href="#" aria-expanded="false"><span>Esquinas</span></a>
                            <ul class="collapse nav-sub" aria-expanded="false">
                                <li><a href="javascript:void(0)"><span>Redondas</span></a></li>
                                <li><a href="javascript:void(0)"><span>Cuadradas</span></a></li>
                                <li><a href="javascript:void(0)"><span>Raro</span></a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Tamaño imagen</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="range" class="custom-range" min="0" max="5" step="0.5" id="customRange3">                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card">
                <div class="card-header">Subir imagen</div>
                <div class="card-body">
                    <form>
                        @if ($photo)
                           
                            <img src="{{ $photo->temporaryUrl() }}">
                        @endif
                    
                                    <div class="col">
                                        <div class="col-md-5">
                                            <div wire:loading.remove class="file-upload">
                                                <label for="upload" class="btn btn-primary btn-rounded btn-floating m-b-0 m-l-5 m-r-5">Subir foto</label>
                                                <input id="upload" class="file-upload__input" type="file" wire:model="photo">
                                                
                                                
                                            </div>
                                            <div wire:loading wire:target="photo" class="preloader pl-lg">
                                                <svg class="pl-circular" viewBox="25 25 50 50">
                                                    <circle class="plc-path" cx="50" cy="50" r="20"></circle>
                                                </svg>
                                            </div>
                                          </div>
                                    </div>
                    
                        @error('photo') <span class="error">{{ $message }}</span> @enderror
                    
                        
                    </form>
                    
                </div>
            </div>
           
           
</div>



<div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 col-xxl-10">
<div class="row">

<div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
<div class="card text-center p-20">
<ul class="actions top-left">
</ul>
<ul class="actions top-right">
</ul>
@if ($photo)
<img src="{{ $photo }}">
<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
->size(4000)->errorCorrection('H')
->generate($lo)) !!} "><div class="card-body p-10">
    
@else
    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
->size(2000)->errorCorrection('H')
->generate($lo)) !!} "><div class="card-body p-10">

@endif

<h5 class="card-title p-t-20 m-b-5">Vista Previa</h5>
<p class="card-text"><span class="text-muted m-r-5">$22.00</span></p>
<button type="button" class="btn btn-primary btn-rounded btn-block btn-floating" data-toggle="modal" data-target=".modal-xl">Descargar QR</button>
</div>
</div>
</div>

<div class="col-md-12 col-lg-6 col-xl-4 col-xxl-4">
    <div class="card text-center p-20">
    <ul class="actions top-left">

    </ul>
    <ul class="actions top-right">
    </ul>
    <div class="card-body p-10">
    <h5 class="card-title p-t-20 m-b-5">Direccion URL</h5>
    <input type="text" class="form-control input-rounded" placeholder="Ingresa el link o URL"/>
    <br>
    <button type="button" class="btn btn-primary btn-rounded btn-block btn-floating" data-toggle="modal" data-target=".modal-xl">Generar QR</button>
    </div>
    </div>
    </div>

    

</div>
</div>
</div>

    
       
</div>
