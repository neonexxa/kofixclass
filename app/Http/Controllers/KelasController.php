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
    
    	
   	/**
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
        // dd($parameters);
   	    $kelas = new Kelas;
        $fields = [
                    'Title'         => $parameters['Title'],
                    'Description'   => $parameters['Description'],
                    'Date'          => new Carbon($parameters['Date']),
                    'Time'          => $parameters['Time'],
                    'Location'      => $parameters['Location'],
                    'Register_link' => $parameters['Register_link'],
                    'Price'         => $parameters['Price'],
                    'Poster'        => 'noposter',
                    'Trainer'       => $parameters['Trainer'],
        ];
        $kelas = $kelas->create($fields);

        //  storing image
        $file = $request->file('Poster');
        $extension = $file->getClientOriginalExtension();
        $imageName = $kelas->id . '_' . rand(11111,99999) . '.' . $extension;
        // dd($imageName);
        
        $request->file('Poster')->move(
            base_path() . '/public/uploads/'.$kelas->id, $imageName
        );
        $kelas->Poster = $imageName;
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
   	
   	public function update (Request $request, $id){
   	    $parameters = $request->all();
        $kelas = Kelas::find($id);
        $kelas->Title           = $parameters['Title'];
        $kelas->Description     = $parameters['Description'];
        $kelas->Date            = new Carbon($parameters['Date']);
        $kelas->Time            = $parameters['Time'];
        $kelas->Location        = $parameters['Location'];
        $kelas->Register_link   = $parameters['Register_link'];
        $kelas->Price           = $parameters['Price'];
        $kelas->Trainer         = $parameters['Trainer'];

        if (isset($parameters['Poster'])) {
          $file = $request->file('Poster');
          $extension = $file->getClientOriginalExtension();
          $imageName = $kelas->id . '_' . rand(11111,99999) . '.' . $extension;
          // dd($imageName);
          $request->file('Poster')->move(
              base_path() . '/public/uploads/'.$kelas->id, $imageName
          );
          $kelas->Poster = $imageName;
        }else{
          $kelas->Poster = $kelas->Poster;
        }
        

        $kelas->save();
        return redirect()->route('class.index');
   	}
   	
   	/*
   	*
   	*   Changes for Destroy
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function destroy ($id){
   	    $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect()->route('class.index');
   	}
   	
   	/*
   	*
   	*   Changes for Show
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function show ($id){
   	    
   	}
   	
   	/*
   	*
   	*   Changes for Edit
   	*   Description :   
   	*   Last edited by : Firdausneonexxa
   	*
   	*/
   	
   	public function edit ($id){
        $kelas = Kelas::find($id);
        return view('kelas.edit',compact('kelas'));
   	}
   		
}
