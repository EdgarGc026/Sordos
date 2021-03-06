<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Http\Requests\StoreExamRequest;

class ExamController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listening of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
         return view('exam.index', [
             'exam' => Exam::all()
         ]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('exam.create');
    }

    /**
     * Store a newly created resource in storege.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(StoreExamRequest $request){
        /*         
        $exam = new Exam;
        $exam->title = $request->get('title');
        $exam->description = $request->get('description');
        $exam->code = $request->get('code'); 
        $exam->save();  
        $user = auth()->user()->exams()->create($exam);
        */
        
         Exam::create($request->all());
         return redirect('/exams');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam){
        

        $exam->load('questions.answers');
        return view('exam.show', compact(['exam']));
    }

    /**
     * Show the form for editing the specified resource
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $exam = Exam::findOrFail($id);

        return view('exam.edit', [
            'exam' => $exam
        ]);
    }

    /**
     * Update the specified resource in storage
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreExamRequest $request, $id){
        
        $exam = Exam::findOrFail($id);
        $exam->title = $request->get('title');
        $exam->description = $request->get('description');
        $exam->code = $request->get('code');
        $exam->save();

        return redirect('/exams');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $exam = Exam::findOrFail($id);
        $exam->delete();

        return redirect('/exams');
    }

    public function confirmDelete($id){
        $exam = Exam::findOrFail($id);
       return view('exam.confirmDelete', [
            'exam' => $exam
       ]);
    }
}
