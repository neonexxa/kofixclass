<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    *
    *   Changes for Preview
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function preview (Request $request){
        $parameters = $request->all();
        $classes = DB::table('kelas')->get();
        $classes = $classes->all();
        // dd($classes);
        $icon = array("img/cd-icon-picture.svg","img/cd-icon-location.svg","img/cd-icon-movie.svg");
        $icon_background = array("cd-picture","cd-location","cd-movie");
        return view('senaraikelas',compact('classes','icon','icon_background'));
    }
}
