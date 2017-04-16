<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kelas;

class HomeController extends Controller
{
    /*
    *
    *   Changes for Preview
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function index (Request $request){
        $parameters = $request->all();
        $classes = DB::table('kelas')->orderBy('Date','ASC')->get();
        $classes = $classes->all();
        // dd($classes);
        $icon = array("img/cd-icon-picture.svg","img/cd-icon-location.svg","img/cd-icon-movie.svg");
        $icon_background = array("cd-picture","cd-location","cd-movie");
        return view('publicviewone.senaraikelas',compact('classes','icon','icon_background'));
    }

    /** show each class details
    *
    *   Changes for Show
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function show ($id){
        $class = Kelas::find($id);

        // get your prev user id
        $previous = Kelas::where('id', '<', $class->id)->max('id');

        // get next user id
        $next = Kelas::where('id', '>', $class->id)->min('id');

        
        return view('publicviewone.showkelas',compact('class','previous','next'));
    }
        
    public function v2preview (Request $request){
        $parameters = $request->all();
        $classes = DB::table('kelas')->orderBy('Date','ASC')->get();
        $classes = $classes->all();
        // dd($classes);
        $icon = array("img/cd-icon-picture.svg","img/cd-icon-location.svg","img/cd-icon-movie.svg");
        $icon_background = array("cd-picture","cd-location","cd-movie");
        return view('v2senaraikelas',compact('classes','icon','icon_background'));
    }
}
