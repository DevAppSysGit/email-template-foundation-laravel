@extends('layouts.app')

@section('content')

<div class="form-style-5" id="divprev">
{!! Form::open(array('url'=>'/emailSave','method'=>'POST','class'=>'form-bootstrap'))!!}


 {!! Form::label('Enter Template Name') !!} {!!Form::text('temp_name',null,['id'=>'temp_name']) !!}
 <div> {!! Form::label('Template Header') !!}</div>
 {!! Form::textarea('TempHead',null,array('id'=>'TempHead','required'=>'required')) !!}
 <div> {!! Form::label('Template Description') !!}</div>
 {!! Form::textarea('TempDesc',null,array('id'=>'TempDesc','required'=>'required')) !!}
 <div> {!! Form::label('Template Body') !!}</div>
 {!! Form::textarea('TempBody',null,array('id'=>'TempBody','required'=>'required')) !!}

<div>

  {!! Form::submit('Create') !!}

</div>


{!! Form::close() !!}
  <button id="preview" name="preview">Preview</button>

</div>

<div id ="divcreate">
    <table class="body" data-made-with-foundation>
    <tr>
      <!-- The class, align, and <center> tag center the container -->
      <td class="float-center" align="center" valign="top">
        <center>
          <!-- The content of your email goes here. -->
      
        </center>
      </td>
    </tr>
  </table>

<button id="back" name="back">Back</button>

 </div>

   
@endsection

@section('scripts')

 <script> 
$('#divcreate').hide();
 $(document).on('click','#preview',function(){
  $('#divprev').hide();
  $('#divcreate').show();
  $('#divcreate').text('Name : '+$('#temp_name').val());
 });
    $(document).ready(function() {

        $('#TempHead').summernote();
        $('#TempDesc').summernote();
        $('#TempBody').summernote();
        $('#TempFooter').summernote();

    });
    </script>
@endsection
