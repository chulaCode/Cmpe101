<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_surveys extends Model
{
    protected $table = 'post_surveys';
    protected $fillable=['question_id','answer','studentNo'];
 
     public function questions()
     {
         return $this->belongsTo(survey_questions::class);
     }
     public function student()
     {
         return $this->belongsTo(students::class);
     }
}
