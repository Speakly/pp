<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
