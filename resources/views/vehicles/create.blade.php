@extends('layouts.app')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<button style="margin-left:20px;" class="btn btn-primary" type="button" onclick="window.location='{{ url("vehicles") }}'"><i class="fas fa-backward"></i></button>

<div align="right">
 
</div>

<form method="post" action="{{ route('vehicles.store') }}" enctype="multipart/form-data">

 @csrf
 <h2 style="text-align:center;">ADD VEHICLE</h2>
 <div class="form-group">
  <label class="col-sm-12">Vehicle Type</label>
  <div class="col-sm-12">
   <input style="width:700px;" type="text" name="class" class="form-control" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-sm-12">Vehicle Model</label>
  <div class="col-sm-12">
   <input style="width:700px;" type="text" name="make" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-sm-12">Vehicle Number</label>
  <div class="col-sm-12">
   <input style="width:700px;" type="text" name="number" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-sm-12">Color</label>
  <div class="col-sm-12">
   <input style="width:700px;" type="color" name="color" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-sm-12">Engine Number</label>
  <div class="col-sm-12">
   <input style="width:700px;" type="text" name="enumber" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-sm-12">Description</label>
  <div class="col-sm-12">
   <!-- <input style="width:700px;" type="textarea" name="description" class="form-control input-lg" /> -->
   <textarea style="width:700px;" name="description" rows="4" cols="50"></textarea>
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-sm-12">Select Image</label>
  <div class="col-sm-12">
   <input style="width:700px;" type="file" name="image" />
  </div>
 </div>
 <br /><br /><br />
 <div class="form-group">
  <input style="width:100px;margin-left: 50px;" type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
 </div>

</form>

@endsection

