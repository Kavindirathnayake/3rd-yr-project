@extends('layouts.app')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 10px;
    }
    .card {
        height:400px;
        width:400px;
        margin-left:50px;
    }
    .card-body{
        height:400px;
        width:400px;
        margin-left:50px;
    }
</style>

<div class="row">

<div style="font-size:30px; margin-left:600px;">Announcements</div>
</div>

<div style="width:1000px; height:500px; margin-left:500px;overflow-y: scroll;overflow-x: hidden;">
<ul class="list-group">
@foreach($chat as $chats)
<div class="row">

    <li class="list-group-item list-group-item-success" style="word-break: break-all;margin-top:20px; width:500px; margin-left:100px">
    <div>{{$chats->message}}</div>
    <img src="{{ asset("images/$chats->image") }}" alt="" style = "display: block;margin-left: auto;margin-right: auto;width:300px; height:200px;"></li>
    @foreach ($admins as $admin)
   @if(auth()->user()->email == $admin->email)
    <form action="{{ route('atannounse.destroy', $chats->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button style="margin-top:20px;" class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                  </form>
                  @endif
@endforeach
</div>
@endforeach
</ul>

</div>

@foreach ($admins as $admin)
   @if(auth()->user()->email == $admin->email)
   

<form method="post" action="{{ route('atannounse.store') }}" enctype="multipart/form-data">

@csrf
<div class="card" style="height:750px; width:500px; margin-left:5px;margin-top:-600px; background: #A9A9A9">
<div class="card-body">
<button style="margin-left:-40px;margin-top:-10px;" class="btn btn-primary" type="button" onclick="window.location='{{ url("home") }}'"><i class="fas fa-angle-left"></i></button>
<h2 style="margin-top:100px;margin-left:-20px;">ADD Announse</h2>
<div class="form-group">
 <label class="col-sm-12">Message</label>
 <div class="col-sm-12">
 <textarea style="width:400px;" name="message" rows="4" cols="50"></textarea>
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
</div>
</div>
</form>

  </div>
  </div>
  @endif
@endforeach




@foreach ($trainers as $trainer)
   @if(auth()->user()->email == $trainer->email)

@csrf
<div class="card" style="height:750px; width:400px; margin-left:5px;margin-top:-600px; background: #A9A9A9">
<div class="card-body">
<!-- <img  style="width: 400px; height: 200px; margin-left:-90px;margin-left:-60px; " src="{{ asset("images/images (1).jfif") }}" alt=""> -->
<img  style="width: 200px; height: 200px; margin-top:40px; margin-left:40px;border-radius: 50%; " src="{{ asset("images/profile.jpg") }}" alt="">
<h4 style="margin-left:50px;margin-top:30px;">{{auth()->user()->email}}</h4>
  </div>
  </div>
  @endif
@endforeach




</div>
@endsection