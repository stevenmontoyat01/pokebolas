<?php

namespace App\Models;

use Hamcrest\Arrays\IsArray;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{   
    public function user(){
        return $this->belongsToMany('App\Models\User');
    }

    use HasFactory;
}
