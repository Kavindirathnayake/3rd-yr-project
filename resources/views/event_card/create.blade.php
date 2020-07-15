@extends('materials_layout/appcard')
@section('content')
{!! Form::open(['action' => 'cardsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
    {{Form::label('category','Category')}}
    {{Form::text('category', '', ['class'=>'form-control','placeholder'=>'category'] )}}
    </div>

    <div class="form-group">
        {{Form::label('price','Pay for learn')}}
        {{Form::text('price', '', ['class'=>'form-control','placeholder'=>'price'] )}}
    </div>

    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description', '', ['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'description'] )}}
    </div>

    <div class="form-group">
        {{Form::file('image')}}
       
    </div>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
  

@endsection