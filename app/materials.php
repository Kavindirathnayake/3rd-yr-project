<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materials extends Model
{
    //table name
    protected $table='materials';
    //primary key
    public $primarykey='id';
    //time stamp
    public $timestamps=true;
}
