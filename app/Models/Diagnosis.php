<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
     protected $fillable = [
        "_token",
        'id',
          'fName',
           'lName',
           'gender',
           'dob',
           'email',
           'diagnosis',
           'refrDoc',
   
          
    ];
}