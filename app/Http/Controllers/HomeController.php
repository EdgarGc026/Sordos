<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $namedebug = 'Si aparece esto, funciona';
        return view('home');
    }
}

