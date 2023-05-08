<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    
    @yield('title')
    
    <!-- Load TinyMCE -->
    <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script> 
    
    <!-- slider css -->
      
        <link rel="stylesheet" type="text/css" href="{{asset('fontpage/css/slider/demo.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('fontpage/css/slider/style.css')}}" />
        <script type="text/javascript" src="{{asset('fontpage/js/slider/modernizr.custom.53451.js')}}"></script>
        
    <!-- end slider css -->
    
    <link rel="stylesheet" href="{{asset('fontpage/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('fontpage/css/responsive.css')}}" />
</head>
<body>
    
    
    <header> 
     <div class="full_header"> 
      <div class="main_header"> 
      
       <div class="header_left">
        <div class="header_sexcion">
     
        <p><img class="phone" src="{{asset('fontpage/img/icon/iconfinder_phone_logo_social_media_1078686.png')}}" alt="" /> <span class="phone1" >+8801861559750</span> </p>
        <p><img class="phone" src="{{asset('fontpage/img/icon/iconfinder_mail_1164530 - Copy.png')}}" alt="" /><span class="phone1" > mitfarm@gmail.com</span></p>
        </div>
       </div>
       <div class="header_right">
         <ul class="ul">
            <li><a href=""><img src="{{asset('fontpage/img/icon/mit_facebook.png')}}" alt="" /></a></li>
            <li><a href=""><img src="{{asset('fontpage/img/icon/mit_youtube.png')}}" alt="" /></a></li>
            <li><a href=""><img src="{{asset('fontpage/img/icon/mit_twitter.png')}}" alt="" /></a></li>
         </ul>
       </div>
       
      </div>
     </div>
    </header>
    
    
    
    
     
    <div class="header_bottom">
    <div class="miLo">
      <a href="{{route('home')}}">
    <img class="logo" src="{{asset('fontpage/img/logo/mitfarmlogo.png')}}" alt="mit logo" />
    <img class="logo1" src="{{asset('fontpage/img/logo/M IT FARM1  Mobile  Logo.png')}}" alt="mit logo" /> </a>  
    </div>
    
    <div class="header_bottom_main">
     <div class="header_logo">
       
     </div>
     <div class="menu"> 
      <div class="nav"> 
      <ul id="menu">
            <li><a href="{{route('home')}}"> Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Service</a>
                <ul>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a>
                                            
                    </li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                </ul>           
            </li>
           
            <li><a href="#">Coress</a>
                <ul>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a>
                                            
                    </li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                </ul>           
            </li>
             <li><a href="{{route('about')}} ">About Us</a></li>
             <li><a href="{{route('Contackus')}} ">Contack</a></li>
        </ul>
      </div>
      
      <div class="nav1"> 
      <ul id="menu">
            
            <li><a href="#">MENU</a>
                <ul>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a>
                                            
                    </li>
                    <li><a href="#">Dropdown Item </a></li>
                    <li><a href="#">Dropdown Item </a></li>
                </ul>           
            </li>
        </ul>
      </div>
      
     </div>
    </div>
    
    </div>
 
    @yield('body')

<footer>
 <div class="full_footer">
   <div class="main_footer1">
    <h3>OUR BEST COURSES</h3>
 <?php 
   $all_service = DB::table('services')
                ->where('service_type',2)
                ->orderby('service_id','desc')
                ->get();

     foreach ($all_service as $all_service) {
     ?>

    <a href="{{url('deteles/Page/mitfarm/'.$all_service->service_id)}} "><h2>{{$all_service->service_name}} </h2></a> 

     <?php } ?>

   </div>
   <div class="main_footer2">
    <h3>ADDRESS</h3>
    <h2>SOUD BANGLA BANK GROUNT FLOR ADDA BAZAR ,BURORA,CUMILLA</h2>
   </div>
   <div class="main_footer3">
    <h3>CONTACK</h3>
    <h2>+8801861559750 (if your coll not recive .we will coll back after.)</h2>
    <h2>mitfram@gmail.com</h2>
   </div>
   <div class="main_footer4">
  <h3>OUR BEST SERVICE</h3>
  <?php 
   $all_service = DB::table('services')
                ->where('service_type',1)
                ->orderby('service_id','desc')
                ->get();

     foreach ($all_service as $all_service) {
     ?>

    <a href="{{url('deteles/Page/mitfarm/'.$all_service->service_id)}} "> <h2>{{$all_service->service_name}} </h2> </a>

     <?php } ?>
  
   </div>
 </div>
</footer>   
    
<div class="footer_bottom">
 <h2>Copyright mitfarm 2018- <?php echo date('Y') ?></h2>
</div>  
 
    
 
    
    
    
    
    
    
<!-- slider js  --> 
    
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('fontpage/js/slider/jquery.gallery.js')}}"></script>
        <script type="text/javascript">
            $(function() {
                $('#dg-container').gallery({
                    autoplay    :   true
                });
            });
        </script/>  
        @yield('script')
<!-- slider js  --> 
    
</body>
</html>