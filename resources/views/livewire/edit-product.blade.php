<div>
    <div class="col-md-6 col-sm-12 mt-2">
        <div class="card">
            <h5 class="card-header">Formulario</h5>
            <div class="card-body">
               
                <x-edit-form :variables="(['nombre'=>'text','imagen'=>'text','codigo Barra'=>'text','codigo Producto'=>'textarea', 'imagenes'=>'file'])" :modelo="$producto" />
                   
                </div>
            </div>
        </div>
</div>
