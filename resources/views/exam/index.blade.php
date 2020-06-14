<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Index de los Examanes</title>

    
</head>
<body>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-12">
            <div class="card">
                <div class="card-header">Crear Examen
                    <a href="/exams/create" class="btn btn-primary btn-sm float-right">Crear Nuevo Examen</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Codigo</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach ($exam as $exam)
                            <tr>
                                <td>{{$exam->title}}</td>
                                <td>{{$exam->description}}</td>
                                <td>{{$exam->code}}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm">Agregar preguntas</a>
                                </td>
                                <td>
                                    <a href="/exams/{{$exam->id}}/edit" class="btn btn-warning btn-sm">Editar datos examen</a>
                                 </td>
                                <td>
                                    <a href="/exams/{{$exam->id}}/confirmDelete" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                                                    
                        </tbody>
                    </table>
                    
                    
                  
                </div>
            </div>
        </div>
    </div>
</div>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>