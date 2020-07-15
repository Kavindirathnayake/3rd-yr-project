@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if((Auth::user()->id)!=2)
                <div class="panel-heading">My Complains</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    @if(count($complain)>0)
                    <table class="table table-bordered">
                        <tr>
                          
                            <td width="300px">Title</td>
                            <td width="5px">Action</td>
                        </tr>
                       
                    @foreach ($complain as $complains)
                   
                     
                    <tr>
                    
                     <td>{{$complains->title}}</td>
                    <td><a href="/complain/{{$complains->id}}" class="btn btn-primary">View</a>
                        <br>
                        {!! Form::open(['action' => ['complainController@destroy',$complains->id],'method'=>'POST']) !!}
                       {{Form::hidden('_method','DELETE')}}
                       {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                        {!! Form::close() !!}
                     </td>
                    </tr>
                 
                        
                    @endforeach
                   </table>
                    @endif
                </div>
            </div>

                @else 
                
                <a href="/complain" class="btn btn-danger">See complain list </a>
               
                @endif
            
        </div>
    </div>
</div>
@endsection
