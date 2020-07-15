@extends('materials_layout/app')
@section('content')
<h1>Edit system</h1>
{!! Form::open(['action' => ['materialsController@update',$material->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
   <div class="form-group">
   {{Form::label('Material_type','Material_type')}}
   {{ Form::select('material_type', ['L' => 'Past papers', 'S' => 'Road signs'],$material->Material_type, ['class'=>'form-control'])}} 
   </div>
   <div class="form-group">    
   {{Form::label('title','Year or chapter')}}
   {{Form::text('title', $material->title, ['class'=>'form-control','placeholder'=>'title'])}}      
   </div> 

   <div class="form-group">    
    {{Form::label('description','Description')}}
    {{Form::textarea('description',  $material->description, ['id'=>'article-ckeditor', 'class'=>'form-control','placeholder'=>'description'])}}      
    </div> 

    <div class="form-group">
        {{Form::file('picture')}}
       </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection