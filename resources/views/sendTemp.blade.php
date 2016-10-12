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
                    	<tr><td> {!! Form::label('tname','Select Template Name',array('id'=>'','class'=>'')) !!}</td>
                    	<td>{!! Form::select('temp', $templates, null, array('id'=>'temp','placeholder' => 'Pick a Template')) !!}</td></tr>

                        {{$templates}}

                    	<tr><td> {!! Form::label('email','Enter Email Id',array('id'=>'','class'=>'')) !!}</td>
                    	<td> {!! Form::text('email','',array('id'=>'email','class'=>'tags')) !!} </td></tr>
                    	<tr><td align="center"> {!! Form::submit('Preview') !!} 
                    	<input type="submit" name="send" value="Send"></td></tr>
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
</script>
@endsection


