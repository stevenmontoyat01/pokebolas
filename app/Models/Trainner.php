<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainner extends Model
{   
    protected $fillable = ['name','avatar','descrition','slug'];    
    use HasFactory;

}
