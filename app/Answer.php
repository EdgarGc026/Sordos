<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model{    
    protected $fillable = [
        'description', 'iframe', 'question_id'
    ];

    protected $guarded = [];

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
