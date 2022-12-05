<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
     protected $fillable = [
        "_token",
        'id',
          'fName',
           'lName',
           'gender',
           'dob',
           'address', 
          'city',
          'province',
           'postalCode',
          'phoneNo',
           'email',
          'currentMeds',
           'allergies',
          'referingDoctor'
          
    ];
}
