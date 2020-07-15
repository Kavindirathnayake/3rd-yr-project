@extends('layouts/app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
    
<h1>{{$complains->complain}}</h1>

@foreach($complains->comments as $comments)
<li class="list-group-item">
<strong>{{$comments->created_at->diffForHumans()}}: &nbsp;</strong>
    {{$comments->reply}}
  </li>
    @endforeach


    <div class="card" >
        <div class="card-block">
          <form action="/complain/{{$complains->id}}/comments" method="POST">
            {{ csrf_field() }}
           <div class="form-group">
           <textarea name="reply" class="form-control" placeholder="reply here .."></textarea>
           </div>
           <button type="submit" class="btn btn-primary">reply</button>
            </form>

        </div>
   </div>




    
</div>
</div>
</div>
</div>
</div>



@endsection