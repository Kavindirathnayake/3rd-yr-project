<?php

namespace App\Http\Controllers;
use App\Contact;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id= auth()->user()->id;
        $data = DB::table('contacts')->where ('user_id','=',$id)->get()->first();;
         
        $comments = Comment::latest('created_at')->get();
        return view('home', ['comments' => $comments],compact('data'));
    }
}
