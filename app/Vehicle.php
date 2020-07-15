<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['class', 'make', 'number','color','enumber','description','image'];
}
