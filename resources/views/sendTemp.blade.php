@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Send Email template</div>
                 {!! Form::open(array('url'=>'/emailTemplate', 'method'=>'POST','onsubmit'=>'return ValidateEmails()')) !!}
                 <div class="form-group container">
                         {!!Form::hidden('sendMail','N',array('id'=>'sendMail'))!!}
                         {!! Form::select('temp', $templates, null, array('id'=>'temp','class'=>'selectpicker')) !!} </div>
                    <div class="form-group container">
                        {!! Form::text('email','',array('id'=>'email','class'=>'tags','min-tags'=>'3')) !!} </div>
                     <div class="form-group container">
                       {!! Form::submit('Preview',array('id'=>'preview','class'=>'btn-primary')) !!} 
                        <button id="send" class="btn-primary" >Send</button> </div>
                 {!! Form::close() !!}

               
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">

     $(document).on('click','#preview',function(){
        document.getElementById('sendMail').value = 'N';
    }); 

    $(document).on('click','#send',function(){
        document.getElementById('sendMail').value = 'Y';
        //--return true;
        //--$emails = explode(",",$emailids);
   });

    function ValidateEmails() {

        if(document.getElementById('sendMail').value=='Y'){
        
            var emails = document.getElementById('email').value;
            //alert(emails);
            var res = emails.split(",");
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            for(var i = 0; i < res.length; i++) {
                if(!reg.test(res[i])) {
                    alert('Invalid Email Address');
                    return false;
                }
               // return true;
            }    
        }
          
    }

    var yourRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;// Email address
    $('#email').tagsInput({
        width:'300px',
        pattern: yourRegex // default: false
    });

  

      
</script>
@endsection


