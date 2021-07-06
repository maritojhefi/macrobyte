<div>
    <div class="modal fade" id="modaleliminar{{$productId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Desea eliminar a: {{$this->product->nombre}}?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="zmdi zmdi-close"></span>
                    </button>
                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-rounded btn-outline" data-dismiss="modal">Cancelar</button>
                    <button data-dismiss="modal" wire:click="deleteProduct" class="btn btn-primary btn-rounded">Confirmar</button>
                </div>
                
            </div>
        </div>
    </div>
</div>
