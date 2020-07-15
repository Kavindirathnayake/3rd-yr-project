<?php

namespace App\Http\Controllers;
use App\Contact;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        
         
        //
    }

    
     
    
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'NIC'=>'required',
            'image'=> 'required'
        ]);
        $user = auth()->user();
         
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'user_id'    => $user->id,
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
             'email'            =>   $user->email,
            'date_of_birth'    =>   $request->date_of_birth,
            'age'     =>   $request->age,
            'phoneno'   =>   $request->phoneno,
            'address'    =>   $request->address,
            'NIC'   =>   $request->NIC,
            'gender'    =>   $request->gender,
            'freeDay'  =>   $request->freeDay,
            'license'   =>   $request->license,
            'image'            =>   $new_name
        );
        Contact::create($form_data);
        return redirect('home')->with('success', 'Contact saved!');
    
     }

    

    
    public function edit($user_id)
    { 
         
        $contact =DB::table('contacts')->where ('user_id','=',$user_id)->get()->first();
        return view('edit', compact('contact'));     
        // $contact = Contact::findOrFail($user_id);
        // return view('edit', compact('contact'));   
            
    }

     
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'image'         =>  'required'
            ]);
        }

        $form_data = array(
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'image'            =>   $image_name,
            'freeDay' =>  $request->freeDay,
            'license'   => $request->license 
        ); 
  
        Contact::whereUser_id($id)->update($form_data);

        return redirect('home')->with('success', 'Data is successfully updated');
    }

    
    public function destroy($user_id)
    {
        // $contact = Contact::find($user_id);
        // $contact->delete();
        DB::table('contacts')->where ('user_id','=',$user_id)->delete();

        return redirect('/admin')->with('success', 'Contact deleted!');  //
    }
}
