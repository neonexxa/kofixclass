<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use DB;
use Carbon\Carbon;

class KelasController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    	
   	/*
   	*
   	*   Changes for Index
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	    
   	public function index (Request $request){
   	    $parameters = $request->all();
   	    $classes = DB::table('kelas')->get();
   	    return view('adminkelas',compact('classes'));
   	}
   	
   	/*
   	*
   	*   Changes for Store
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function store (Request $request){

   	    $parameters = $request->all();

   	    $kelas = new Kelas;
		$kelas->Title 			= $parameters['Title'];
		$kelas->Description 	= $parameters['Description'];
		$kelas->Date 			= new Carbon($parameters['Date']);
		$kelas->Time 			= $parameters['Time'];
		$kelas->Location 		= $parameters['Location'];
		$kelas->Poster 			= $parameters['Poster'];
		$kelas->Register_link 	= $parameters['Register_link'];
		$kelas->Price 			= $parameters['Price'];
		$kelas->Trainer 		= $parameters['Trainer'];
		$kelas->save();
		$classes = DB::table('kelas')->get();
   	    return view('adminkelas',compact('classes'));
   	}
   	
   	/*
   	*
   	*   Changes for Create
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function create (Request $request){
   	    $parameters = $request->all();
   	    return view('kelas.create');
   	}
   	
   	/*
   	*
   	*   Changes for Update
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function update (Request $request){
   	    $parameters = $request->all();
   	}
   	
   	/*
   	*
   	*   Changes for Destroy
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function destroy (Request $request){
   	    $parameters = $request->all();
   	}
   	
   	/*
   	*
   	*   Changes for Show
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function show (Request $request){
   	    $parameters = $request->all();
   	}
   	
   	/*
   	*
   	*   Changes for Edit
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function edit (Request $request,$id){
   	    $parameters = $request->all();
        $kelas = Kelas::find($id);
        return view('kelas.edit',compact('kelas'));
   	}
   		
}
