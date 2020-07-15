<?php

namespace App\Http\Controllers;

use App\Reqvehicle;
use Illuminate\Http\Request;
use DB;

class ReqvehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = DB::select('select * from admins');
        $vehicle = Reqvehicle::all();
        return view('vehicles.request')->with('admins', $admins)->with('vehicle', $vehicle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.recreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $this->validate($request, [
            'uname' => 'required',
            'email' => 'required',
            'pno' => 'required',
            'class' => 'required',
            'make' => 'required',
            'number' => 'required',
            'usedyears' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product = new Reqvehicle($request->input()) ;
     
         if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $product->image = $fileName ;
        }
        $product->save() ;

    return redirect('/vrequests/create')->with('completed', 'Vehicle has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Reqvehicle::findOrFail($id);
        return view('vehicles.reedit', compact('vehicle'));
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
        // $updateData = $request->validate([
        //     'class' => 'required|max:255',
        //     'make' => 'required|max:255',
        //     'number' => 'required|max:255',
        //     'description' => 'required|max:255',
        // ]);
        // Vehicle::whereId($id)->update($updateData);
        $this->validate($request, [
            'class' => 'required',
            'make' => 'required',
            'number' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // $product = new Product(find($id)) ;
     
         if($file = $request->hasFile('image')) {
            $fileNamewithExt = $request->file('image')->getClientOriginalName();
            $fileNamewithExt = pathinfo($fileNamewithExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNametostore = $fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/images',$fileNametostore);

            // $file = $request->file('product_image') ;
            
            // $fileName = $file->getClientOriginalName() ;
            // $destinationPath = public_path().'/images/' ;
            // $file->move($destinationPath,$fileName);
            // $product->product_image = $fileName ;
        }
        $product = Vehicle::find($id);
        $product->class = $request->input('class');
        $product->make = $request->input('make');
        $product->class = $request->input('number');
        $product->make = $request->input('description');
        if($request->hasFile('image')){
            $product->image = $fileNametostore;
        }
        $product->save() ;
        
        return redirect('/vehicles')->with('completed', 'Vehicle has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Reqvehicle::findOrFail($id);
        $vehicle->delete();

        return redirect('/vrequests')->with('completed', 'Vehicle has been deleted');
    }
}