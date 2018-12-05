<?php

use Illuminate\Http\Request;
use app\Job;

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

Route::get('job','JobController@index');

Route::get('job/{id}','JobController@show');

Route::post('job','JobController@store');

Route::put('job','JobController@update');

Route::delete('job','JobController@delete');


/* Candidate */
Route::get('candidate','CandidateController@index');

Route::get('candidate/{id}','CandidateController@show');

Route::post('candidate','CandidateController@store');

Route::put('candidate','CandidateController@update');

Route::delete('candidate','CandidateController@delete');

/* Companies */
Route::get('companies','CompanyController@index');

Route::get('companies/{id}','CompanyController@show');

Route::post('companies','CompanyController@store');

Route::put('companies','CompanyController@update');

Route::delete('companies','CompanyController@delete');


Route::post('register','auth\RegisterController@register');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
