<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use DB;
use Mail;
use App\Http\Requests;
use Session;
// Session_start();

class PublicationController extends Controller
{

    function AdminAuthCheck(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return;
        }else{
            return Redirect::to('Admin/Login/Page')->send();
        }
    }

    public function add(){
        $this->AdminAuthCheck();
        return view('admin.publications.add');
    }
    
    public function insert(Request $request) {
        $this->AdminAuthCheck();
        $data = array();
        $data['titre'] = $request->titre;
        $data['contenu'] = $request->contenu;
        $data['auteur'] = $request->auteur;
        $data['date_publication'] = $request->date_publication;

        for($i = 0; $i < 5; $i++) {
            $image_i = 'image'.($i + 1);
            $image = $request->file($image_i);
            
            if($image) {
                $image_name = hrtime(true);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_fullName = $image_name.'.'. $ext;
                $upload_path = 'image/';
                $image_url= $upload_path.$image_fullName;
                $secc=$image->move($upload_path,$image_fullName);
                if($secc)   {
                    $data[$image_i]= $image_url;
                }
            }
        }
        DB::table('publications')->insert($data);
        Session::put('message','La nouvelle publication a été insérée !');
        return Redirect::to(route('publications_list'));
	    
	}
    
    public function list() {
        $this->AdminAuthCheck();
        $publications = DB::table('publications')->get();
     	return view('admin.publications.list')->with('publications',$publications);
    }
    
    public function edit($id) {
        $this->AdminAuthCheck();
        $publication = DB::table('publications')
               ->where('id', $id)
     	       ->first();
     	return view('admin.publications.edit', compact('publication'));
    }
    
    public function update(Request $request , $id){
        $this->AdminAuthCheck();
        $data=array();
        $data['titre'] = $request->titre;
        $data['contenu'] = $request->contenu;
        $data['auteur'] = $request->auteur;
        $data['date_publication'] = $request->date_publication;
        
        for($i = 0; $i < 5; $i++) {
            $image_i = 'image'.($i + 1);
            $image = $request->file($image_i);
            
            if($image) {
                $image_name = hrtime(true);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_fullName = $image_name.'.'. $ext;
                $upload_path = 'image/';
                $image_url= $upload_path.$image_fullName;
                $secc=$image->move($upload_path,$image_fullName);
                if($secc)   {
                    $data[$image_i]= $image_url;
                }
            }
        }
        DB::table('publications')->where('id', $id)->update($data);
        Session::put('message','La publication a été modifiée !');
        return Redirect::to(route('publications_list'));
    }

     
    
    public function delete($id) {
        $this->AdminAuthCheck();
        DB::table('publications')->where('id', $id)->delete();
        Session::put('message', 'La publication a été supprimée !.');
        return Redirect:: to(route('publications_list'));
    }
    
    public function detelespage($service_id){
        $service = DB::table('services')->where('service_id',$service_id)->first();
        return view('couressdeteles')->with('service',$service);
    }

}
