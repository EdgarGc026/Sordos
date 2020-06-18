<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/exams', 'ExamController');
Route::get('/exams/{id}/confirmDelete', 'ExamController@confirmDelete');
Route::get('exams/{exam}', 'ExamController@show');

Route::resource('/questions', 'QuestionController');
Route::get('/exams/{exam}/questions/create', 'QuestionController@create');
Route::post('/exams/{exam}/questions', 'QuestionController@store');


Auth::routes();

Route::get('/',  function (){
    return view('welcome');
});

// Controladores para Exam, las rutas y lo que hace cada una
Route::get('/home', 'HomeController@index')->name('home');