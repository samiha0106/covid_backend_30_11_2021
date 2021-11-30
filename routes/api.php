<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\RegistrationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/registrations', 'RegistrationController@store');
Route::get('/registrations', 'RegistartionController@show');
Route::get('/registrations/{id}','RegistartionController@showId');
Route::put('/registrations/{id}','RegistrationController@updateId');
Route::delete('/registrations/{id}','RegistrationController@deleteId');

Route::post('/hospitals', 'HospitalController@store');
Route::get('/hospitals', 'HospitalController@show');
Route::get('/hospitals/{id}','HospitalController@showId');
Route::put('/hospitals/{id}','HospitalController@updateId');
Route::delete('/hospitals/{id}','HospitalController@deleteId');
