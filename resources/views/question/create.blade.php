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
                           @if($errors->any())
                                <div class="alert alert-danger">
                                    <h6>Por favor, verifica que los campos esten llenos</h6>
                                </div>
                            @endif

                            <form action="/exams/{{ $exam->id }}/questions" method="POST"  enctype="multipart/form-data">
                                @CSRF

                                {{-- <input hidden name="user_id" value="{{ auth()->user()->id }}"> --}}
                                <div class="form-group">

                                    <label for="description">Descripcion de la pregunta *</label>
                                    <textarea name="question[description]" type="text" class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Inserte la pregunta">{{ old('question.description') }}</textarea>
                                    <small id="descriptionHelp" class="form-text text-muted">Escribe la descripcion de la pregunta.</small>
                                
                                   
                                    @if($errors->has('question.description'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('question.description') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="iframe">Video asociado *</label>
                                    <textarea name="question[iframe]" type="text" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video">{{ old('question.iframe') }}</textarea>
                                    <small id="iframeHelp" class="form-text text-muted">Inserta la url del video.</small>
                                    
                                    @if($errors->has('question.iframe'))
                                        <div class="alert alert-danger">
                                            {{  $errors->first('question.iframe') }}
                                        </div>
                                    @endif
                                </div>

                                {{-- <div class="form-group d-flex flex-column">
                                    <label for="image">Imagen asociada</label>
                                    <input name="question[image]" type="file" class="py-2">
                                </div> --}}
                                <hr>
                                
                                <legend>Respuestas</legend>
                                        <span id="choiceHelp" class="form-text text-muted">Por favor ingresa las posibles respuestas.</span>
                                        <br>
                                        
                                        <div class="form-group">
                                            
                                            <div class="form-group">
                                                <label for="option1" style="font-size: 17px;">Opcion A</label>
                                                <textarea name="answers[0][description]" type="text" class="form-control" id="option1" aria-describedby="optionHelp" placeholder="Inserte la primera respuesta">{{ old('answers.0.description') }}</textarea>
                                            </div>

                                            @if($errors->has('answers.0.description'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('answers.0.description') }}
                                                </div>
                                            @endif

                                           <div class="form-group">
                                                <label for="iframe">Video asociado *</label>
                                                <textarea name="answers[0][iframe]" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video" >{{ old('answers.0.iframe') }}</textarea>
                                            </div>

                                            @if($errors->has('answers.0.iframe'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('answers.0.iframe') }}
                                                </div>
                                            @endif

                                        {{--<div class="form-group">
                                                <input name="image[question]" type="file">
                                                
                                            </div> --}}
                                        </div> 
                                        
                                        <hr><br>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="option2" style="font-size: 17px;">Opcion B</label>
                                                <textarea name="answers[1][description]" type="text" class="form-control" id="option2" aria-describedby="optionHelp" placeholder="Inserte la segunda respuesta" >{{ old('answers.1.description') }}</textarea>
                                            
                                            @if($errors->has('answers.1.description'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('answers.1.description') }}
                                                </div>
                                            @endif
                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="iframe">Video asociado *</label>
                                            <textarea name="answers[1][iframe]" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video">{{ old('answers.1.iframe') }}</textarea>
                                                
                                            @if($errors->has('answers.1.description'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('answers.1.iframe') }}
                                                </div>
                                            @endif
                                            </div>
                                        
                                        {{-- <div class="form-group">
                                                <input name="image[question]" type="file">
                                                
                                            </div>  --}}                                       
                                        </div>

                                        <hr><br>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="" style="font-size: 17px;">Opcion C</label>
                                                <textarea name="answers[2][description]" type="text" class="form-control" id="option3" aria-describedby="optionHelp" placeholder="Inserte la tercera respuesta">{{ old('answers.2.description') }}</textarea>
                                                
                                            @if($errors->has('answers.2.description'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('answers.2.description') }}
                                                </div>
                                            @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="iframe">Video asociado *</label>
                                                <textarea name="answers[2][iframe]" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video">{{ old('answers.2.iframe') }}</textarea>
                                            
                                            @if($errors->has('answers.2.iframe'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('answers.2.iframe') }}
                                                </div>
                                            @endif
                                            </div>

                                    {{--    <div class="form-group">
                                                <input name="image[question]" type="file">
                                            </div> --}}
                                        </div>

                                        <hr><br>

                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="" style="font-size: 17px;">Opcion D</label>
                                                <textarea name="answers[3][description]" type="text" class="form-control" id="option4" aria-describedby="optionHelp" placeholder="Inserte la cuarta respuesta">{{ old('answers.3.description') }}</textarea>
                                                
                                            @if($errors->has('answers.3.description'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('answers.3.description') }}
                                                </div>
                                            @endif
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="iframe">Video asociado *</label>
                                                <textarea name="answers[3][iframe]" class="form-control" id="iframe" aria-describedby="iframeHelp" placeholder="Inserte la URL del video">{{ old('answers.3.iframe') }}</textarea>
                                            
                                            @if($errors->has('answers.3.iframe'))
                                                <div class="alert alert-danger">
                                                    {{ $errors->first('answers.3.iframe') }}
                                                </div>
                                            @endif
                                            </div>

                                            {{--  <div class="form-group">
                                                <input name="image[question]" type="file">
                                            </div> --}}
                                        </div>
                                    <hr><br>
                                <button type="submit" class="btn btn-primary">Agregar pregunta</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
