<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
     public $timestamps = false;
     protected $fillable = ['id','nombre','precio'];
}
