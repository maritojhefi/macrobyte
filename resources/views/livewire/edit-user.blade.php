<div>
    <div class="card mt-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-lg-2">
                    <div class="nav flex-column nav-pills" id="my-account-tabs" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="card-empresa-tab" data-toggle="pill" href="#card-empresa" role="tab" aria-controls="card-empresa" aria-selected="true">Perfil</a>
                        <a class="nav-link" id="card-pago-tab" data-toggle="pill" href="#card-pago" role="tab" aria-controls="card-pago" aria-selected="false">Informacion de Pago</a>
                        <a class="nav-link" id="card-perfil-tab" data-toggle="pill" href="#card-perfil" role="tab" aria-controls="card-perfil" aria-selected="false">Mi perfil</a>

                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="tab-content" id="my-account-tabsContent">
                        <div class="tab-pane fade show active" id="card-empresa" role="tabpanel" aria-labelledby="card-empresa-tab">
                            @include('empresa.partial-empresa')
                        </div>
                        <div class="tab-pane fade" id="card-pago" role="tabpanel" aria-labelledby="card-pago-tab">
                            @include('empresa.partial-pago')
                            </div>
                            <div class="tab-pane fade" id="card-perfil" role="tabpanel" aria-labelledby="card-perfil-tab">
                                @include('empresa.partial-perfil')
                            </div>  
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
