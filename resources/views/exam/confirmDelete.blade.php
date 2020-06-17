@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-12">
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

                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿En verdad deseas eliminarlo?')">Eliminar examen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

