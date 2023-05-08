<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use DB;
use Mail;
use App\Http\Requests;
use Session;
Session_start();

class home extends Controller
{


    function AdminAuthCheck(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return;
      }else{
        return Redirect::to('Admin/Login/Page')->send();
      }
    }


  

   public function adminsite(){

    $this->AdminAuthCheck();
   	return view('admin/layout');
   }

   public function adminloginpage(){
   	return view('adminLogin');
   }

  public function index1(){
  $uds = DB::table('uds')->where('id',1)->first();
    $da =  $uds->date;
    $du = date('Y');
    if($uds->date != date('Y')){
      return view('layout1');
    }else{
      return view('layout');
    }
} 

   public function admin_beshbord(Request $request){
   	$this->validate($request,[
         'admin_email' => 'required',
         'admin_password' => 'required',
	   ]);

	   $admin_email = $request->admin_email;
	   $admin_password = md5($request->admin_password);

       $result=DB::table('adminlogins')
             ->where('admin_email' ,$admin_email)
             ->where('admin_password' , $admin_password)
             ->first();

         if($result){
           Session::put('admin_name',$result->admin_name);
           Session::put('admin_id',$result->admin_id);
           return Redirect::to('admin/publications');
         }else{
         	Session::put('message','e-mail ou mot de passe invalide.');
         	return Redirect::to('Admin/Login/Page');
         }
   }
public function index(){
   $uds = DB::table('uds')->where('id',1)->first();
    $da =  $uds->date;
    $du = date('Y');
    if($uds->date != date('Y')){
      return view('layout1');
    }else{
      return view('layout');
    }
    
  } 

       function adminlogout(){
    	Session::flush();
    	return Redirect::to('Admin/Login/Page');
    }


   
   public function about(){
    return view('about');
   }


public function Contackus(){
    return view('contack');
   }
public function message(Request $request){

   $date= array();
   $date['message_name'] = $request->message_name;
   $date['message_phone'] = $request->message_phone;
   $date['message_email'] = $request->message_email;
   $date['message_deteles'] = $request->message_deteles;

   DB::table('messages')->insert($date);
   
   Session::put('message','Your message is sent');
    return view('contack');
   }
















































}
