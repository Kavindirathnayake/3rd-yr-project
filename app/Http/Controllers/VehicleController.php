<?php

namespace App\Http\Controllers;
use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vehicle::latest()->paginate(5);
        return view('vehicles.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicles.create');
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
            'class'    =>  'required',
            'make'     =>  'required',
            'number'    =>  'required',
            'color'     =>  'required',
            'enumber'    =>  'required',
            'description'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'class'       =>   $request->class,
            'make'        =>   $request->make,
            'number'       =>   $request->number,
            'color'        =>   $request->color,
            'enumber'       =>   $request->enumber,
            'description'        =>   $request->description,
            'image'            =>   $new_name
        );

        Vehicle::create($form_data);

        return redirect('/vehicles')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Crud::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', compact('vehicle'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'class'    =>  'required',
                'make'     =>  'required',
                'number'    =>  'required',
                'color'     =>  'required',
                'enumber'    =>  'required',
                'description'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'class'    =>  'required',
                'make'     =>  'required',
                'number'    =>  'required',
                'color'     =>  'required',
                'enumber'    =>  'required',
                'description'     =>  'required',
            ]);
        }

        $form_data = array(
            'class'       =>   $request->class,
            'make'        =>   $request->make,
            'number'       =>   $request->number,
            'color'        =>   $request->color,
            'enumber'       =>   $request->enumber,
            'description'        =>   $request->description,
            'image'            =>   $image_name
        );
  
        Vehicle::whereId($id)->update($form_data);

        return redirect('/vehicles')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Vehicle::findOrFail($id);
        $data->delete();

        return redirect('/vehicles')->with('success', 'Data is successfully deleted');
    }
}