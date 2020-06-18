@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mostrando: {{$exam->title}}
                    <a href="/exams/" class="btn btn-secondary btn-sm float-right" onclick="return confirm('Tus datos se perderan ¿Deseas regresar a la pagina principal?')">Regresar</a>
                </div>

                <div class="card-body">
                    <a href="/exams/{{$exam->id}}/questions/create" class="btn btn-dark" title="Agregar nueva pregunta">Agregar nueva pregunta</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection