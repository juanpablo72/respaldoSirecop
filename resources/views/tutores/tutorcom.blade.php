@extends('layouts.app')

@section('content')
<div class="container">
        @if ($message)
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Notificación') }}</div>

                    <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                Registro Incorrecto, vuelve a intentarlo
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar proyecto de pasantias') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tutorcom.create') }}" enctype="multipart/form-data" >
                    @csrf

                        <h3>Tutor Comunitario</h3>
                        <div class="row mb-3">
                            <label for="nombres" class="col-md-4 col-form-label text-md-end">{{ __('Nombres') }}</label>

                            
                            <div class="col-md-6">
                                <input id="nombres" name="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror"   autofocus>

                                @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="apellidos" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

                            
                            <div class="col-md-6">
                                <input id="apellidos" name="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror"   autofocus>

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
                                <input id="cedula" name="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror"   autofocus>

                                @error('cedula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>
                            <div class="col-md-6">
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"   autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>
                            <div class="col-md-6">
                                <input id="telefono" name="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror"   autofocus>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="condicion" class="col-md-4 col-form-label text-md-end">{{ __('Condicion') }}</label>
                            <div class="col-md-6">
                                <input id="telefono" name="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror"   autofocus>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Agregar proyecto') }}
                                    </button>
                                </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection