<?php

namespace App\Http\Controllers;
use App\Contact;
use DB;
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudenteditController  extends Controller
{
    public function index()
    {
        $id= auth()->user()->id;
        $data = DB::table('contacts')->where ('user_id','=',$id)->get()->first();; 
        return view('edit',compact('data'));
    } //
}
