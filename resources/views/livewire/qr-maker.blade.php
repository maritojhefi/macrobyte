<div>

    <div class="row">
        @isset($url)
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
                <div class="card-header">Tamaño QR</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="range" class="custom-range" min="100" max="500" step="50" id="customRange3" wire:model="tamano">
                        </div>
                        
                    </div>

                </div>
                <div class="card-header"><div class="row"><div class="col-9">Tamaño imagen</div>  <div class="col-3"><input type="checkbox" wire:model="imagenActiva" class="form-control"></div></div></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="range" class="custom-range" min="1" max="3" step="1" id="customRange3" wire:model="tamanoImagen">
                        </div>
                        
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-header">Subir imagen</div>
                <div class="card-body">


                </div>
            </div>


        </div>  
        @endisset
        



        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-9 col-xxl-10">
            <div class="row">

                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="card text-center p-20">
                        <ul class="actions top-left">
                        </ul>
                        <ul class="actions top-right">
                        </ul>
                        @if ($imagenActiva)
                        <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->mergeString(Storage::disk('assets')->get('dota.png'),'.'.$tamanoImagen)->size($tamano)->generate($url))}}" alt="">
                        @else
                        <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size($tamano)->generate($url))}}" alt="">

                        @endif
                            
                        
                        <h5 class="card-title p-t-20 m-b-5">Vista Previa</h5>
                        <p class="card-text"><span class="text-muted m-r-5">{{$url}}</span></p>
                        <button type="button" class="btn btn-primary btn-rounded btn-block btn-floating" wire:click="descargarQR"
                            data-toggle="modal" data-target=".modal-xl">Descargar QR</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="card text-center p-20">
                        <ul class="actions top-left">
    
                        </ul>
                        <ul class="actions top-right">
                        </ul>
                        <div class="card-body p-10">
                            <h5 class="card-title p-t-20 m-b-5">Direccion URL</h5>
                            <input type="text" class="form-control input-rounded" wire:model.defer="url" 
                                placeholder="Ingresa el link o URL" />
                            <br>
                            <button type="button" wire:click="urlLista" class="btn btn-primary btn-rounded btn-block btn-floating"
                                data-toggle="modal" data-target=".modal-xl">Generar QR</button>
                        </div>
                    </div>
                </div>
            </div>

           



        </div>
    </div>
</div>



</div>
