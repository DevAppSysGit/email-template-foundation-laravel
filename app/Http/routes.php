<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Route;

Route::post('/emailSave', 'EmailController@emailTempSave');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/sendEmail','EmailController@initial');


Route::get('/emailTemp','EmailController@viewEmailTemp');

Route::get('/emailTemplate','EmailController@viewEmailTemplate');

Route::get('/emailTemp/{emailTemp}','EmailController@showEmailTemp');

// This is route file...
 
Route::get('/form','EmailController@sendForm');

Route::get('/test','EmailController@test');

