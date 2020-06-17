<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller{
    
    /**
     * Display a listening of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
       
   }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('question.create');
    }
}
