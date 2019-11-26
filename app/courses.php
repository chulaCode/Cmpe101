<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    //
    public function enrol()
    {
        return $this->hasOne(enrol::class);
    }
}
