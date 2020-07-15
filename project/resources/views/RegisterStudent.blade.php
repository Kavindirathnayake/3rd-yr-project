@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3"> <b><span style="color:#00008B;text-align:center;">Register Students</span></b></h1>  
    <style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color:#00FF7F;
}
#t01 tr:nth-child(odd) {
 background-color: #ADFF2F;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>  
  <table class="table table-striped" id="t01">
  
    <thead>
        <tr>
          <th>User_ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Date_Of_Birth</th>
          <th>Age</th>
          <th>Phone_No</th>
          <th>Address</th>
          <th>NIC</th>
          <th>Gender</th>
          <th>Free_Days</th>
          <th>License</th>
          <th colspan = 2>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->user_id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->date_of_birth }}</td>
            <td>{{$contact->age}}</td>
            <td>{{$contact->phoneno}}</td>
            <td>{{$contact->address}}</td>
            <td>{{$contact->NIC }}</td>
            <td>{{$contact->gender }}</td>
            <td>{{$contact->freeDay }}</td>
            <td>{{$contact->license }}</td>
            
            <td>
                <form action="{{ route('contacts.destroy', $contact->user_id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
  </table>
<div>
</div>
@endsection  
    