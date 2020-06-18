@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span>Crear nueva pregunta</span>
                        <a href="/exams/" class="btn btn-secondary btn-sm float-right" onclick="return confirm('Tus datos se perderan ¿Deseas regresar a la pagina principal?')">Regresar</a>
                    </div>
                        <div class="card-body">
                            {{-- @if($errors->any())
                                <div class="alert alert-danger">
                                    <h6>Por favor, verifica que los campos esten llenos</h6>
                                </div>
                            @endif --}}

                            <form action="/exams/{{ $exam->id }}/questions" method="POST">
                                @CSRF

                                <input hidden name="user_id" value="{{ auth()->user()->id }}">
                                <div class="form-group">

                                    <label for="description">Descripcion de la pregunta *</label>
                                    <input name="question[description]" type="text" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Inserte la pregunta">
                                    <small id="descriptionHelp" class="form-text text-muted">Escribe la descripcion de la pregunta.</small>
                                
                                   
                                    {{-- @if($errors->has('description.question'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('description.question') }}
                                        </div>
                                    @endif --}}
                                </div>

                                {{-- <div class="form-group">
                                    <label for="iframe">Video asociado *</label>
                                    <textarea name="iframe[question]" type="text" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video"  value="{{ old('iframe') }}" required></textarea>
                                    <small id="iframeHelp" class="form-text text-muted">Inserta la url del video.</small>
                                    
                                    @if($errors->has('iframe.question'))
                                        <div class="alert alert-danger">
                                            {{  $errors->first('iframe.question') }}
                                        </div>
                                    @endif
                                </div> --}}

                                {{-- <div class="form-group">
                                    <label for="image">Imagen asociada</label>
                                    <br>
                                    <input name="image[question]" type="file">
                                    <small id="imageHelp" class="form-text text-muted">Ingresa una imagen si deseas que acompañe la pregunta.</small>
                                    
                                    @if($errors->has('image.question'))
                                        <div class="alert alert-danger">
                                            {{  $errors->first('image.question') }}
                                        </div>
                                    @endif
                                </div> --}}
                                <hr>
                                
                                <div class="form-group">
                                    {{-- <fieldset> --}}
                                        <legend>Respuestas</legend>
                                        <span id="choiceHelp" class="form-text text-muted">Por favor ingresa las posibles respuestas.</span>
                                        <br>
                                        
                                        <div class="form-group">
                                            
                                            <div class="form-group">
                                                <label for="option1" style="font-size: 17px;">Opcion A</label>
                                                <input name="answers[][description]" type="text" class="form-control" id="option1" aria-describedby="optionHelp" placeholder="Inserte la primera respuesta" >{{-- value="{{ old('answers.0.description') }}" --}}
                                                
                                            </div>

                                           {{--  <div class="form-group">
                                                <label for="iframe">Video asociado *</label>
                                                <textarea name="iframe[question]" type="text" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video"  value="{{ old('iframe') }}" required></textarea>
                                                
                                            </div>

                                            <div class="form-group">
                                                <input name="image[question]" type="file">
                                                
                                            </div> --}}
                                        </div> 
                                        
                                        <hr><br>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="option2" style="font-size: 17px;">Opcion B</label>
                                                <input name="answers[][description]" type="text" class="form-control" id="option2" aria-describedby="optionHelp" placeholder="Inserte la segunda respuesta" > {{-- value="{{ old('answers.1.description') }}" --}}
                                                
                                            </div>

                                           {{--  <div class="form-group">
                                                <label for="iframe">Video asociado *</label>
                                                <textarea name="iframe[question]" type="text" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video"  value="{{ old('iframe') }}" required></textarea>
                                                
                                            </div>

                                            <div class="form-group">
                                                <input name="image[question]" type="file">
                                                
                                            </div> --}}
                                        </div>

                                        <hr><br>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="" style="font-size: 17px;">Opcion C</label>
                                                <input name="answers[][description]" type="text" class="form-control" id="option3" aria-describedby="optionHelp" placeholder="Inserte la tercera respuesta" >{{-- value="{{ old('answers.2.description') }}" --}}
                                                
                                            </div>

                                            {{-- <div class="form-group">
                                                <label for="iframe">Video asociado *</label>
                                                <textarea name="iframe[question]" type="text" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video"  value="{{ old('iframe') }}" required></textarea>
                                                
                                            </div>

                                            <div class="form-group">
                                                <input name="image[question]" type="file">
                                                
                                            </div> --}}
                                        </div>

                                        <hr><br>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="" style="font-size: 17px;">Opcion D</label>
                                                <input name="answers[][description]" type="text" class="form-control" id="option4" aria-describedby="optionHelp" placeholder="Inserte la cuarta respuesta" >{{-- value="{{ old('answers.3.description') }}" --}}
                                                
                                            </div>
{{-- 
                                            <div class="form-group">
                                                <label for="iframe">Video asociado *</label>
                                                <textarea name="iframe[question]" type="text" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video"  value="{{ old('iframe') }}" required></textarea>
                                            
                                            </div>

                                            <div class="form-group">
                                                <input name="image[question]" type="file">
                                            </div> --}}
                                        </div>
                                        <hr><br>

                                    {{-- </fieldset> --}}
                                </div>

                                
                                {{-- @csrf --}}
                                    <button type="submit" class="btn btn-primary">Agregar pregunta</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
