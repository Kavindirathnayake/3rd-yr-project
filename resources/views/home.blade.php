@extends('layouts.app')

@section('content')
@foreach ($admins as $admin)
   @if(auth()->user()->email == $admin->email)
   <div class="card" style="height:750px; width:300px; margin-left:5px;margin-top:-50px; background: #6495ED">
            <h4 style = "color: #000000; margin:30px;font-family:Sofia;font-size: 50px;">Learnalot</h4>

            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-home" style="margin-right:10px;"></i>   Home</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="/home">Home</a>

            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-book"style="margin-right:10px;"></i>   Courses</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="#">Courses</a>

            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-user"style="margin-right:10px;"></i>   Trainers</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="#">Trainer Profiles</a>
            <a style = "color: #FFD700; margin-left:50px;" href="#">Available Trainers</a>

            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-user"style="margin-right:10px;"></i>   Students</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="#">Student Profiles</a>

            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-car"style="margin-right:10px;"></i>   Vehicles</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="/vehicles">Vehicle Management</a>
            <a style = "color: #FFD700; margin-left:50px;" href="/vrequests">Vehicle Requests</a>

            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-comments"style="margin-right:10px;"></i>   Communication</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="/asannounse/create">Student Announcement</a>
            <a style = "color: #FFD700; margin-left:50px;" href="/atannounse/create">Trainer Announcement</a>

            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-graduation-cap"style="margin-right:10px;"></i>   Learning</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="#">Learning Matirials</a>

            
            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-camera"style="margin-right:10px;"></i>   Gallary</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="#">Galary</a>

            
            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-id-card"style="margin-right:10px;"></i>   Contact</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="#">Contact</a>
        </div>
        @endif
@endforeach

   @foreach ($students as $student)
   @if(auth()->user()->email == $student->email)
   <div class="card" style="height:750px; width:300px; margin-left:5px;margin-top:-50px; background: #6495ED">
            <h4 style = "color: #000000; margin:30px;font-family:Sofia;font-size: 50px;">Learnalot</h4>
            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-car"style="margin-right:10px;"></i>   Vehicles</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="/vrequests/create">Vehicle Requests</a>
            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-comments"style="margin-right:10px;"></i>   Communication</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="/asannounse/create">Announcements</a>
        </div>
   @endif
@endforeach
@foreach ($trainers as $trainer)
   @if(auth()->user()->email == $trainer->email)
   <div class="card" style="height:750px; width:300px; margin-left:5px;margin-top:-50px; background: #6495ED">
            <h4 style = "color: #000000; margin:30px;font-family:Sofia;font-size: 50px;">Learnalot</h4>
            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-car"style="margin-right:10px;"></i>   Vehicles</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="/vrequests/create">Vehicle Requests</a>
            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-comments"style="margin-right:10px;"></i>   Communication</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="/atannounse/create">Announcements</a>
        </div>
   @endif
@endforeach

@foreach ($admins as $admin)
@if(auth()->user()->email != $admin->email)
@foreach ($students as $student)
   @if(auth()->user()->email != $student->email)
   @foreach ($trainers as $trainer)
   @if(auth()->user()->email != $trainer->email)
   <div class="card" style="height:750px; width:300px; margin-left:5px;margin-top:-50px; background: #6495ED">
            <h4 style = "color: #000000; margin:30px;font-family:Sofia;font-size: 50px;">Learnalot</h4>
            <h4 style = "color: #2F4F4F;font-weight: bold; margin-left:10px;"><i class="fas fa-car"style="margin-right:10px;"></i>   Vehicles</h4>
            <a style = "color: #FFD700; margin-left:50px;" href="/vrequests/create">Vehicle Requests</a>
        </div>
   @endif
@endforeach
@endif
@endforeach
@endif
@endforeach




        
    

@endsection
