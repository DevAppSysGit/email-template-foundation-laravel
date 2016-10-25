@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div><br>

                    <div class="form-group container">
                        <button class="btn btn-default"><a href="{{route('get.basicTemp')}}" class="text-primary">Create Template</a> </button> </div>
                   
                     <div class="form-group container">
                        <button class="btn btn-default"><a href="{{route('get.sendTemp')}}" class="text-primary">Send Template</a></button> </div>
                </div>

                </div>
               
            </div>
        </div>

@endsection
