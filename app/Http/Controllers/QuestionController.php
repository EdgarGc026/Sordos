<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;
use App\Question;

use function GuzzleHttp\Promise\all;

class QuestionController extends Controller{
    
    /**
     * Display a listening of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
/*     public function index(){
       
   } */

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(Exam $exam){

        return view('question.create', compact(['exam']));
    }

    /**
     * Store a newly created resource in storege.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Exam $exam){
        //    dd(request()->all());
        $data = request()->validate([
            'question.description' => 'required',
            'answers.*.description' => 'required',
        ]);
        
        // dd($data);
        
        $question = $exam->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);
         
        return redirect('/exams/'. $exam->id);
    }
}
