@extends('layouts.app')
@extends('base')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="center"> <b><span style="color:#FF0000">Edit your profile data</span></b></h1>
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
   
     <form method="post" action="{{ route('contacts.update', $data->user_id) }}" enctype="multipart/form-data">
     <span style="color:#00008B">
                @csrf
                @method('PATCH')
                
      <div class="form-group">
     
       <label class="col-md-4 text-right">Enter First Name</label>
       <div class="col-md-8">
        <input type="text" name="first_name" value="{{ $data->first_name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Enter Last Name</label>
       <div class="col-md-8">
        <input type="text" name="last_name" value="{{ $data->last_name }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Enter Free Days</label>
       <div class="col-md-8">
        <input type="text" name="freeDay" value="{{ $data->freeDay  }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">License</label>
       <div class="col-md-8">
        <input type="text" name="license" value="{{ $data->license }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
      </span>
     </form>

     </div>
</div>

</div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
@endsection
