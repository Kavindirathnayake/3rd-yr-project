@extends('layouts.app')

@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
 
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <h2 style="margin-top:-50px; margin-left:300px;">Vehicle Requests</h2>
  <button style="margin-left:20px;" class="btn btn-primary" type="button" onclick="window.location='{{ url("home") }}'"><i class="fas fa-angle-left"></i></button>
<!-- <div class="row"> -->
<div class="card-columns"> 
@foreach($vehicle as $vehicles)
<div class="card" style="width:500px, matgin-left: 100px">
  <div  class="card-body">
  <img src="{{ asset("images/$vehicles->image") }}" alt="" style = "display: block;margin-left: auto;margin-right: auto;width:300px; height:200px;"><br>
  <div style="text-align:center;">
            <!-- {{$vehicles->id}}<br> -->
            {{$vehicles->uname}}<br>
            {{$vehicles->email}}<br>
            {{$vehicles->pno}}<br>
            {{$vehicles->class}}<br>
            {{$vehicles->make}}<br>
            {{$vehicles->number}}<br>
            {{$vehicles->usedyears}}<br>
            {{$vehicles->description}}<br>
            {{$vehicles->price}}<br>
            
            <a href="{{ route('accept.update', $vehicles->id)}}" class="btn btn-primary btn-sm"">Accept</a>
             <!-- <button class="btn btn-primary" type="button" onclick="window.location='{{ url("accept/update") }}'">Accept</button> --> 
             <!-- <a href="actionedit/{{ $vehicles->id }}">Accept</a>  -->
                 <form action="{{ route('vehicles.destroy', $vehicles->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Reject</button>
                  </form>
                  </div>
  </div>
</div>
@endforeach
</div>
<!-- </div> -->


  <!-- <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>UserName</td>
          <td>Email</td>
          <td>PNo.</td>
          <td>Class</td>
          <td>Make</td>
          <td>Number</td>
          <td>UsedYears</td>
          <td>Description</td>
          <td>Price</td>
          <td>Image</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicle as $vehicles)
        <tr>
            <td>{{$vehicles->id}}</td>
            <td>{{$vehicles->uname}}</td>
            <td>{{$vehicles->email}}</td>
            <td>{{$vehicles->pno}}</td>
            <td>{{$vehicles->class}}</td>
            <td>{{$vehicles->make}}</td>
            <td>{{$vehicles->number}}</td>
            <td>{{$vehicles->usedyears}}</td>
            <td>{{$vehicles->description}}</td>
            <td>{{$vehicles->price}}</td>
            <td><img src="{{ asset("images/$vehicles->image") }}" alt="" style = "width:100px; height:100px"></td>
            <td class="text-center">
            <a href="{{ route('accept.update', $vehicles->id)}}" class="btn btn-primary btn-sm"">Accept</a>
             <button class="btn btn-primary" type="button" onclick="window.location='{{ url("accept/update") }}'">Accept</button> -->
            <!-- <a href="actionedit/{{ $vehicles->id }}">Accept</a> -->
                <!-- <form action="{{ route('vehicles.destroy', $vehicles->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Reject</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table> -->
<div>
@endsection