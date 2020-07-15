@extends('layouts.app')
@extends('base')
@section('content')
 

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3"><span style="color:#00008B;text-align:center;"><b>Register as a student</b></span></h1>
    
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
          @csrf
          {{ csrf_field() }}
          <span style="color:#00008B"><b>
          <div class="form-group" >    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="date_of_birth">Date_of_birth:</label>
              <input type="date" class="form-control" name="date_of_birth"/>
          </div>
          <div class="form-group">
              <label for="age">Age:</label>
              <input type="number" class="form-control" name="age"/>
          </div>
          <div class="form-group">
              <label for="phone No:">Phone No:</label>
              <input type="number" class="form-control" name="phoneno"/>
          </div>
          <div class="form-group">
              <label for="Address">Address:</label>
              <input type="text" class="form-control" name="address"/>
          </div>
          <div class="form-group">
              <label for="NIC">NIC:</label>
              <input type="text" class="form-control" name="NIC"/>
          </div>
          <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="text" class="form-control" name="gender"/>
          </div>
          <div class="form-group">
              <label for="free days">Free Days:</label>
              <input type="text" class="form-control" name="freeDay"/>
          </div> 
          <div class="form-group">
              <label for="license">License:</label>
              <input type="text" class="form-control" name="license"/>
          </div> 
          <label> Image </label> 
          <div class="form-group">
               

                 
                    <input type="file" class="form-control" name="image"  >
                 
                    </div> 
                                       
          <button type="submit" class="btn btn-primary"> Register</button>
      </form>
  </div>
</div>
</div>
<div class="col-sm-12">
</b></span>
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection
