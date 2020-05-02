<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class counts extends Model
{
    
    protected $table = 'counts';

    protected $fillable = ['user_id','right','wrong','attempts','values'];

    public function student()
    {
        return $this->belongsTo(students::class);
    }
}
