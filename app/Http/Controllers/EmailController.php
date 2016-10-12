<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use App\Http\Requests\EmailTemplateRequest;

use App\Emailtemp;

use Session;

class EmailController extends Controller
{
    //
    public function initial()
    {
    	return view('SendEmailTemplate');
    }

    public function emailTempSave(Request $request)
    {
    	$emailTemp = new Emailtemp($request->all());
        $emailTemp->temp_name = $request->temp_name;
    	$emailTemp->temp_head = $request->temp_head;
    	$emailTemp->temp_desc = $request->temp_desc;
    	$emailTemp->temp_body = $request->temp_body;
    	$emailTemp->save();
        
         return redirect ('form/');

        //Session::flash('message', "Email Template created Successfully");

        //return redirect('/SendEmailTemplate'); 

    }

    public function viewEmailTemp()
    {
    	return view('Emailtemp');
    }

    public function viewEmailTemplate(Request $request)
    {

        $id = $request->temp;
        $emailTemp = Emailtemp::find($id);
        return view('EmailTemplate',compact('emailTemp'));
    }

    public function showEmailTemp($id) {

        //$AllemailTemp = Emailtemp::orderBy('created_at', 'asc')->get();
        $emailTemp = Emailtemp::find($id);


        return view('Emailtemp',[
            'emailTemp' => $emailTemp 
            ]);

    }

    public function sendForm(){
        //Logic will go here
        $title ="Project";        
        return view('form',compact('title'));
    }

   public function test(){
        return view('test');
    }

    public function testingS(){
        return view('testingSummerNote');
    }

    public function sendTemp() {
        $templates = Emailtemp::lists('temp_name','id');
        return view('sendTemp',compact('templates'));
    }      
}
