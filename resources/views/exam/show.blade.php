@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card mb-4">
                <div class="card-header">Mostrando: {{$exam->title}}
                    <a href="/exams/" class="btn btn-secondary btn-sm float-right" onclick="return confirm('Tus datos se perderan ¿Deseas regresar a la pagina principal?')">Regresar</a>
                </div>

                <div class="card-body d-flex justify-content-between">
                    <a href="/exams/{{$exam->id}}/questions/create" class="btn btn-dark" title="Agregar nueva pregunta">Agregar nueva pregunta</a>
                    <a href="" class="btn btn-warning">Editar Preguntas</a>
                    <a href="" class="btn btn-danger ">Eliminar Preguntas</a>
                </div>
            </div>

            @foreach ($exam->questions as $question)
                <div class="card">
                    <div class="card-header">{{$question->description}}</div>

                    <div class="card-body">
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection