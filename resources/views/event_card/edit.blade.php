@extends('materials_layout/appcard')
@section('content')

{!! Form::open(['action' => ['cardsController@update',$card->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}

    <div class="form-group">
    {{Form::label('category','Category')}}
    {{Form::text('category', $card->category, ['class'=>'form-control','placeholder'=>'category'] )}}
    </div>

    <div class="form-group">
        {{Form::label('price','Pay for learn')}}
        {{Form::text('price', $card->price, ['class'=>'form-control','placeholder'=>'price'] )}}
    </div>

    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description', $card->description, ['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'description'] )}}
    </div>

    <div class="form-group">
        {{Form::file('image')}}
       
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
  

@endsection
