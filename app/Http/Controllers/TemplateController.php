<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Template;

use Mail;

class TemplateController extends Controller
{
    //
    public function tempSave(Request $request){

       // return $request->temp_body;
    	$temp = new Template($request->all());
    	$temp->temp_name = $request->temp_name;
    	$temp->temp_body = $request->temp_body;
    	$temp->save();

    	return redirect('/home');
    }

    public function sendForm(){
        return view('basicTemp');
    }

    public function sendTemp() {
        $templates = Template::lists('temp_name','id');
        return view('sendTemp',compact('templates'));
    } 

    public function viewEmailTemplate(Request $request)
    {
        $val = $request->sendMail;
        //return $val;
        if ($val == 'N') {

            $id = $request->temp;
            $emailTemp = Template::find($id);
            return view('emailPreview',compact('emailTemp'));

        }else{

            $id = $request->temp;
            $emailTemp = Template::find($id);
           // return view('EmailTemplate',compact('emailTemp'));

            $emailids = $request->email;

            //return view('test',compact('temphead','tempdesc','tempbody'));

            $emails = explode(",",$emailids);

            Mail::send('emailPreview', compact('emailTemp'), function ($message) use ($emails)
            {
                //From
                $message->from('prajna@pacesoft.in', 'Prajna K');
                
                //Add a subject
                $message->subject("Email Template - Prajna");

                //Multiple Mail Id's
                foreach ($emails as $email) {
                 $message->to($email);
                }
            });

            return redirect('/sendTemp');


        }
    }
}

    /* public function test(){
        return view('basic');
    }

    public function testtocheck(){
        return view('testtocheck');
    }

    public function emailtemptest(){
        return view('emailtemptest');
    }
     public function hero(){
        return view('hero');
    }

    public function testEmail(){
        return view('basicTemp');
    } */

