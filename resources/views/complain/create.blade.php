@extends('layouts/app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if((Auth::user()->id)!=2)
                <hr><div class="card-header">Create Post</div>
                <div class="card-body">
    
{!! Form::open(['action' => 'complainController@store','method'=>'POST']) !!}
   

   <div class="form-group">
   {{Form::label('title','Title')}}
   {{Form::text('title', '',['class'=>'form-control','placeholder'=>'title'])}}
  </div>

  <div class="form-group">
    {{Form::label('complain','Complain')}}
    {{Form::textarea('complain', '',['class'=>'form-control','placeholder'=>'complain'])}}
   </div>

   {{Form::submit('submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}
</div>
</div>
             @endif
</div>
</div>
</div>
</div>





@endsection