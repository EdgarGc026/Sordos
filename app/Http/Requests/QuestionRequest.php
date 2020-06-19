<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    public function rules(){
        return [
            'question.description' => 'required',
            'question.iframe' => 'required',
            'answers.*.description' => 'required',
            'answers.*.iframe' => 'required',
        ];
    }

    public function messages(){
        return[
            'question.description.required' => 'Debes agregar una descripcion al campo Descripcion.',
            'question.iframe.required' => 'Debes agregar el link del video al campo Video Asociado.',
            'answers.*.description.required' => 'Debes agregar una respuesta en el campo Respuesta',
            'answers.*.iframe.required' => 'Debes agregar un video en el campo Video Asociado'
        ];
    }
}
