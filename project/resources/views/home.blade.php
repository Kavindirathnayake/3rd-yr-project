@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<div class="jumbotron text-center">
 <br />
 @if($data!=null)
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}"  class="w3-circle" alt="Norway" style="width:50%" />
 <h4><b><span style="color:#00008B;text-align:center;">
 User_ID - {{$data->user_id}}</br>
 Name - {{ $data->first_name }} {{ $data->last_name }}</br>
 Free Days - {{$data->freeDay}}</br>
 License - {{$data->license}}
 </br></br>
 <a href="{{ url('edit') }}" class="btn btn-primary">Edit</a>
  </span> </b></h4>
   
 @else
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <img style="background-image" src='/images/is.jpg'class="w3-circle" alt="Norway" style="width:50%" />
    <div class="panel-heading"><h4><span style="color:#00008B;text-align:center;"><strong>You are unregistered student . </br>
    If you want to register our system as a student</strong></span><h4></div>
    <a href="{{ url('student') }}" class="btn btn-primary">REGISTER</a>
  @endif
</div>
</div>
</div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
            
            
                <div class="panel-heading"><h4><b><span style="color:#FF0000">Comment section</b><h4></span></div>
                 
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form id="comment-form" method="post" action="{{ route('comments.store') }}" >
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                        <div class="row" style="padding: 10px;" class="panel panel-danger">
                            <div class="form-group">
                                <textarea class="form-control" name="comment" placeholder="Write something from your heart..!"></textarea>
                            </div>
                        </div>
                        <div class="row" style="padding: 0 10px 0 10px;">
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading"><h4><b><span style="color:#FF0000">Comments</b><h4></span></div>

                <div class="panel-body comment-container" >
                <span style="color:#000000 ">   
                    @foreach($comments as $comment)
                        <div class="well">
                            <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                            <span> {{ $comment->comment }} </span>
                            <div style="margin-left:10px;" >
                                <a style="cursor: pointer;" cid="{{ $comment->id }}" name_a="{{ Auth::user()->name }}" token="{{ csrf_token() }}" class="reply"><button   class="btn btn-primary">Reply</button></a>&nbsp;
                               <a style="cursor: pointer;"  class="delete-comment " token="{{ csrf_token() }}" comment-did="{{ $comment->id }}" ><button   class="btn btn-danger">Delete</button></a>
                                <div class="reply-form">
                                    
                                    <!-- Dynamic Reply form -->
                                    
                                </div>
                                @foreach($comment->replies as $rep)
                                     @if($comment->id === $rep->comment_id)
                                        <div class="well">
                                            <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                                            <span> {{ $rep->reply }} </span>
                                            <div style="margin-left:10px;">
                                               <a rname="{{ Auth::user()->name }}" rid="{{ $comment->id }}" style="cursor: pointer;" class="reply-to-reply " token="{{ csrf_token() }}"><button   class="btn btn-primary">Reply</button></a>&nbsp;
                                            <a did="{{ $rep->id }}" class="delete-reply " token="{{ csrf_token() }}" ><button   class="btn btn-danger">Delete</button></a>
                                            </div>
                                            <div class="reply-to-reply-form">
                                    
                                                <!-- Dynamic Reply form -->
                                                
                                            </div>
                                            
                                        </div>
                                    @endif 
                                @endforeach
                               </span> 
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

   

</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}">
  
</script>

