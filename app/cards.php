<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cards extends Model
{
     //table name
     protected $table='cards';
     //primary key
     public $primarykey='id';
     //time stamp
     public $timestamps=true;
}
