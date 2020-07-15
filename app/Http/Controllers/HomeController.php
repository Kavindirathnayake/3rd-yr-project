<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admins = DB::select('select * from admins');
        $students = DB::table('users')
                    ->join('students', 'users.id', '=', 'students.id')
                    ->get();
        $trainers = DB::table('users')
                    ->join('trainers', 'users.id', '=', 'trainers.id')
                    ->get();
        
        return view('home')->with('admins', $admins)->with('students',$students)->with('trainers',$trainers);
       
    }
}
