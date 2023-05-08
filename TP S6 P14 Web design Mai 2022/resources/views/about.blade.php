@extends('welcome')
 @section('title')

         <?php
     $title = DB::table('titleandtags')->first(); ?>
      <title> {{$title->title}} </title>
    <meta  name="keywords" content="{{$title->tags}} ">
    <meta name="description" content="{{$title->deteles}} ">
  

@endsection

@section('body')  

<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <br>
 <br>
 <br>
 <br>
 <br>
 
 <div class="main_detels">
 	
 	<div class="full_deteles">
 		<img class="deteles_img" src="{{url('fontpage/img/logo/mit background.png')}} " width="100%" height="300px;" alt="">
 		<h2 class="deteles_h2"><a href="{{route('home')}}">HOME</a> -> About Us 
    
 		</h2>

 	</div>
 </div>

  <div class="main_about">
  	<div class="about_us">
  		
  		 
  		<h3 class="abtitle">{{$title->title}}</h3>
  		<hr>
  		<p class="abdeteles">{{$title->deteles}} </p>
  	</div>
  </div>
 

 
@endsection