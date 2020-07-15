@extends('materials_layout/app')
@section('content')
<h1>{{$material->material_type}}     {{$material->title}}</h1>

<div>{!!$material->description!!}</div>
<div class="row">
<img src="/storage/uploads/{{$material->picture}}">
</div>

<a href="/learn/{{$material->id}}/edit" class="btn btn-success">Edit</a>

{!! Form::open(['action' => ['materialsController@destroy',$material->id], 'method'=>'POST', 'class'=>'pull-right']) !!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}

@endsection
    
