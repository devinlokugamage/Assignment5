<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;


class viewmsgPatientController extends Controller
{
  
    
    public function show()
    {

        $viewdata=Patient::orderBy('fName', 'asc')->paginate(3);

        
        return view('patients.viewmsg',['patients'=>$viewdata]);

    }
}