<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected function users(){
        return $this->hasMany('App\User');
    }

    protected function posts(){
        return $this->hasMany('App\Post');
    }
}
