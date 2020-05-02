<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz_survey extends Model
{
    protected $table = 'Quiz_survey';
    protected $fillable=['question_id','answer','studentNo'];
 
     public function questions()
     {
         return $this->belongsTo(survey_questions::class);
     }
    
}
