<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
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
        return view('admin.create');
    }

    public function store(Request $request)
{

   
 

    $validatedData = $request->validate([
        'fName' => 'required',
        'lName' => 'required',
       'gender' => 'required',
       'dob' => 'required',
        'address' => 'required',
        'city' => 'required',
        'province' => 'required',
        'postalCode' => 'required',
        'phoneNo' =>'required',
        'email'=>'required',
    
    ]);

    Patient::create($request->except(['_token']));

      $viewdata=Patient::orderBy('fName', 'asc')->paginate(5);

        
        return view('patients.viewpatients',['patients'=>$viewdata]);

}
}
