@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                     <button><a href="{{route('get.form')}}">Create Template</a></button>
                </div>

                <div class="panel-body">
                  <button><a href="{{route('get.sendTemp')}}">Send Template</a></button>
                </div>

                <div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
