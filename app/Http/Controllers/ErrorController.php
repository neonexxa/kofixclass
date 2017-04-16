<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    /**
    *
    *   Changes for Show
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function show ($id){
    	if ($id == "link") {
    		$page = 'error.link';
    	}
        return view($page);
    }
    	
}
