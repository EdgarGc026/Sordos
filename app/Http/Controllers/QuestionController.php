<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;
use App\Question;

use function GuzzleHttp\Promise\all;

class QuestionController extends Controller{
    
    public function create(Exam $exam){

        return view('question.create', compact(['exam']));
    }
    
    public function store(Exam $exam, QuestionRequest $request){
        
        // dd(request()->all());
        
        $data = request()->validate([
            'question.description' => 'required',
            'question.iframe' => 'required',
            'answers.*.description' => 'required',
            'answers.*.iframe' => 'required',

        ]);

        // dd($data);

        $question = $exam->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);
         
        return redirect('/exams/'. $exam->id);
    }
}
        /* if(request()->file('image')){
            dd(request()->$data['image']);

            request()->validate([
                'question.image' => 'file|image|max:5000',
            ]);
        } */