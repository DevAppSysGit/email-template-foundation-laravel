<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width" />

  <title>Title</title>

     {!! Html::style('css/frmcss.css') !!}

  	 {!! Html::style('css/email.css') !!}	

  </head>

<body>
<div class="form-style-5">
{!! Form::open(array('url'=>'/emailSave','method'=>'POST','class'=>'form-bootstrap','style'=>'border:solid gray 1px'))!!}

@if (Session::has('message'))
   {{ Session::get('message') }}
@endif

<h1>Create Email Template</h1>
 <fieldset>
 	<legend><span class="number">1</span>Email Id's</legend>
		{!!Form::text('txtemail','',array('id'=>'temail','class'=>'tags')) !!}
 </fieldset>

<fieldset>
<legend><span class="number">2</span> Template Name</legend>
 {!!Form::text('txttempname','',array('id'=>'','class'=>'')) !!}
</fieldset>

<fieldset>
<legend><span class="number">3</span> Template Header</legend>
{!!Form::text('txtheader','',array('id'=>'','class'=>'')) !!}
 </fieldset>

<fieldset>
<legend><span class="number">4</span> Description</legend>
{!!Form::textarea('txtdesc','',array('id'=>'','class'=>'')) !!}
 </fieldset>

 <fieldset>
 <legend><span class="number">5</span>Template Body</legend>
   {!!Form::textarea('txttempbody','',array('id'=>'','class'=>'')) !!}
 </fieldset>

 <fieldset>
   <legend><span class="number">6</span>Template Footer</legend>
   {!!Form::text('txtfooter','',array('id'=>'','class'=>'')) !!}
 </fieldset>

<fieldset>
  {!!Form::submit('Create') !!}
</fieldset>

{!!Form::close()!!}

</div>
  {!!Html::script('js/jquery.min.js') !!}
   {!! Html::script('js/emailfunction.js') !!}
   <script type="text/javascript">
$('#temail').tagsInput({width:'auto'});
</script>
</body>
</html>