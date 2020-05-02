<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surveys extends Model
{
    protected $table = 'surveys';
    protected $fillable=['studentNo','question_id','answer'];
 
     public function questions()
     {
         return $this->belongsTo(survey_questions::class);
     }
     
     public function student()
     {
         return $this->belongsTo(students::class);
     }
}
