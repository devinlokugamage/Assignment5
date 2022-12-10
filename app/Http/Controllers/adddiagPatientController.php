<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\Request;
//use App\Models\Diagnosis;

class adddiagPatientController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


     public function create()
    {
        return view('admin.adddiag');
    }

    public function store(Request $request)
{

   
 

      $validatedData = $request->validate([
          'fName' => 'required',
          'lName' => 'required',
         'dob' => 'required',
          'email'=>'required',
          'diag'=>'required',
          'refdoc'=>'required',
         
    
     ]);

    Diagnosis::create($request->except(['_token']));

      $viewdata=Diagnosis::orderBy('fName', 'asc')->paginate(5);

        
        return view('admin.adddiag',['diagnosis'=>$viewdata]);

}
}
