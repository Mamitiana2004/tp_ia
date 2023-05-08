<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Vulgarisateurs;
use App\Models\Publications;


class DefaultController extends Controller
{
    public function index() {
        $publications = DB::table('publications')->get();
        return view('front.index', compact('publications'));
    }

    public function publication($id) {
        $publications = DB::table('publications')->get();
        $publication = DB::table('publications')->where('id', $id)->first();
        if ($publication == null)
            return Redirect::to(route('home'));
            
        return view('front.publication', compact('publications', 'publication'));
    }
}
