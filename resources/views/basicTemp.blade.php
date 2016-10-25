@extends('layouts.app')

@section('content')


    <title>Title</title>
    <style>


    @media only screen {
    html {
        min-height: 100%;
        background: #f3f3f3
        }
    }

@media only screen and (max-width: 596px) {
    .small-float-center {
        margin: 0 auto;
        float: none;
        text-align: center
        }
    .small-text-center {
        text-align: center
        }
    .small-text-left {
        text-align: left
        }
    .small-text-right {
        text-align: right
        }
    }
@media only screen and (max-width: 596px) {
    .hide-for-large {
        display: block;
        width: auto;
        overflow: visible;
        max-height: none;
        font-size: inherit;
        line-height: inherit
        }
    }
@media only screen and (max-width: 596px) {
    table.body table.container .hide-for-large, table.body table.container .row.hide-for-large {
        display: table;
        width: 100%
        }
    }
@media only screen and (max-width: 596px) {
    table.body table.container .callout-inner.hide-for-large {
        display: table-cell;
        width: 100%
        }
    }
@media only screen and (max-width: 596px) {
    table.body table.container .show-for-large {
        display: none;
        width: 0;
        mso-hide: all;
        overflow: hidden
        }
    }
@media only screen and (max-width: 596px) {
    table.body img {
        width: auto;
        height: auto
        }
    table.body center {
        min-width: 0
        }
    table.body .container {
        width: 95%
        }
    table.body .columns, table.body .column {
        height: auto;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 16px;
        padding-right: 16px
        }
    table.body .columns .column, table.body .columns .columns, table.body .column .column, table.body .column .columns {
        padding-left: 0;
        padding-right: 0
        }
    table.body .collapse .columns, table.body .collapse .column {
        padding-left: 0;
        padding-right: 0
        }
    td.small-1, th.small-1 {
        display: inline-block;
        width: 8.33333%
        }
    td.small-2, th.small-2 {
        display: inline-block;
        width: 16.66667%
        }
    td.small-3, th.small-3 {
        display: inline-block;
        width: 25%
        }
    td.small-4, th.small-4 {
        display: inline-block;
        width: 33.33333%
        }
    td.small-5, th.small-5 {
        display: inline-block;
        width: 41.66667%
        }
    td.small-6, th.small-6 {
        display: inline-block;
        width: 50%
        }
    td.small-7, th.small-7 {
        display: inline-block;
        width: 58.33333%
        }
    td.small-8, th.small-8 {
        display: inline-block;
        width: 66.66667%
        }
    td.small-9, th.small-9 {
        display: inline-block;
        width: 75%
        }
    td.small-10, th.small-10 {
        display: inline-block;
        width: 83.33333%
        }
    td.small-11, th.small-11 {
        display: inline-block;
        width: 91.66667%
        }
    td.small-12, th.small-12 {
        display: inline-block;
        width: 100%
        }
    .columns td.small-12, .column td.small-12, .columns th.small-12, .column th.small-12 {
        display: block;
        width: 100%
        }
    table.body td.small-offset-1, table.body th.small-offset-1 {
        margin-left: 8.33333%;
        margin-left: 8.33333%
        }
    table.body td.small-offset-2, table.body th.small-offset-2 {
        margin-left: 16.66667%;
        margin-left: 16.66667%
        }
    table.body td.small-offset-3, table.body th.small-offset-3 {
        margin-left: 25%;
        margin-left: 25%
        }
    table.body td.small-offset-4, table.body th.small-offset-4 {
        margin-left: 33.33333%;
        margin-left: 33.33333%
        }
    table.body td.small-offset-5, table.body th.small-offset-5 {
        margin-left: 41.66667%;
        margin-left: 41.66667%
        }
    table.body td.small-offset-6, table.body th.small-offset-6 {
        margin-left: 50%;
        margin-left: 50%
        }
    table.body td.small-offset-7, table.body th.small-offset-7 {
        margin-left: 58.33333%;
        margin-left: 58.33333%
        }
    table.body td.small-offset-8, table.body th.small-offset-8 {
        margin-left: 66.66667%;
        margin-left: 66.66667%
        }
    table.body td.small-offset-9, table.body th.small-offset-9 {
        margin-left: 75%;
        margin-left: 75%
        }
    table.body td.small-offset-10, table.body th.small-offset-10 {
        margin-left: 83.33333%;
        margin-left: 83.33333%
        }
    table.body td.small-offset-11, table.body th.small-offset-11 {
        margin-left: 91.66667%;
        margin-left: 91.66667%
        }
    table.body table.columns td.expander, table.body table.columns th.expander {
        display: none
        }
    table.body .right-text-pad, table.body .text-pad-right {
        padding-left: 10px
        }
    table.body .left-text-pad, table.body .text-pad-left {
        padding-right: 10px
        }
    table.menu {
        width: 100%
        }
    table.menu td, table.menu th {
        width: auto;
        display: inline-block
        }
    table.menu.vertical td, table.menu.vertical th, table.menu.small-vertical td, table.menu.small-vertical th {
        display: block
        }
    table.menu[align="center"] {
        width: auto
        }
    table.button.small-expand, table.button.small-expanded {
        width: 100%
        }
    table.button.small-expand table, table.button.small-expanded table {
        width: 100%
        }
    table.button.small-expand table a, table.button.small-expanded table a {
        text-align: center;
        width: 100%;
        padding-left: 0;
        padding-right: 0
        }
    table.button.small-expand center, table.button.small-expanded center {
        min-width: 0
        }
    }
    </style>  

    </head>

    {!! Form::open(array('url'=>'/emailSave','method'=>'POST')) !!}

  <body style="-moz-box-sizing:border-box; -ms-text-size-adjust:100%; -webkit-box-sizing:border-box; -webkit-text-size-adjust:100%; box-sizing:border-box; margin:0; min-width:100%; padding:0; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; text-align:left; font-size:16px; width:100%" align="left" width="100%">


{!!Form::text('temp_name',null,['id'=>'temp_name','class'=>'form-control','placeholder'=>'Template Name','required'=>'required']) !!}

  <textarea rows="30", id="temp_body", name="temp_body", class="form-control mceEditor">

    <!-- <style> -->
    <table class="body" id="temp_body" data-made-with-foundation="" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top; background:#f3f3f3; height:100%; width:100%; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; font-size:16px" align="left" valign="top" height="100%" width="100%">
      <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
        <td class="float-center" align="center" valign="top" style="-moz-hyphens:auto; -webkit-hyphens:auto; hyphens:auto; word-wrap:break-word; padding:0; text-align:center; vertical-align:top; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; font-size:16px; float:none; border-collapse:collapse">
          <center data-parsed="" style="min-width:580px; width:100%" width="100%">
            <!-- move the above styles into your custom stylesheet -->
            <table bgcolor="#8a8a8a" align="center" class="wrapper header float-center" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:center; vertical-align:top; width:100%; background:#8a8a8a; float:none; margin:0 auto" valign="top" width="100%">
              <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                <td class="wrapper-inner" style="-moz-hyphens:auto; -webkit-hyphens:auto; hyphens:auto; word-wrap:break-word; padding:20px; text-align:left; vertical-align:top; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; font-size:16px; border-collapse:collapse" align="left" valign="top">
                  <table align="inherit" class="container" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:inherit; vertical-align:top; background:#8a8a8a; margin:0 auto; width:580px" valign="top" width="100%">
                    <tbody>
                      <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                        <td style="-moz-hyphens:auto; -webkit-hyphens:auto; hyphens:auto; word-wrap:break-word; padding:0; text-align:left; vertical-align:top; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; font-size:16px; border-collapse:collapse" align="left" valign="top">
                          <table class="row collapse" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top; position:relative; width:100%; display:table" align="left" valign="top" width="100%">
                            <tbody>
                              <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                <th class="small-6 large-6 columns first" valign="middle" style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; padding:0; text-align:left; font-size:16px; padding-bottom:0; padding-left:0; padding-right:0; width:298px" align="left" width="298">
                                  <table style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                    <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                      <th style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; font-size:16px; border: 1px;" align="left"> <img src="http://www.thinkpace.in/storage/thinkpace_logo.png" style="-ms-interpolation-mode:bicubic; clear:both; display:block; max-width:100%; outline:none; text-decoration:none; width:auto" width="auto"> </th>
                                    </tr>
                                  </table>
                                </th>
                                <th class="small-6 large-6 columns last" valign="middle" style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; padding:0; text-align:left; font-size:16px; padding-bottom:0; padding-left:0; padding-right:0; width:298px" align="left" width="298">
                                  <table style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                    <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                      <th style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; font-size:16px" align="left">
                                        <p class="text-right" style="margin:0; color:#fff; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; padding:0; text-align:right; font-size:16px; margin-bottom:0" align="right">BASIC</p>
                                      </th>
                                    </tr>
                                  </table>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </table>
            <table align="center" class="container float-center" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:center; vertical-align:top; background:#fefefe; margin:0 auto; width:580px; float:none" valign="top" >
              <tbody>
                <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                  <td style="-moz-hyphens:auto; -webkit-hyphens:auto; hyphens:auto; word-wrap:break-word; padding:0; text-align:left; vertical-align:top; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; font-size:16px; border-collapse:collapse;max-width: 600px; display: block; clear: both;" align="left" valign="top">
                    <table class="spacer" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top; width:100%" align="left" valign="top" width="100%">
                      <tbody>
                        <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                          <td height="16px" style="-moz-hyphens:auto; -webkit-hyphens:auto; hyphens:auto; word-wrap:break-word; padding:0; text-align:left; vertical-align:top; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:16px; margin:0; font-size:16px; mso-line-height-rule:exactly; border-collapse:collapse" align="left" valign="top"> </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top; position:relative; width:100%; display:table" align="left" valign="top" width="100%">
                      <tbody>
                        <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                          <th class="small-12 large-12 columns first last" style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; padding:0; text-align:left; font-size:16px; padding-bottom:16px; padding-left:16px; padding-right:16px; width:100%" align="left" width="100%">
                            <table style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                              <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                <th style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; font-size:16px" align="left">
                                  <h1 style="color:inherit; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; margin-bottom:10px; word-wrap:normal; font-size:34px" align="left">Hi, Susan Calvin</h1>
                                  <p class="lead" style="margin:0; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.6; padding:0; text-align:left; font-size:20px; margin-bottom:10px" align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, iste, amet consequatur a veniam.</p>
                                  <p style="margin:0; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; padding:0; text-align:left; font-size:16px; margin-bottom:10px" align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut optio nulla et, fugiat. Maiores accusantium nostrum asperiores provident, quam modi ex inventore dolores id aspernatur architecto odio minima perferendis, explicabo.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quos quasi itaque beatae natus fugit provident delectus, magnam laudantium odio corrupti sit quam. Optio aut ut repudiandae velit distinctio asperiores?</p>
                                  <table class="callout" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top; margin-bottom:16px" align="left" valign="top">
                                    <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                      <th class="callout-inner primary" style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:10px; text-align:left; font-size:16px; background:#def0fc; border:1px solid #444; width:100%" align="left" width="100%">
                                        <p style="margin:0; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; padding:0; text-align:left; font-size:16px; margin-bottom:10px" align="left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit repellendus natus, sint ea optio dignissimos asperiores inventore a molestiae dolorum placeat repellat excepturi mollitia ducimus unde doloremque
                                          ad, alias eos!</p>
                                      </th>
                                      <th class="expander" style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; font-size:16px; visibility:hidden; width:0" align="left" width="0"></th>
                                    </tr>
                                  </table>
                                </th>
                                <th class="expander" style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; font-size:16px; visibility:hidden; width:0" align="left" width="0"></th>
                              </tr>
                            </table>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <table class="wrapper secondary" align="left" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top; width:100%; background:#f3f3f3" valign="top">
                      <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                        <td class="wrapper-inner" style="-moz-hyphens:auto; -webkit-hyphens:auto; hyphens:auto; word-wrap:break-word; padding:0; text-align:left; vertical-align:top; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; font-size:16px; border-collapse:collapse" align="left" valign="top">
                          <table class="spacer" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top; width:100%" align="left" valign="top" width="100%">
                            <tbody>
                              <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                <td height="16px" style="-moz-hyphens:auto; -webkit-hyphens:auto; hyphens:auto; word-wrap:break-word; padding:0; text-align:left; vertical-align:top; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:16px; margin:0; font-size:16px; mso-line-height-rule:exactly; border-collapse:collapse" align="left" valign="top"> </td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="row" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top; position:relative; width:100%; display:table" align="left" valign="top">
                            <tbody>
                              <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                <th class="small-12 large-6 columns first" style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; padding:0; text-align:left; font-size:16px; padding-bottom:16px; padding-left:16px; padding-right:8px; width:50%" align="left">
                                  <table style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                    <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                      <th style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; font-size:16px" align="left">
                                        <h5 style="color:inherit; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; margin-bottom:10px; word-wrap:normal; font-size:20px" align="left">Connect With Us:</h5>
                                        <table class="menu vertical" style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top;" align="left" valign="top">
                                          <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                            <td style="-moz-hyphens:auto; -webkit-hyphens:auto; hyphens:auto; word-wrap:break-word; padding:0; text-align:left; vertical-align:top; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; font-size:16px; border-collapse:collapse" align="left" valign="top">
                                              <table style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                  <th style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; padding:10px; text-align:left; font-size:16px; float:none; padding-right:0; display:block" class="menu-item float-center" align="left"><a href="#" style="color:#2199e8; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; text-decoration:none; width:100%" align="left">Twitter</a></th>
                                                  <th style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; padding:10px; text-align:left; font-size:16px; float:none; padding-right:0; display:block" class="menu-item float-center" align="left"><a href="#" style="color:#2199e8; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; text-decoration:none; width:100%" align="left">Facebook</a></th>
                                                  <th style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; padding:10px; text-align:left; font-size:16px; float:none; padding-right:0; display:block" class="menu-item float-center" align="left"><a href="#" style="color:#2199e8; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; text-decoration:none; width:100%" align="left">Google +</a></th>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </th>
                                    </tr>
                                  </table>
                                </th>
                                <th class="small-12 large-6 columns last" style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0 auto; padding:0; text-align:left; font-size:16px; padding-bottom:16px; padding-left:8px; padding-right:16px; width:50%" align="left">
                                  <table style="border-collapse:collapse; border-spacing:0; padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                    <tr style="padding:0; text-align:left; vertical-align:top" align="left" valign="top">
                                      <th style="color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; font-size:16px" align="left">
                                        <h5 style="color:inherit; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; margin-bottom:10px; word-wrap:normal; font-size:20px" align="left">Contact Info:</h5>
                                        <p style="margin:0; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; padding:0; text-align:left; font-size:16px; margin-bottom:10px" align="left">Phone: 408-341-0600</p>
                                        <p style="margin:0; color:#0a0a0a; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; padding:0; text-align:left; font-size:16px; margin-bottom:10px" align="left">Email: <a href="mailto:foundation@zurb.com" style="color:#2199e8; font-family:Helvetica, Arial, sans-serif; font-weight:normal; line-height:1.3; margin:0; padding:0; text-align:left; text-decoration:none" align="left">foundation@zurb.com</a></p>
                                      </th>
                                    </tr>
                                  </table>
                                </th>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </table>
    </textarea>
  </body>

{!!Form::submit('CREATE',['class'=>'btn btn-info btn-block btn-space']) !!}

{!!Form::close()!!}

@endsection

@section('scripts')

<script type="text/javascript" src="{{URL::asset('js/tinymce/tinymce.min.js')}}"></script>
<script src="{{ URL::asset('js/add-news.js')}}"></script>

@endsection