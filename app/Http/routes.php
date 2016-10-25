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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');

Route::post('/emailSave','TemplateController@tempSave');

Route::get('/sendTemp',['as'=>'get.sendTemp','uses'=>'TemplateController@sendTemp']);

Route::post('/emailTemplate','TemplateController@viewEmailTemplate');

Route::get('/basicTemp',['as'=>'get.basicTemp','uses'=>'TemplateController@sendForm']);

//Route::get('/formPreview',['as'=>'get.formPreview','uses'=>'EmailController@previewForm']);

//Route::get('/testtocheck','TemplateController@testtocheck');

//Route::get('/test','TemplateController@test');

//Route::get('/emailtemptest','TemplateController@emailtemptest');

//Route::post('/emailSave','EmailController@emailTempSave');

//Route::get('/sendEmail','EmailController@initial');

//Route::get('/emailTemp','EmailController@viewEmailTemp');

//Route::get('/emailTemp/{emailTemp}','EmailController@showEmailTemp');

// This is route file...
 
//Route::post('/form','EmailController@sendForm');

//Route::get('/form',['as'=>'get.form','uses'=>'EmailController@sendForm']);

//Route::get('/hero','TemplateController@hero');

//Route::post('/sendMail', 'EmailController@send');

//Route::get('/CreateTemp','EmailController@createTemp');

//Route::get('/test','EmailController@test');

//Route::get('/testingS','EmailController@testingS');

//Route::get('blade', function () {
  //  return view('child');
//});

