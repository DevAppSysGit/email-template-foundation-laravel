@extends('layouts.app')

@section('content')

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
    <tr><td id="temphead">{{$emailTemp->temp_head}}</td></tr>
    <tr><td id="tempdesc">{{$emailTemp->temp_desc}}</td></tr>
    <tr><td id="tempbody">{{$emailTemp->temp_body}}</td></tr>
  </tbody>
</div>

@endsection