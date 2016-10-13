<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

use App\Http\Requests\EmailTemplateRequest;

use App\Emailtemp;

use Session;

use Mail;

use Intervention\Image\ImageManagerStatic as Image;

use DomDocument; 

class EmailController extends Controller
{
    //
   public function emailTempSave(Request $request)
    {


        //$emailTemp = new Emailtemp($request->all());
        $temp_name = $request->temp_name;
        $temp_head = $request->temp_head;
        $temp_desc = $request->temp_desc;
        $temp_body = $request->temp_body;

        //$this->validate($request, [
            //'message' => 'required'
        //]);
        
        //$message=$request->input('message');
        //$product=new Product;
        $domhead = new DomDocument();
        $domhead->loadHtml($temp_head, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $domhead->getElementsByTagName('img');
       // foreach <img> in the submited message
        foreach($images as $img){
            $src = $img->getAttribute('src');
            
            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){                
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];                
                // Generating a random filename
                $filename = uniqid();
                $filepath = "/images/$filename.$mimetype";

                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                  // resize if required
                  /* ->resize(300, 200) */
                  ->encode($mimetype, 100)  // encode file to the specified mimetype
                  ->save(public_path($filepath));                
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!-
        
        //$product->message = $dom->saveHTML();
        //$product->save();

    	$emailTemp = new Emailtemp($request->all());
        $emailTemp->temp_name = $request->temp_name;
    	$emailTemp->temp_head = $domhead->saveHTML();
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
        $val = $request->sendMail;
        //return $val;
        if ($val == 'N') {

            $id = $request->temp;
            $emailTemp = Emailtemp::find($id);
            return view('EmailTemplate',compact('emailTemp'));

        }else{

            $id = $request->temp;
            $emailTemp = Emailtemp::find($id);
           // return view('EmailTemplate',compact('emailTemp'));

            $temphead = $emailTemp->temp_head;
            $tempdesc = $emailTemp->temp_desc;
            $tempbody = $emailTemp->temp_body;
            $emailids = $request->email;

            //return view('test',compact('temphead','tempdesc','tempbody'));

            $emails = explode(",",$emailids);

            Mail::send('test', compact('temphead','tempdesc','tempbody'), function ($message) use ($emails)
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

        }
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
