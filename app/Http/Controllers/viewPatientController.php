<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;


class viewPatientController extends Controller
{
  
    
    public function show()
    {

        $viewdata=Patient::orderBy('fName', 'asc')->paginate(3);

        
        return view('patients.viewpatients',['patients'=>$viewdata]);

    }
}