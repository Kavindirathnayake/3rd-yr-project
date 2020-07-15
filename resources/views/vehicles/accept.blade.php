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

<button class="btn btn-primary" type="button" onclick="window.location='{{ url("home") }}'">Back</button>

<div class="card">
@foreach($chat as $chats)
<div class="row">
    <p style="margin-left:20px;">{{$chats->message}}</p>
    @foreach ($admins as $admin)
   @if(auth()->user()->email == $admin->email)
    <form action="{{ route('accept.destroy', $chats->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
    @endif
    @endforeach
</div>
@endforeach

</div>
  <div class="card-body">
    
      <form method="post" action="{{ route('accept.store') }}">
          <div class="form-group">
              @csrf
              <label for="message">Message</label>
              <input style="width:100px:" type="text" class="form-control" name="message"/>
          </div>
        
          <button style="width:100px:" type="submit" class="btn btn-block btn-danger">Send</button>
          
      </form>
  </div>
</div>
@endsection