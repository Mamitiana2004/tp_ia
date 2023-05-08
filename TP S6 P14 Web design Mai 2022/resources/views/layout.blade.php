@extends('welcome')
@section('title')

<?php
    $title = DB::table('titleandtags')->first();
?>
    <title> {{$title->title}} </title>
    <meta  name="keywords" content="{{$title->tags}} ">
    <meta name="description" content="{{$title->deteles}}">
  

@endsection

@section('body')  

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- slider Sexcen -->  
    
      <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="{{asset('fontpage/js/slider/jquery-1.9.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('fontpage/js/slider/jssor.slider.mini.js')}}"></script>
    <!-- use jssor.slider.debug.js instead for debug -->

    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                               
                $Idle: 4000,                            
                $PauseOnHover: 1,                                   

                $ArrowKeyNavigation: true,                           
                $SlideDuration: 800,                               
                $MinDragOffsetToSlide: 20,                          
                $SlideSpacing: 0,                                   
                $Cols: 1,                                  
                $ParkingPosition: 0,                                
                $UISearchMode: 1,                                   
                $PlayOrientation: 1,                                 
                $DragOrientation: 1,                              

                $ArrowNavigatorOptions: {                        
                    $Class: $JssorArrowNavigator$,              
                    $ChanceToShow: 1,                               
                    $AutoCenter: 2,                                
                    $Steps: 1                                     
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              
                    $ChanceToShow: 2,                               

                    $ActionMode: 1,                                  
                    $AutoCenter: 0,                                  
                    $Rows: 1,                                       
                    $SpacingX: 3,                                 
                    $SpacingY: 3,                                   
                    $Cols: 9,                             
                    $ParkingPosition: 260,   
                    $Orientation: 1,  
                    $NoDrag: false                          
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

             
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <div class="slider" style="position: relative;  width: 100%;  overflow: hidden;">
        <div style="position: relative; left: 50%; width: 5000px; text-align: center; margin-left: -2500px;">
            <!-- Jssor Slider Begin -->
            <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 0px; width: 980px; height: 400px; background: url({{asset('fontpage/img/logo/mit background.png')}}) top center no-repeat;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url({{asset('fontpage/img/logo/mit background.png')}}) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                <!-- Slides Container -->


                <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 980px;
                    height: 400px; overflow: hidden;">
     <?php
      
      $slider = DB::table('sliders')->get();
      foreach ($slider as $slider) {
         
     
      ?>

                    <div>
                        <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <br><br>
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color:black;">
                                {{$slider->slider_title}}
                            </span>
                            <br />
                            <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: black;">
                               {{substr($slider->slider_deteles,0,100)}}
                            </span>
                            <br />
                            <br />
                            <a href="{{route('apply/now/mitfarm')}} ">
                                <h3 class="botton">Apply Now</h3>
                            </a>
                        </div>
                        <img src="{{url($slider->slider_photo)}}" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        
                    </div>

<?php } ?>
               
                    
                   
                  
                </div>
                
        
                <style>
                    .botton{
                        width:200px;
                        height: 40px;
                        color:#FFF;
                        background: #F35B7A;
                        text-align: center;
                        font-size: 20px;
                        padding-top:15px;
                        border-radius: 4px;
                    }
                     .botton:hover{
                        background:   linear-gradient(to right, #ffffff 0%, #f0365c 100%);
                        color:black;

                        transition: 1s ;

                     }

                    .jssora07l, .jssora07r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 50px;
                        height: 50px;
                        cursor: pointer;
                       
                        overflow: hidden;
                    }
                    .jssora07l { background-position: -5px -35px; }
                    .jssora07r { background-position: -65px -35px; }
                    .jssora07l:hover { background-position: -125px -35px; }
                    .jssora07r:hover { background-position: -185px -35px; }
                    .jssora07l.jssora07ldn { background-position: -245px -35px; }
                    .jssora07r.jssora07rdn { background-position: -305px -35px; }

                    .jssora07l.jssora07lds { background-position: -5px -35px; opacity: .3; pointer-events: none; }
                    .jssora07r.jssora07rds { background-position: -65px -35px; opacity: .3; pointer-events: none; }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora07l" style="top: 123px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora07r" style="top: 123px; right: 8px;">
                </span>
              
            <style>
                 

                .jssort04 {
                    position: absolute;
                   
                    width: 600px;
                    height: 60px;
                }

                    .jssort04 .p {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 62px;
                        height: 32px;
                    }

                    .jssort04 .t {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: none;
                    }

                    .jssort04 .w, .jssort04 .pav:hover .w {
                        position: absolute;
                        
                         
                    }

                    .jssort04 .pdn .w, .jssort04 .pav .w {
                        border-style: dashed;
                    }

                    .jssort04 .c {
                       
                    }

                    .jssort04 .p:hover .c, .jssort04 .pav .c {
                        filter: alpha(opacity=0);
                        opacity: 0;
                    }

                    .jssort04 .p:hover .c {
                        transition: none;
                        -moz-transition: none;
                        -webkit-transition: none;
                        -o-transition: none;
                    }

                    * html .jssort04 .w {
                        width /**/: 62px;
                        height /**/: 32px;
                    }
            </style>
            <!-- thumbnail navigator container -->
            <div u="thumbnavigator" class="jssort04" style="right: 0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="bottom: 25px; right: 30px; cursor: default;">
                    <div u="prototype" class="p">
                        <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                        <div class=c></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!--#endregion Thumbnail Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
            </div>
            <!-- Jssor Slider End -->   
     </div>
    </div>
    
    <!-- end slider -->
    
    
    <div class="full_service">
     
    </div>
    
    <div class="full_course">
    
    <div class="main_service">
    <h2>OUR BEST SERVICE</h2>
    <div class="title1"></div>

    <?php 
   $all_service = DB::table('services')
                ->where('service_type',1)
                ->orderby('service_id','desc')
                ->limit(3)
                ->get();

     foreach ($all_service as $all_service) {
          
    
    ?>
 
       <div class="sexcan_site">
       <a href="{{url('deteles/Page/mitfarm/'.$all_service->service_id)}} "><img src="{{ url($all_service->service_photo)}}" alt="" />
        <h3>{{ $all_service->service_name}} </h3>
        <p> {{substr($all_service->service_detels,0,100)}}</p>  </a> 
       </div>

<?php } ?>

      
     </div>
    </div>
     
    
    
    
    
    
    
    
    <!--start COURSES -->
    
    <div class="full_course">
    <div class="main_course">
    <div class="title"> OUR BAST Coureses</div>

    <?php 
   $all_service = DB::table('services')
                ->where('service_type',2)
                ->orderby('service_id','desc')
                ->limit(9)
                ->get();

     foreach ($all_service as $all_service) {
          
    
    ?>

     <div class="course_sexcen">
        <a href="{{url('deteles/Page/mitfarm/'.$all_service->service_id)}} ">
     <img src="{{ url($all_service->service_photo)}}" alt="" />
     <p>{{ $all_service->service_name}}</p> </a>
     </div>

    <?php } ?>
 
    </div>
    </div>
    
    
<!-- end COURSES -->
    
    
<!-- about -->  
    
    <div class="full_about">
     <div class="main_about">
      
      <div class="about_left">
        <h2>AL'Intelligence Artificielle</h2>
        <hr /><br />

     <?php 
   $title = DB::table('titleandtags')
                 ->first();
 
          
    
    ?>   
        <p>{{substr($title->deteles,0,300)}}
        </p>
        <br />
        <h6 class="seenmore"><a  href="">see more</a></h6>
        
      </div>
      <div class="about_right">
      <h2>L'Intelligence Artificielle</h2>
      <hr /><br />
        <video   class="video" width="400" controls >
  <source src="{{asset('fontpage/img/Kaabil Hoon (Full Video Song) _ Kaabil _ Hrithik R - 720P HD.mp4')}}" type="video/mp4">
  <source src="{{asset('fontpage/img/Kaabil Hoon (Full Video Song) _ Kaabil _ Hrithik R - 720P HD.mp4')}}" type="video/ogg">
  
</video>
      
        
      </div>
     </div>
    </div>
    
<!-- end about -->  
    
    
    
<div class="full_reg">
 <div class="main_reg">
  <div class="left_reg">
    <h2>QUCK REGSTION</h2>

      <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>  
       

     <form action="{{url('studentapply')}} " method="post"  enctype="multipart/form-data">
  {{csrf_field()}}
       <input type="text" name="student_name" placeholder="Enter Your Name"  required="" />
       <input type="text" name="student_phone" placeholder="Enter Your Phone Number"  required="" />
       <input type="text" name="student_email" placeholder="Enter Your Email Address"  required="" />

       <input type="file" name="student_photo"  required=""  />
       
       <select style="width:100%;" name="student_coureses" required=""  id="">
        <?php
     $service = DB::table('bases')->get();
     foreach ($service as $service) {
         
      
         ?>
          <option value="{{$service->base_name}}">{{$service->base_name}} </option>

         <?php } ?>  
       </select>
       
       <input type="submit" value="SENT" />
     </form>

  </div>
   
 </div>
</div>  




@endsection

