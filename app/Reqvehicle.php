<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reqvehicle extends Model
{
    protected $fillable = ['uname','email','pno','class', 'make', 'number','usedyears','description','price','image','action'];
}
