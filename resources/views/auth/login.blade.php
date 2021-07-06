@extends('asistencia.master')
@section('login')
<div class="container">
    <form class="sign-in-form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card">
            <div class="card-body">
                <a href="{{route('inicio')}}" class="brand text-center d-block m-b-20">
                    <img src="{{asset('images/logounico.png')}}" alt="Macrobyte" style="width: 100px">
                </a>
                <h5 class="sign-in-heading text-center m-b-20">Inicia Sesion</h5>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email"  class="form-control input-rounded @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Email" required="" name="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password"  class="form-control input-rounded @error('password') is-invalid @enderror" placeholder="Contraseña" required="" name="password">
                	@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
               
                <button class="btn btn-primary btn-rounded btn-floating btn-lg btn-block" type="submit">Iniciar Sesion</button>
                <p class="text-muted m-t-25 m-b-0 p-0">No tienes una cuenta?<a href="{{route('register')}}"> Crea una aqui!</a></p>
            </div>

        </div>
    </form>
</div>

@endsection

	