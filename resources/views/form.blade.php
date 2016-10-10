<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Email Template</title> <!--
  {!! Html::style('css/bootstrap.css') !!}
  {!! Html::style('css/summernote.css') !!} -->
  {!! Html::style('css/frmcss.css') !!}
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
</head>
<body>
@if (Session::has('message'))
   {{ Session::get('message') }}
@endif
<div class="form-style-5">
{!! Form::open(array('url'=>'/emailSave','method'=>'POST','class'=>'form-bootstrap'))!!}


{{$title}}

 {!! Form::textarea('TempHead',null,array('id'=>'TempHead','required'=>'required')) !!}
 {!! Form::textarea('TempDesc',null,array('id'=>'TempDesc','required'=>'required')) !!}
 {!! Form::textarea('TempBody',null,array('id'=>'TempBody','required'=>'required')) !!}
 {!! Form::textarea('TempFooter',null,array('id'=>'TempFooter','required'=>'required')) !!}

  <!--
  {!! Html::script('js/jquery.js') !!}
  {!! Html::script('js/bootstrap.js') !!}
  {!! Html::script('js/summernote.js') !!}-->

<div>
  {!! Form::submit('Create') !!}
</div>

{!! Form::close() !!}
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

  <script> 
    $(document).ready(function() {

        $('#TempHead').summernote();
        $('#TempDesc').summernote();
        $('#TempBody').summernote();
        $('#TempFooter').summernote();

    });
  </script>

</body>
</html>