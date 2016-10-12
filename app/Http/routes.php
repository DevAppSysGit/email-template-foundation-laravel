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


Route::post('/emailSave','EmailController@emailTempSave');

Route::get('/sendEmail','EmailController@initial');

Route::get('/emailTemp','EmailController@viewEmailTemp');

Route::post('/emailTemplate','EmailController@viewEmailTemplate');

Route::get('/emailTemp/{emailTemp}','EmailController@showEmailTemp');

// This is route file...
 
//Route::post('/form','EmailController@sendForm');

Route::get('/form',['as'=>'get.form','uses'=>'EmailController@sendForm']);

Route::get('/formPreview',['as'=>'get.formPreview','uses'=>'EmailController@previewForm']);

Route::get('/sendTemp',['as'=>'get.sendTemp','uses'=>'EmailController@sendTemp']);

Route::get('/test','EmailController@test');

Route::get('/testingS','EmailController@testingS');

Route::get('blade', function () {
    return view('child');
});

