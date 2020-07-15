<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\ materials;

class materialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $material=materials::orderBy('Created_at','asc')->paginate(4);
      // $material=materials::all();
      $material=materials::orderBy('created_at','asc')->paginate(5);
        return view('materials.index')->with('material',$material);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materials.create');
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
            'title' => 'required' ,
            'description' => 'required', 
            //'picture'=>'image|nullable|max:1999'
            'picture'=>'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
          ]);
  

         //handle file upload
          if($request->hasFile('picture')){
         //get filename with extension
          $fileNamewithExt=$request->file('picture')->getClientOriginalName();
         //get just filename
          $fileName= pathinfo( $fileNamewithExt, PATHINFO_FILENAME);
         //get just ext
          $extension=$request->file('picture')->getClientOriginalExtension();
         //filename to store
         $fileNametostore=$fileName.'_'.time().'.'. $extension;
         //upload image
         $path=$request->file('picture')->storeAs('public/uploads', $fileNametostore);

          }

        $material=new materials;
        $material->material_type=$request->input('material_type');
        $material->title=$request->input('title');
        $material->description=$request->input('description');
        $material->picture=$fileNametostore;
        $material->save();
         
        return redirect('/learn');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material=materials::find($id);
        return view('materials.show')->with('material',$material);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material=materials::find($id);
        return view('materials/edit')->with('material', $material);
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
            'title' => 'required' ,
            'description' => 'required' ,
            'picture'=>'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
          ]);

           //handle file upload
           if($request->hasFile('picture')){
            //get filename with extension
             $fileNamewithExt=$request->file('picture')->getClientOriginalName();
            //get just filename
             $fileName= pathinfo( $fileNamewithExt, PATHINFO_FILENAME);
            //get just ext
             $extension=$request->file('picture')->getClientOriginalExtension();
            //filename to store
            $fileNametostore=$fileName.'_'.time().'.'. $extension;
            //upload image
            $path=$request->file('picture')->storeAs('public/uploads', $fileNametostore);
   
             }

          $material=materials::find($id);
          $material->material_type=$request->input('material_type');
          $material->title=$request->input('title');
          $material->description=$request->input('description');
          if($request->hasFile('picture')){
            $material->picture=$fileNametostore;
          }
          $material->save();

          return redirect('/learn');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material=materials::find($id);
        //if($material->picture!='noimage.jpg'){
        Storage::delete('public/uploads/'.$material->picture);
       // }
        $material->delete();
        //$material->save();

        return redirect('/learn');
    }
}
