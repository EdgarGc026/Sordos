<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model{

    /**
        * Nota esta es una relacion de 1 a N 
        * 1 usuario puede tener muchos examenes
    */

    protected $guarded = [];

     protected $fillable = [
        'title', 'description', 'code', 'user_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}

