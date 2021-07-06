<div>
   


    <div class="modal fade" id="modalformulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalFixedHeightTitle" aria-hidden="true" data-modal="scroll">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalFixedHeightTitle">Creando Nuevo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="zmdi zmdi-close"></span>
                    </button>
                </div>
                <form wire:submit.prevent="save">
                <div class="modal-body">
                  
                    <div class="card">
                       
                        <div class="card-body">
                           
                            <div class="file-upload">
                                <label for="upload" class="btn btn-primary m-b-0 m-l-5 m-r-5">Subir foto</label>
                                <input id="upload" class="file-upload__input" type="file" wire:model="photo">
                            </div>
                            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                            <button type="submit" class="btn bt-success">Guardar</button>
                                </div>
                    </div>
                

                </div>
                
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary  btn-rounded btn-outline" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success btn-rounded">Guardar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
   
</div>
