<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'date_of_birth',
        'age',
        'phoneno',
        'address',
        'NIC',
        'gender',
        'freeDay',
        'license',
        'image'
    ];
}