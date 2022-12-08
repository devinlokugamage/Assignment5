<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/', function () {
    return view('pages/home1');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/patlogin', [App\Http\Controllers\patHomeController::class, 'index'])->name('patlogin');

//Route::get('/patlogin', [App\Http\Controllers\AdminController::class, 'indexadmin'])->name('patlogin');

Auth::routes();


Route::get('/addPatient', ['middleware' => 'auth', function() {
    // Only authenticated users may enter...
     return view('pages/addPatient');
}]);

Route::post('/addAnewPatient', [App\Http\Controllers\PatientController::class,'insertform']);


// Route::get('/admin', 'AdminController@index');

// Route::get('/superadmin', 'SuperAdminController@index')

Route::get('/patients/create', 'App\Http\Controllers\PatientController@create');
Route::get('/patients/sendmsg', 'App\Http\Controllers\sendmsgPatientController@create');


Route::get('/patients/adddiag', 'App\Http\Controllers\adddiagPatientController@create');

Route::get('/patients/view', [App\Http\Controllers\viewPatientController::class, 'show']);

Route::get('/patients/viewinfo', [App\Http\Controllers\viewinfoPatientController::class, 'show']);

Route::get('/patients/viewdiag', [App\Http\Controllers\viewdiagPatientController::class, 'show']);

Route::get('/patients/viewmsg', [App\Http\Controllers\viewmsgPatientController::class, 'show']);

Route::post('/patients', 'App\Http\Controllers\PatientController@store');

Route::post('/patients/adddiag', 'App\Http\Controllers\adddiagPatientController@store');

Route::get('/patients/edit/{patientId}', 'App\Http\Controllers\editDeletePatientController@editPatient');
Route::post('/patients/view', 'App\Http\Controllers\editDeletePatientController@edit');

Route::get('/patients/delete/{patientId}', 'App\Http\Controllers\editDeletePatientController@delete');

Route::post('/patients/showView',  [App\Http\Controllers\viewPatientController::class, 'show']);

Route::post('/patients/showViewInfo',  [App\Http\Controllers\viewinfoPatientController::class, 'show']);

//Route::get('/home/register', 'App\Http\Controllers\Auth\RegisterController@create');