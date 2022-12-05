<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;


class editDeletePatientController extends Controller
{
  
    
    public function editPatient($patientId)
    {

      
        $patient = Patient::where('ID','=',$patientId)->first();
        
        return view('patients.editPatient',['patient'=>$patient]);

    }

    public function edit(Request $request)
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

        $id =  intval($request->get('id'));
        Patient::where('id',$id )->update(array( 'fName'=>$request->get('fName'),
                                                'lName'=>$request->get('lName'),
                                                 'gender'=>$request->get('gender'),
                                                'dob'=>$request->get('dob'),
                                                'address' =>$request->get('address'),
                                                'city' =>$request->get('city'),
                                                'province' =>$request->get('province'),
                                                'postalCode' =>$request->get('postalCode'),
                                                'phoneNo'=>$request->get('phoneNo'),
                                                'email'=>$request->get('email'),
                                                'currentMeds'=>$request->get('currentMeds'),
                                                'allergies'=>$request->get('allergies'),
                                                'referingDoctor'=>$request->get('referingDoctor')                                              
                                                ));

      $viewdata=Patient::orderBy('fName', 'asc')->paginate(5);

        
        return view('patients.viewpatients',['patients'=>$viewdata]);
    }

    public function delete($patientId)
    {
    
         Patient::destroy($patientId);
         $viewdata=Patient::orderBy('fName', 'asc')->paginate(5);

        
        return view('patients.viewpatients',['patients'=>$viewdata]);
       
    }
}