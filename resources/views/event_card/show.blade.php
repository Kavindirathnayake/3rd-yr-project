
<!-- /////// card body - start /////// -->
<!doctype html>
<html lang="{{ app()->getLocale() }}">

 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>driving-school</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
           . {
  margin: 0px;
  padding: 0px;
  border-radius: 10px;
}

.card-image img {
  box-shadow: 1px 1px 10px grey;
  height: 280px ;
  width: 90%;
  border-top-right-radius: 10px;
  border-top-left-radius:  10px;
}

.card-title {
  margin-bottom: 0px ;
  padding: 5px;
}

.card-title h1 {
  font-weight: 100;
  font-family: title;
  font-size: 35px;
  text-align: center;
  padding: 0px;
  padding-bottom: 0px;
  margin-bottom: 0px ;
  color: green ;
}

.card-des {
  padding: 3px;
  text-align: center;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}

i    {color:black; 
       right: 1px;
      }
        </style>
    </head>

    <body>
        
    
<div class="card">
    <a href="/cards"><i style='font-size:35px'class="fa">&#xf04a;</i></a>
  <div class="card-image">
    <img src="/storage/cards/{{$card->image}}">
  </div>

  <div class="card-title">
      <h1>{{ $card->category}}</h1>
  </div>

  <div class="card-des">
     <br>
    <p>{!!$card->description!!}</p>
    
  </div>

</div>

    
<a href="/cards/{{$card->id}}/edit" class="btn btn-success">Edit</a>

{!! Form::open(['action' => ['cardsController@destroy',$card->id],'method'=>'POST','class'=>'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}


<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> 
<script>
     CKEDITOR.replace( 'article-ckeditor' );
</script>

    </body>
	</html>


