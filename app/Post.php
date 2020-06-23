<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Post extends Model
{
    protected function  user(){
        return $this->belongsToMany('App\User');
     }

     protected function admin(){
         return $this->belongsToMany('App\Admin');
     }
}
