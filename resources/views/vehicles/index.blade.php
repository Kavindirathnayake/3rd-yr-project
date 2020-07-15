
@extends('layouts.app')

@section('content')
<button class="btn btn-primary" type="button" onclick="window.location='{{ url("home") }}'"><i class="fas fa-backward"></i></button>
<button class="btn btn-primary" type="button" onclick="window.location='{{ url("vehicles/create") }}'"><i class="fas fa-plus"></i></button>
<table class="table table-bordered table-striped">
 <tr>
  <th width="250px;">Image</th>
  <th width="250px">Class</th>
  <th width="250px">Make</th>
  <th width="300px">Vehicle Number</th>
  <th width="250px">Color</th>
  <th width="300px">Engine Number</th>
  <th width="500px">Description</th>
  <th width="150px">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->class }}</td>
   <td>{{ $row->make }}</td>
   <td>{{ $row->number }}</td>
   <td>{{ $row->color }}</td>
   <td>{{ $row->enumber }}</td>
   <td style="word-break: break-all;">{{ $row->description }}</td>
   <td>
				
				
					
					<a href="{{ route('vehicles.edit', $row->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('vehicles.destroy', $row->id) }}" method="post" style="display: inline-block">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
				</form>
			</td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection