<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $table = 'students';

    protected $fillable = ['studentNo','name'];

}
