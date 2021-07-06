@extends('asistencia.master')
@section('login')

    
      <div class="container">
          <form class="sign-in-form" action="{{route('register')}}" method="POST">
            @csrf
              <div class="card">
                  <div class="card-body">
                      <a href="{{route('inicio')}}" class="brand text-center d-block m-b-20">
                        <img src="{{asset('images/logounico.png')}}" alt="Macrobyte" style="width: 100px">
                    </a>
                      <h5 class="sign-in-heading text-center m-b-20">Crea una cuenta</h5>
                      <div class="form-group">
                        <label for="inputEmail" class="sr-only">Your Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror input-rounded" name="name" placeholder="Nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                      </div>
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input-rounded" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                      </div>
                    <div class="form-group">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input-rounded" name="password" placeholder="Contraseña" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                    <div class="form-group">
                        <label for="inputPassword" class="sr-only">Confirm Password</label>
                        <input type="password" id="inputConfirmPassword" class="form-control input-rounded" placeholder="Confirmar contraseña" required="" name="password_confirmation">
                   
                      </div>
                      <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Crear Cuenta</button>
                       <p class="text-muted m-t-25 m-b-0 p-0">Ya tienes una cuenta?<a href="{{route('login')}}"> Inicia Sesion</a></p>
                  </div>
  
              </div>
          </form>
      </div>
 
  
@endsection