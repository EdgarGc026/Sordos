<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'code' => 'required|min:4',
        ];
    }

    public function messages(){
        return [
            
            'title.required' => 'Debes agregar un titulo al campo Titulo.',
            'title.min' => 'El Titulo debe ser mayor a 3 caracteres',

            'description.required' => 'Debes agregar una descripcion al campo Descripcion.',
            'description.min' => 'La Descripcion de ser mayor a 3 caracteres',
            
            'code.required' => 'Debes agregar un codigo al campo Codigo.',
            'code.min' => 'El Codigo debe ser mayor a 4 caracteres',
        ];
    }
}
