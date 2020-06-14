<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Editar datos del examen</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8">
                <div class="card">
                    <div class="card-header">
                        Editar datos examen: {{$exam->title}}
                        <a href="/exams/" class="btn btn-secondary btn-sm float-right" onclick="return confirm('¿Deseas regresar a la pagina principal?')">Regresar</a>
                    </div>
                        <div class="card-body">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <h6>Por favor, verifica que los campos esten llenos</h6>
                                </div>
                            @endif

                            <form action="/exams/{{$exam->id}}" method="POST">
                                @CSRF
                                @method('put')
                                <div class="form-group">
                                    <label for="title">Titulo del examen</label>
                                    <input name="title" type="text" class="form-control" id="title"  placeholder="Inserta el titulo"  value="{{ old('title', $exam->title) }}" required>
                                    <small id="titleHelp" class="form-text text-muted">Escribe el nombre que deseas ponerle al examen.</small>
                                
                                   
                                    @if($errors->has('title'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('title') }}
                                        </div>
                                    @endif
                                    
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripcion del examen</label>
                                    <input name="description" type="text" class="form-control" id="description" placeholder="Inserte la descripcion"  value="{{ old('description', $exam->description) }}" required>
                                    <small id="descriptionHelp" class="form-text text-muted">Ingresa la descripcion que deseas ponerle al examen.</small>
                                                                        
                                    @if($errors->has('description'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                    
                                </div>

                                <div class="form-group">
                                    <label for="code">Codigo del examen</label>
                                    <input name="code" type="text" class="form-control" id="code" aria-describedby="codeHelp" placeholder="Inserte el codigo"  value="{{ old('code', $exam->code) }}">
                                    <small id="codeHelp" class="form-text text-muted">Ingresa el codigo que deseas ponerle al examen.</small>
                                    
                                    @if($errors->has('code'))
                                        <div class="alert alert-danger">
                                            {{ $errors->first('code') }}
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

