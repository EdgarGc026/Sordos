@extends('layouts.app')


@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <div class="breadcrumb-main mt-1">
                        
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb cyan lighten-4">
                            <li class="breadcrumb-item">
                                <a class="black-text" href="#">Home</a>
                                <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                            </li>
        
                            <li class="breadcrumb-item"><a class="black-text" href="#">Exam</a>
                                <i class="fas fa-angle-double-right mx-2" aria-hidden="true"></i>
                            </li>
        
                            <li class="breadcrumb-item active">View as</li>
                            <li class="breadcrumb-item d-flex justify-content-between">
                                <button id="btn-left" class="btn btn-secondary btn-sm mr-2">back</button>
                                <button id="btn-center" class="btn btn-primary btn-sm mr-2"> question 1 of 25 </button>
                                <button id="btn-right" class="btn btn-secondary btn-sm mr-2">next</button>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="card mb-4 border-0">
                <div class="card-header text-center" style="background: #FFF; font-size: 17px;">:{{$exam->title}}
                    <a href="/exams/" class="btn btn-secondary btn-sm float-right" onclick="return confirm('Tus datos se perderan ¿Deseas regresar a la pagina principal?')">Regresar</a>
                </div>

                <div class="card-body d-flex justify-content-between">
                    <a href="/exams/{{$exam->id}}/questions/create" class="btn btn-dark" title="Agregar nueva pregunta">Agregar nueva pregunta</a>
                    <a href="" class="btn btn-warning">Editar Preguntas</a>
                    <a href="" class="btn btn-danger ">Eliminar Preguntas</a>
                </div>
            </div>

        @foreach ($exam->questions as $question)
            <div class="card border">
                <div class="card-body text-justify">{{$question->id}}.-  ¿{{$question->description}}</div>
            </div>
        @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="row">

                <div class="col-3"></div>

                <div class="col-6">
                    @foreach ($exam->questions as $question)
                    <div class="card mt-1">
                        <div class="card-body">
                            <div class="embed embed-responsive embed-responsive-16by9">
                                {{!! $question->iframe !!}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-2">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    {{-- Aqui debe ir un foreach --}}
                    <div class="card">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-7">
                                <div class="form-check form-check form-check-inline mb-1 ml-1">
                                    <input class="form-check" id="OpcionD" name="OpcionA" value="" type="radio">
                                    <label class="form-check-label ml-1" for="OpcionD">Answer A</label>
                                </div>
                                <div class="embed embed-responsive embed-responsive-1by1 mt-1">
                                    {{-- Aqui debe ir el iframe desde un foreach --}}
                                </div>
                            </div>

                            <div class="col col-5 text-center">
                               {{-- Aqui debe ir la imagen desde un foreach --}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-7">
                                <div class="form-check form-check form-check-inline mb-1 ml-1">
                                    <input class="form-check" id="OpcionD" name="OpcionA" value="" type="radio">
                                    <label class="form-check-label ml-1" for="OpcionD">Answer A</label>
                                </div>

                                <div class="embed embed-responsive embed-responsive-1by1 mt-1">
                                    {{-- Aqui va un foreach para obtener el iframe --}}
                                </div>
                            </div>

                            <div class="col-5 text-center">
                                {{-- Aqui va un foreache para obtener la image, esta es opcional --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-2">
        <div class="col-12">
            <div class="row">
                <div class="col-6">
                    {{-- Aqui debe ir un foreach --}}
                    <div class="card">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-7">
                                <div class="form-check form-check form-check-inline mb-1 ml-1">
                                    <input class="form-check" id="OpcionD" name="OpcionA" value="" type="radio">
                                    <label class="form-check-label ml-1" for="OpcionD">Answer A</label>
                                </div>
                                <div class="embed embed-responsive embed-responsive-1by1 mt-1">
                                    {{-- Aqui debe ir el iframe desde un foreach --}}
                                </div>
                            </div>

                            <div class="col col-5 text-center">
                               {{-- Aqui debe ir la imagen desde un foreach --}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-7">
                                <div class="form-check form-check form-check-inline mb-1 ml-1">
                                    <input class="form-check" id="OpcionD" name="OpcionA" value="" type="radio">
                                    <label class="form-check-label ml-1" for="OpcionD">Answer A</label>
                                </div>

                                <div class="embed embed-responsive embed-responsive-1by1 mt-1">
                                    {{-- Aqui va un foreach para obtener el iframe --}}
                                </div>
                            </div>

                            <div class="col-5 text-center">
                                {{-- Aqui va un foreache para obtener la image, esta es opcional --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
