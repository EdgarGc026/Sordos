@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Creando el examen
                    <a href="/exams/" class="btn btn-secondary btn-sm float-right" onclick="return confirm('Tus datos se perderan ¿Deseas regresar a la pagina principal?')">Regresar</a>
                </div>

                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <h6>Por favor, verifica que los campos esten llenos</h6>
                    </div>
                @endif

                <form action="/exams" method="POST">
                    @CSRF
                
                    <div class="form-group">
                        <label for="title">Titulo del examen</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Inserta el titulo"  value="{{ old('title') }}" required>
                        <small id="titleHelp" class="form-text text-muted">Escribe el nombre que deseas ponerle al examen.</small>
                    
                       
                        @if($errors->has('title'))
                            <div class="alert alert-danger">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                        
                    </div>

                    <div class="form-group">
                        <label for="description">Descripcion del examen</label>
                        <input name="description" type="text" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Inserte la descripcion"  value="{{ old('description') }}" required>
                        <small id="descriptionHelp" class="form-text text-muted">Ingresa la descripcion que deseas ponerle al examen.</small>
                                                            
                        @if($errors->has('description'))
                            <div class="alert alert-danger">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="code">Codigo del examen</label>
                        <input name="code" type="text" class="form-control" id="code" aria-describedby="codeHelp" placeholder="Inserte el codigo"  value="{{ old('code') }}" required>
                        <small id="codeHelp" class="form-text text-muted">Ingresa el codigo que deseas ponerle al examen.</small>
                        
                        @if($errors->has('code'))
                            <div class="alert alert-danger">
                                {{  $errors->first('code') }}
                            </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Crear examen</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection