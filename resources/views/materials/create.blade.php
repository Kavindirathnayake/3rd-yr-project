@extends('materials_layout.app')
@section('content')
 <h1>Add Learning Material</h1>   
{!! Form::open(['action' => 'materialsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
   <div class="form-group">
   {{Form::label('Material_type','Material_type')}}
   {{ Form::select('material_type', ['p'=> 'Past papers', 'R'=> 'Road signs'],null, ['class'=>'form-control'])}} 
   </div>
   <div class="form-group">    
   {{Form::label('title','Year or chapter')}}
   {{Form::text('title', '', ['class'=>'form-control','placeholder'=>'title'])}}      
   </div> 

   <div class="form-group">    
    {{Form::label('description','Description')}}
    {{Form::textarea('description', '', ['id'=>'article-ckeditor', 'class'=>'form-control','placeholder'=>'description'])}}      
    </div> 

    <div class="form-group">
     {{Form::file('picture')}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection