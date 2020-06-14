<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Eliminar el examen</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span>Eliminar examen: {{$exam->title}}</span>
                        <a href="/exams/" class="btn btn-secondary btn-sm float-right">Regresar</a>
                    </div>
                        <div class="card-body">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <h6>Por favor, verifica que los campos esten llenos</h6>
                                </div>
                            @endif

                            <form action="/exams/{{$exam->id}}" method="POST">
                                @Csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger">Eliminar examen</button>
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

