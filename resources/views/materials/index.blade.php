@extends('materials_layout/app')
@section('content')
<style>
.img {
  display: block;
  text-align: center;
  align:"middle";
  
}
</style>
<h1 style="text-align:center">Study Material</h1>


@if(count($material)>0)
    <img src="/storage/photoes/1.jpg" alt="" width="1500" height="300" class="center">
  @foreach ($material as $materials)
 <a href="/learn/{{ $materials->id}}"><h2  style="text-align:center">{{ $materials->material_type}}
           {{ $materials->title}}</a></h2>

  @endforeach
  {{$material->links()}}

  <h3 style="text-align:center">P=>pastpapers</h3>
  <h3  style="text-align:center">R=>Roadsigns</h3>
@else 
  <p>No learning material available</p>
@endif

@endsection