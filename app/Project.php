<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function student()
    {
        return $this->hasOne('App\Student');
    }
}
