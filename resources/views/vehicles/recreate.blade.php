@extends('layouts.app')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 10px;
    }
</style>
<button class="btn btn-primary" type="button" onclick="window.location='{{ url("home") }}'">Back</button>
<!-- <button class="btn btn-primary" type="button" onclick="window.location='{{ url("accept/create") }}'">Admin Chat</button> -->
<div class="card push-top">
  <div class="card-header">
    Add Vehicle Request
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('vrequests.store') }}" enctype="multipart/form-data">

@csrf
    <!-- {!! Form::open(array('route' => 'vrequests.store','method'=>'POST','files'=>true)) !!} -->
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Your Name:</strong>
                <input style="width:700px;" type="text" name="uname" class="form-control" />
                <!-- {!! Form::text('uname', null, array('placeholder' => 'Your Name','class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                <input style="width:700px;" type="email" name="email" placeholder="abc@gmail.com" class="form-control input-lg" />
                <!-- {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input style="width:700px;" type="tel" name="pno" placeholder="071-234-5678" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control input-lg" />
                <!-- {!! Form::text('pno', null, array('placeholder' => 'Phone Number','class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Vehicle Type:</strong>
                <input style="width:700px;" type="text" name="class" class="form-control input-lg" />
                <!-- {!! Form::text('class', null, array('placeholder' => 'Class','class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vehicle Model:</strong>
                <input style="width:700px;" type="text" name="make" class="form-control input-lg" />
                <!-- {!! Form::text('make', null, array('placeholder' => 'Make','class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number:</strong>
                <input style="width:700px;" type="text" name="number" class="form-control input-lg" />
                <!-- {!! Form::text('number', null, array('placeholder' => 'Number','class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>No of Used Years:</strong>
                <input style="width:700px;" type="text" name="usedyears" class="form-control input-lg" />
                <!-- {!! Form::text('usedyears', null, array('placeholder' => 'Used Years','class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input style="width:700px;" type="text" name="description" class="form-control input-lg" />
                <!-- {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Your Suggest Price Of Vehicle(Rs.):</strong>
                <input style="width:700px;" type="text" name="price" class="form-control input-lg" />
                <!-- {!! Form::text('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Upload File:</strong>
                <input style="width:700px;" type="file" name="image" />
                <!-- {!! Form::file('image', array('class' => 'form-control')) !!} -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <!-- {!! Form::close() !!} -->
  </div>
</div>
@endsection