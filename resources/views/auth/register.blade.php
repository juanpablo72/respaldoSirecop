@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombres" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombres" placeholder="Inserta tu nombre" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" required autocomplete="nombres" autofocus>

                                @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellidos" placeholder="Inserta tu apellido" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>

                                @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="cedula" class="col-md-4 col-form-label text-md-end">{{ __('Cedula') }}</label>


                            <div class="col-md-6">
                                <input id="cedula" placeholder="Inserta tu c??dula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus>

                                @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electr??nico') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Inserta tu email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input id="role" type="hidden"  name="rol" value="USER" required autocomplete="USER">

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contrase??a') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Inserta tu contrase??a" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contrase??a') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirma tu contrase??a" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">{{ __('Departamento') }}</label>

                            <div class="col-md-6">
                                <select id='rol' name = 'rol' class="form-select" aria-label="Default select example">
                                    <option selected>Seleccionar departamento</option>
                                    <option value="secretaria">Archivo</option>
                                    <option value="biblioteca">Biblioteca</option>
                                    <option value="USER_pasantias">Pasant??as</option>
                                    <option value="USER_serviciocom">Servicio Comunitario</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row  mt-4">

        <div class="col-md-6 quote-box bg-quote2  offset-md-3 d-flex">
            <img src="{{asset('images/miranda.png')}}" alt="" srcset="">
            <p>
                <q>El verdadero car??cter de un patriota consiste en ser obediente a las 
                    leyes de su pa??s y miembro ??til de la sociedad a la que pertenece</q>
                
                -- Francisco de Miranda</p>

        </div>
      
      
    </div>

</div>
@endsection
