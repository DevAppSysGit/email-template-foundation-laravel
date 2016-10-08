<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use App\Http\Requests\EmailTemplateRequest;

use App\Emailtemp;

use Session;

class emailController extends Controller
{
    //
    public function initial()
    {
    	return view('SendEmailTemplate');
    }
    public function emailTempSave(EmailTemplateRequest $request)
    {
    	$emailTemp = new Emailtemp($request->all());
    	$emailTemp->tempname = $request->txttempname;
    	$emailTemp->tempheader = $request->txtheader;
    	$emailTemp->tempdesc = $request->txtdesc;
    	$emailTemp->tempbody = $request->txttempbody;
    	$emailTemp->tempfooter=$request->txtfooter;
        $emailTemp->emailid=$request->txtemail;
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

        Mail::send('Emailtemp', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('prajna@pacesoft.in', 'Prajna Thinkpace');

            $message->to($emailTemp->emailid);

        });

    }

    public function send(Request $request){
    //Logic will go here        
    
    }
      
}
