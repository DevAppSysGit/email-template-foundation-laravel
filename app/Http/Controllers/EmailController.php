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
    	$emailTemp->tempheader = $request->TempHead;
    	$emailTemp->tempdesc = $request->TempDesc;
    	$emailTemp->tempbody = $request->TempBody;
    	$emailTemp->tempfooter=$request->TempFooter;
    	$emailTemp->save();
        
        return redirect ('emailTemp/'.$emailTemp->id);

        //Session::flash('message', "Email Template created Successfully");

        //return redirect('/SendEmailTemplate'); 

    }

    public function viewEmailTemp()
    {
    	return view('Emailtemp');
    }

    public function viewEmailTemplate()
    {
        return view('EmailTemplate');
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
      
}
