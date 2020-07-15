<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    protected $fillable=['user_id','title','complain'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return  $this->hasMany('App\comments');
    }
}
