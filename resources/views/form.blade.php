@extends('layouts.app')

@section('content')

<div class="form-style-5" id="divcreate">
 <table class="button rounded">
  <tr>
    <td>
      <table>
        <tr>
          <td id="preview">Preview</td>
        </tr>
      </table>
    </td>
  </tr>
</table>

  {!! Form::open(array('url'=>'/emailSave','method'=>'POST','class'=>'form-bootstrap'))!!}
  {!! Form::label('Enter Template Name') !!} {!!Form::text('temp_name',null,['id'=>'temp_name']) !!}
  <div> {!! Form::label('Template Header') !!}</div>
  {!! Form::textarea('temp_head',null,array('id'=>'temp_head','required'=>'required')) !!}
  <div> {!! Form::label('Template Description') !!}</div>
  {!! Form::textarea('temp_desc',null,array('id'=>'temp_desc','required'=>'required')) !!}
  <div> {!! Form::label('Template Body') !!}</div>
  {!! Form::textarea('temp_body',null,array('id'=>'temp_body','required'=>'required')) !!}

 <div> {!! Form::submit('Create') !!} </div>

  {!! Form::close() !!}

</div>

<div id ="divprev">

<table class="button rounded">
  <tr>
    <td>
      <table>
        <tr>
          <td id="back">Back</td>
        </tr>
      </table>
    </td>
  </tr>
</table>

  <table align="center" class="container" border="1">
  <tbody>
    <tr><td id="temphead"></td></tr>
    <tr><td id="tempdesc"></td></tr>
    <tr><td id="tempbody"></td></tr>
  </tbody>
</div>

@endsection

@section('scripts')

<script> 
  $('#divprev').hide();
  $(document).on('click','#preview',function(){
  $('#divcreate').hide();
  $('#divprev').show();
  document.getElementById('temphead').innerHTML = document.getElementById('temp_head').value
  document.getElementById('tempdesc').innerHTML = document.getElementById('temp_desc').value
  document.getElementById('tempbody').innerHTML= document.getElementById('temp_body').value
  });

 $(document).on('click','#back',function(){
  $('#divcreate').show();
  $('#divprev').hide();
 });

  $(document).ready(function() {

  $('#temp_head').summernote();
  $('#temp_desc').summernote();
  $('#temp_body').summernote();

 });
</script>


@endsection
