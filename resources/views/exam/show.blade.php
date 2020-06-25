@extends('layouts.app')


@section('content')
    <div class="container">

        {{-- Creando el breadcrumb --}}
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
        {{-- Fin breadcrumb --}}

        {{-- Contenedor de las preguntas y respuestas --}}
        <div class="container">
            @foreach ($exam->questions as $question)
                @if ($question->id and $question->description)
                    <div class="card">
                        <div class="card-body text-justify">{{$question->id}}.- {{$question->description}}</div>
                     </div>
                @endif
                
                @if ($question->iframe)
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <div class="card mt-1">
                                        <div class="card-body">
                                            <div class="embed embed-responsive embed-responsive-16by9">
                                                {{!! $question->iframe !!}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach   
        </div>      
        

    </div>
@endsection
