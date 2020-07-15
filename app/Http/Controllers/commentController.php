<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;
use App\complain;

class commentController extends Controller
{
    public function store(complain $complain)
    {
        comments::create([
        //model
          
            'reply'=>request('reply'),
            'complain_id'=>$complain->id,
        ]);
        
        return back();
    }
}
