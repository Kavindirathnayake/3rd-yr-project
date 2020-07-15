
@extends('layouts.app')

@section('content')

            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
            </div>
            <br />
     <form method="post" action="{{ route('vehicles.update', $vehicle->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">Vehicle Types</label>
       <div class="col-md-8">
        <input type="text" name="class" value="{{ $vehicle->class }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Vehicle Model</label>
       <div class="col-md-8">
        <input type="text" name="make" value="{{ $vehicle->make }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Vehicle Number</label>
       <div class="col-md-8">
        <input type="text" name="number" value="{{ $vehicle->number }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Vehicle Color</label>
       <div class="col-md-8">
        <input type="color" name="color" value="{{ $vehicle->color }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Engine Number</label>
       <div class="col-md-8">
        <input type="text" name="enumber" value="{{ $vehicle->enumber }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Description</label>
       <div class="col-md-8">
        <input type="text" name="description" value="{{ $vehicle->description }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $vehicle->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $vehicle->image }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>
@endsection