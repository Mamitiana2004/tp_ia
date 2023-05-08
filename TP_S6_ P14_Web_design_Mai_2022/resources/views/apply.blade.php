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
    <h2>Apply Now Your Coureses</h2>

      <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>  
       

     <form action="{{url('studentapply')}} " method="post"  enctype="multipart/form-data">
  {{csrf_field()}}
       <input type="text" name="student_name" placeholder="Enter Your Name"  required="" />
       <input type="text" name="student_phone" placeholder="Enter Your Phone Number"  required="" />
       <input type="text" name="student_email" placeholder="Enter Your Email Address"  required="" />

       <input type="file" name="student_photo"  required=""  />
       
       <select style="width:100%;" name="student_coureses" required=""  id="">
        <?php
     $service = DB::table('services')->get();
     foreach ($service as $service) {
         
      
         ?>
          <option value="{{$service->service_id}}">{{$service->service_name}} </option>

         <?php } ?>  
       </select>
       
       <input type="submit" value="SENT" />
     </form>

  </div>
   
 </div>
</div>  



 
@endsection