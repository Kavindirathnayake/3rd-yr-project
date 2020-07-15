<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\cards;

class cardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card=cards::all();
        return view('event_card/index')->with('card',$card);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event_card/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'category' => 'required' ,
             'price'=>'required',
            'description' => 'required', 
            //'picture'=>'image|nullable|max:1999'
            'image'=>'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
          ]);

          //handle file upload
          if($request->hasFile('image')){
            //get filename with extension
             $fileNamewithExt=$request->file('image')->getClientOriginalName();
            //get just filename
             $fileName= pathinfo( $fileNamewithExt, PATHINFO_FILENAME);
            //get just ext
             $extension=$request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNametostore=$fileName.'_'.time().'.'. $extension;
            //upload image
            $path=$request->file('image')->storeAs('public/cards', $fileNametostore);
   
             }
    

          $card=new cards;
          $card->category=$request->input('category');
          $card->price=$request->input('price');
          $card->description=$request->input('description');
          $card->image=$fileNametostore;
          $card->save();
         
        return redirect('/cards');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card=cards::find($id);
        return view('event_card/show')->with('card',$card);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card=cards::find($id);
        return view('event_card/edit')->with('card',$card);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'category' => 'required' ,
             'price'=>'required',
            'description' => 'required', 
            //'picture'=>'image|nullable|max:1999'
            'image'=>'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
          ]);

          //handle file upload
          if($request->hasFile('image')){
            //get filename with extension
             $fileNamewithExt=$request->file('image')->getClientOriginalName();
            //get just filename
             $fileName= pathinfo( $fileNamewithExt, PATHINFO_FILENAME);
            //get just ext
             $extension=$request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNametostore=$fileName.'_'.time().'.'. $extension;
            //upload image
            $path=$request->file('image')->storeAs('public/cards', $fileNametostore);
   
             }
    

          $card= cards::find($id);
          $card->category=$request->input('category');
          $card->price=$request->input('price');
          $card->description=$request->input('description');
          if($request->hasFile('image')){
            $card->image=$fileNametostore;
          }
          $card->save();
         
        return redirect('/cards');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card=cards::find($id);
        Storage::delete('public/cards/'.$card->image);
        $card->delete();
        return redirect('/cards');
    }
}
