@extends('layouts.app')

@section('content')
<div class="container">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Proyecto
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="card-body">
                    <form method="POST" action="{{ route('update_pasantias') }}" enctype="multipart/form-data" >
                    @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Codigo del proyecto') }}</label>

                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control @error('codigo') is-invalid @enderror" name="codigo" value="{{old('codigo', $pasantia->codigo)}}" autofocus>
        
                                @error('codigo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{old('titulo', $pasantia->titulo)}}" autofocus>

                                @error('titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="periodo" class="col-md-4 col-form-label text-md-end">{{ __('Periodo Ac??demico') }}</label>

                            
                            <div class="col-md-6">
                                <input id="periodo" name="periodo" value="{{old('periodo', $pasantia->periodo)}}" type="text" class="form-control @error('periodo') is-invalid @enderror"   autofocus>

                                @error('periodo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                        {{ __('Actualizar proyecto') }}
                                </button>
                            </div>
                        </div>  
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Empresa
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Datos de la Empresa') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('update_empresas') }}" enctype="multipart/form-data" >
                                @csrf
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"  value="{{old('nombre', $empresa->nombre)}}" autofocus>
                    
                                            @error('nombre')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{old('email', $empresa->email)}}" autofocus>
            
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
                                            <input id="telefono" name="telefono" value="{{old('telefono', $empresa->telefono)}}" type="text" class="form-control @error('telefono') is-invalid @enderror"   autofocus>
            
                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="departamento" class="col-md-4 col-form-label text-md-end">{{ __('Departamento') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="departamento" type="text" class="form-control @error('departamento') is-invalid @enderror" name="departamento" value="{{old('departamento', $empresa->departamento)}}">
            
                                            @error('departamento')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Ubicaci??n</h3>
                                    <div class="row mb-3">
                                        <label for="estado" class="col-md-4 col-form-label text-md-end">{{ __('Estados') }}</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Seleccione un estado</option>
                                            <option value="amazonas">Amazonas</option>
                                            <option value="anzoategui">Anzo??tegui</option>
                                            <option value="apure">Apure</option>
                                            <option value="aragua">Aragua</option>
                                            <option value="barinas">Barinas</option>
                                            <option value="bolivar">Bolivar</option>
                                            <option value="carabobo">Carabobo</option>
                                            <option value="cojedes">Cojedes</option>
                                            <option value="delta_amacuro">Delta Amacuro</option>
                                            <option value="distrito_capital">Distrito Capital</option>
                                            <option value="falcon">Falc??n</option>
                                            <option value="guarico">Gu??rico</option>
                                            <option value="lara">Lara</option>
                                            <option value="merida">M??rida</option>
                                            <option value="miranda">Miranda</option>
                                            <option value="monagas">Monagas</option>
                                            <option value="nueva_esparta">Nueva Esparta</option>
                                            <option value="portuguesa">Portuguesa</option>
                                            <option value="sucre">Sucre</option>
                                            <option value="tachira">T??chira</option>
                                            <option value="trujillo">Trujillo</option>
                                            <option value="vargas">Vargas</option>
                                            <option value="yaracuy">Yaracuy</option>
                                            <option value="zulia">Zulia</option>
                                        </select>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="municipio" class="col-md-4 col-form-label text-md-end">{{ __('Municipio') }}</label>
            
                                        
                                        <div class="col-md-6">
                                            <input id="municipio" name="municipio" value="{{old('municipio', $direccion->municipio)}}" type="text" class="form-control @error('municipio') is-invalid @enderror"   autofocus>
            
                                            @error('municipio')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror 
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="parroquia" class="col-md-4 col-form-label text-md-end">{{ __('Parroquia') }}</label>
            
                                        
                                        <div class="col-md-6">
                                            <input id="parroquia" name="parroquia" value="{{old('parroquia', $direccion->parroquia)}}" type="text" class="form-control @error('parroquia') is-invalid @enderror"   autofocus>
            
                                            @error('parroquia')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror 
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Actualizar Empresa') }}
                                                </button>
                                            </div>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Tutor Academico
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Actualizar Tutor Ac??demico') }}</div>
                
                                <div class="card-body">
                                    <form method="POST" action="{{ route('update_tutorac') }}" enctype="multipart/form-data" >
                                    @csrf
                                        <div class="row mb-3">
                                            <label for="nombres" class="col-md-4 col-form-label text-md-end">{{ __('Nombres') }}</label>
                
                                            
                                            <div class="col-md-6">
                                                <input id="nombres" name="nombres" value="{{old('nombres', $tutor->nombres)}}" type="text" class="form-control @error('nombres') is-invalid @enderror"   autofocus>
                
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
                                                <input id="apellidos" name="apellidos" value="{{old('apellidos', $tutor->apellidos)}}" type="text" class="form-control @error('apellidos') is-invalid @enderror"   autofocus>
                
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
                                                <input id="cedula" name="cedula" value="{{old('cedula', $tutor->cedula)}}" type="text" class="form-control @error('cedula') is-invalid @enderror"   autofocus>
                
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
                                                <input id="email" name="email" value="{{old('email', $tutor->email)}}" type="email" class="form-control @error('email') is-invalid @enderror"   autofocus>
                
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
                                                <input id="telefono" name="telefono" value="{{old('telefono', $tutor->telefono)}}" type="text" class="form-control @error('telefono') is-invalid @enderror"   autofocus>
                
                                                @error('telefono')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="condicion" name= 'nombre_especialidad' class="col-md-4 col-form-label text-md-end">{{ __('Condicion') }}</label>
                                            <div class="col-md-6">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Seleccione una condici??n</option>
                                                    <option value="tiempo_variable">Tiempo Variable (TV)</option>
                                                    <option value="medio_tiempo">Medio Tiempo (MT)</option>
                                                    <option value="tiempo_completo">Tiempo Completo (TC)</option>
                                                    <option value="dedicacion_exclusiva">Dedicaci??n Exclusiva (DE)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="especialidad" class="col-md-4 col-form-label text-md-end">{{ __('Especialidad') }}</label>
                                            <div class="col-md-6">
                                                <input id="nombre_especialidad" value="{{old('nomber_especialidad', $especialidad->nombre_especialidad)}}" name="nombre_especialidad" type="text" class="form-control @error('nombre_especialidad') is-invalid @enderror"   autofocus>
                
                                                @error('nombre_especialidad')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Actualizar Tutor') }}
                                                    </button>
                                                </div>
                                        </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Tutor Institucional
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Actualizar Tutor Institucional') }}</div>
                
                                <div class="card-body">
                                    <form method="POST" action="{{ route('update_tutorin') }}" enctype="multipart/form-data" >
                                    @csrf
                
                                        <div class="row mb-3">
                                            <label for="nombres" class="col-md-4 col-form-label text-md-end">{{ __('Nombres') }}</label>
                
                                            
                                            <div class="col-md-6">
                                                <input id="nombres" name="nombres" value= "{{old('nombres', $tutori->nombres)}}" type="text" class="form-control @error('nombres') is-invalid @enderror"   autofocus>
                
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
                                                <input id="apellidos" name="apellidos" value= "{{old('apellidos', $tutori->apellidos)}}" type="text" class="form-control @error('apellidos') is-invalid @enderror"   autofocus>
                
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
                                                <input id="cedula" name="cedula" value= "{{old('cedula', $tutori->cedula)}}" type="text" class="form-control @error('cedula') is-invalid @enderror"   autofocus>
                
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
                                                <input id="email" name="email" value= "{{old('email', $tutori->email)}}" type="email" class="form-control @error('email') is-invalid @enderror"   autofocus>
                
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
                                                <input id="telefono" name="telefono" value= "{{old('telefono', $tutori->telefono)}}" type="text" class="form-control @error('telefono') is-invalid @enderror"   autofocus>
                
                                                @error('telefono')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="nombre_especialidad" class="col-md-4 col-form-label text-md-end">{{ __('Especialidad') }}</label>
                
                                            
                                            <div class="col-md-6">
                                                <input id="nombre_especialidad" name="nombre_especialidad" value= "{{old('nombre_especialidad', $tutori->nombre_especialidad)}}" type="text" class="form-control @error('nombre_especialidad') is-invalid @enderror"   autofocus>
                
                                                @error('nombre_especialidad')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Actualizar Tutor Institucional') }}
                                                    </button>
                                                </div>
                                        </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
          </div>
        </div>
      </div>

@endsection