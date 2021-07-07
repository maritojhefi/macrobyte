<h4 class="card-heading p-b-20">Perfil de Usuario: {{auth()->user()->name}}</h4>
<form wire:submit.prevent="save">
    
    <div class="form-group">
        <label for="inputName">Nombre</label>
        <input wire:model="user.name" type="text" class="form-control" id="inputName" autocomplete="name" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Correo Electronico</label>
        <input type="email" class="form-control" autocomplete="email" id="exampleInputEmail1" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="password" aria-describedby="passwordHelp" placeholder="Password">
        <small id="passwordHelp" class="form-text text-muted">We recommend at least 8 characters long, avoiding patterns and common words/phrases.</small>
    </div>
    <div class="form-group">
        <label for="inputLocation">Contraseña</label>
        <input type="text" class="form-control" id="inputLocation" placeholder="Enter location">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Bio</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success btn-rounded">Actualizar Usuario</button>
    </form>