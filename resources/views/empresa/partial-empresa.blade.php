<h4 class="card-heading p-b-20">Perfil de Empresa</h4>
    <form>
        <div class="form-group">
            <img src="{{asset('images/logounico.png')}}" class="w-50 rounded-circle" alt="">
            <div class="file-upload">
                <label for="upload" class="btn btn-primary m-b-0 m-l-5 m-r-5 btn-sm btn-rounded">Subir</label>
                <input id="upload" class="file-upload__input" type="file" name="file-upload">
            </div>
            <button class="btn btn-secondary btn-rounded btn-sm">Eliminar</button>
        </div>
        <div class="form-group">
            <label for="inputName">Nombre Empresa</label>
            <input type="text" class="form-control" id="inputName" autocomplete="name" placeholder="">
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
            <label for="inputLocation">Location</label>
            <input type="text" class="form-control" id="inputLocation" placeholder="Enter location">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Bio</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
