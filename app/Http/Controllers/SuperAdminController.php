<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
   //Index method for Admin Controller

  
   public function indexadmin()
   {
       return view('patlhome');
   }

   public function __construct()

    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_SUPERADMIN');
    }
}
