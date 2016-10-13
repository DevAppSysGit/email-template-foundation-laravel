@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Send Email template</div>

                <div class="panel-body">
                    {!! Form::open(array('url'=>'/emailTemplate', 'method'=>'POST')) !!}
                    <table>
                    {!!Form::hidden('sendMail','N',array('id'=>'sendMail'))!!}
                    	<tr><td> {!! Form::select('temp', $templates, null, array('id'=>'temp','placeholder' => 'Pick a Template')) !!}</td></tr>

                        {{-- {{$templates}} --}}

                    	<tr><td> {!! Form::text('email','',array('id'=>'email','class'=>'tags')) !!} </td></tr>
                    	<tr><td align="center"> {!! Form::submit('Preview',array('id'=>'preview')) !!} 
                    	<button id="send", onclick="this.form.submit()" >Send</button></td></tr>
                    </table>
                    {!! Form::close() !!}
                </div>

                <div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
    $('#email').tagsInput({width:'auto'});

    $(document).on('click','#send',function(){
        document.getElementById('sendMail').value = 'Y';
    });

     $(document).on('click','#preview',function(){
        document.getElementById('sendMail').value = 'N';
    });    
</script>
@endsection


