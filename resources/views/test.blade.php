<!-- Emails use the XHTML Strict doctype -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- The character set should be utf-8 -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width"/>
  <!-- Link to the email's CSS, which will be inlined into the email -->
  <link rel="stylesheet" href="assets/css/foundation-emails.css">
  <style>
    <!-- Your CSS to inline should be added here -->
  </style>
</head>

<body>
  <!-- Wrapper for the body of the email -->
  <table class="body" data-made-with-foundation border="1">
    <tbody>
    <tr><td>{!! $temphead !!}</td></tr>
    <tr><td>{!! $tempdesc !!}</td></tr>
    <tr><td>{!! $tempbody !!}</td></tr>
   </tbody>
  </table>
</body>
</html>