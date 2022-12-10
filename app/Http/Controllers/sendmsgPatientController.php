<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class sendmsgPatientController extends Controller
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
        return view('admin.sendmsg');
    }

    public function store(Request $request)
{

   
 

  
    $validatedData = $request->validate([
        'fName' => 'required',
        'lName' => 'required',
        'email'=>'required',
        'msgdt'=>'required',

       
  
   ]);

    Message::create($request->except(['_token']));

      $viewdata=Message::orderBy('fName', 'asc')->paginate(5);

        
        return view('admin.sendmsg',['messages'=>$viewdata]);

}
}
