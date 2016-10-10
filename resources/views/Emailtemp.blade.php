<!-- Emails use the XHTML Strict doctype -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- The character set should be utf-8 -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Ephphatha Email Template</title>
  <meta name="viewport" content="width=device-width"/>
  <!-- Link to the email's CSS, which will be inlined into the email -->
  <link rel="stylesheet" href="{{ asset('css/foundation-emails.css') }}">
  <style>
    <!-- Your CSS to inline should be added here -->
  </style>
</head>

@if(isset($emailTemp))

{!!Form::open(array('url'=>url('emailTemp/'.$emailTemp->id),'method'=>'GET')) !!}

@else

{!!Form::open(array('url'=>'','method' => '')) !!}

@endif

<body>
  <!-- Wrapper for the body of the email -->
  <table class="float-center-set"> 
 <!-- <table align="center" border="1" cellpadding="0" cellspacing="0" width="600"> -->
    <tr>
      <!-- The class, align, and <center> tag center the container -->
      <td class="float-center-set bclrF">
       <table class="menu small-vertical" align="center">
          <tr> <td> <table> <tr>
          <th class="menu-item"><a href="http://churchworship.in/about.php" target="_blank">About Us</a></th>
          <th class="menu-item"><a href="http://churchworship.in/feature.php" target="_blank">Features</a></th>
          <th class="menu-item"><a href="http://churchworship.in/contact.php" target="_blank">Contact Us</a></th>
        </tr> </table> </td> </tr>
        </table>
       <center data-parsed="">
        <a href="http://www.churchworship.in/" target="_blank">
       <img src="{{ asset('images/h1.png') }}" alt="" class="float-center" /></a></center>
</td>
    </tr>
 <tr>
  <td class="float-center-set bclrS">
 <table class="float-center-set2">
  <tr> <td> <p class="text-left fontstyle"> {{isset($emailTemp)?$emailTemp->tempheader : null}} </p> </td> </tr>
  <tr> <td> <p class="text-left body-fontstyle"> {{isset($emailTemp)?$emailTemp->tempdesc : null}} </p> </td> </tr>
  <tr> <td> <table border="0" cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td width="260" valign="top">
   <table class="float-sub">
    <tr>
     <td>
      <img src="{{ asset('images/Sc1.png')}}" alt="" width="100%" height="140" style="display: block;" />
     </td>
    </tr>
  </table>
  </td>
  <td style="font-size: 0; line-height: 0;" width="20">
   &nbsp;
  </td>
  <td width="260" valign="top">
   <table class="float-sub">
    <tr>
     <td>
      <img src="{{ asset('images/Sc2.png') }}" alt="" width="100%" height="140" style="display: block;" />
     </td>
    </tr>
    </table>
  </td>
 </tr>
</table></td></tr>
  <tr> <td> <p class="text-left body-fontstyle"> {{isset($emailTemp)?$emailTemp->tempbody : null}} </p> </td> </tr>
 </table>
</td>
 </tr>
 <tr>
 <td class="float-footer">
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td width="75%"> <p class="footer-fontstyle"> 
 &reg; {{isset($emailTemp)?$emailTemp->tempfooter : null}} </p>
</td>
  <td>
   <table border="0" cellpadding="0" cellspacing="0">
  <tr>
   <td>
    <a href="http://www.thinkpace.in/" target="_blank">
     <img src="{{ asset('images/tw.png') }}" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
    </a>
   </td>
   <td >&nbsp;</td>
   <td>
    <a href="http://www.facebook.com/churchworshipsoftware" target="_blank">
     <img src="{{ asset('images/fb.png') }}" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
    </a>
   </td>
  </tr>
 </table>
  </td>
 </tr>
</table>
</td>
 </tr>
</table>
</body>

{!!Form::close()!!}

</html>