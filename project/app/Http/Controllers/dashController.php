<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Contact;
use DB;
use App\Http\Controllers\ContactController;
class dashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contacts = Contact::all();

        return view('RegisterStudent', compact('contacts'));
        // $contacts=DB::select('select * from contacts') ;
        // return view('RegisterStudent',['contacts'=>$contacts]);
         //
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student');   //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'NIC'=>'required'
        ]);
        if (Auth::check()) {
        $contact = new Contact([
            'user_id'=> Auth::user()->id,
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => Auth::user()->email, 
            'date_of_birth'=> $request->get('date_of_birth'),
            'age'=> $request->get('age'),
            'phoneno' => $request->get('phoneno'),
            'address' => $request->get('address'),
            'NIC' => $request->get('NIC'),
            'gender'=> $request->get('gender'),
            'freeDay'=> $request->get('freeDay'),
            'license'=> $request->get('license')
        ]);
        $contact->save();
        return redirect('/contacts')->with('success', 'Contact saved!');  //
    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {$contact = Contact::find($user_id);
        return view('edit', compact('contact'));  
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'NIC'=>'required'
        ]);
        $contact = Contact::find($user_id);
            $contact->first_name = $request->get('first_name');
            $contact->last_name =$request->get('last_name');
            $contact->email = $request->get('email');  
            $contact->date_of_birth= $request->get('date_of_birth');
            $contact->age= $request->get('age');
            $contact->phoneno = $request->get('phoneno');
            $contact->address = $request->get('address');
            $contact->NIC = $request->get('NIC');
            $contact->gender= $request->get('gender');
            $contact->freeDay= $request->get('freeDay');
            $contact->license= $request->get('license');
         
        $contact->save();
        return redirect('/admin')->with('success', 'Contact updated !');  //  //
      //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $user_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $contact = Contact::find($user_id);
        $contact->delete();

        return redirect('/admin')->with('success', 'Contact deleted!');  //
    }
}

     