@extends('welcome')
 @section('title')

          <?php
     $title = DB::table('titleandtags')->first(); ?>
      <title> {{$title->title}} </title>
    <meta  name="keywords" content="{{$title->tags}} ">
    <meta name="description" content="{{$title->deteles}}">
  

@endsection

@section('body')  

<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  
<div class="full_reg" style="background: #F4F4F4">
	<br>
 <br>
 <br>
 <br>
 <br>
 
   <br>
 <br>
 <br>
 <br>
 <br>
  <br>
 <br>
 <br>
 <br>
 <br>
 <div class="main_reg">
  <div class="left_reg">
    <h2>Send Massage</h2>

      <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>  
       

     <form action="{{url('massage')}} " method="post"  enctype="multipart/form-data">
  {{csrf_field()}}
       <input type="text" name="massage_name" placeholder="Enter Your Name"  required="" />
       <input type="text" name="massage_phone" placeholder="Enter Your Phone Number"  required="" />
       <input type="text" name="massage_email" placeholder="Enter Your Email Address"  required="" />

        <textarea name="massage_deteles"    id="" class="textarea"  >
        	
        </textarea>
        
       
       <input type="submit" value="SENT" />
     </form>

  </div>
   
 </div>
</div>  



 
@endsection