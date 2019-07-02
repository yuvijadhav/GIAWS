<?php

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sales@garnerinsights.com>' . "\r\n";
$headers .= 'Cc: ketki@jmtit.com' . "\r\n";
$to=$_POST['email'];

$subject='Enquiry from garnerinsights.com';
$enquiry_name=$_POST['enquiry_name'];
$enquiry_phone=$_POST['enquiry_phone'];
$enquiry_email=$_POST['enquiry_email'];



$message = "
<html>
<head>
<title>Mail</title>
</head>
<body>
<p>Enquiry From Website</p>
<table id='t01'>
<tr>
<th>Name</th><td>".$enquiry_name."</td>
</tr>
<tr>
<th>Email</th><td>".$enquiry_email."</td>
</tr>
<tr>
<th>Contact No</th><td>".$enquiry_phone."</td>
</tr>
</table>
</body>
</html>
";

mail($to,$subject,$message,$headers);

// More headers
$headers .= 'From: <donotreplay@garnerinsights.com>' . "\r\n";

$subject='Response Mail From garner Insights';
$to=$email;
$date=$_POST['date'];

$message="Thank you for the Contacting us, We will Get Back to You before ";

mail($to,$subject,$message,$headers);


//header('Location: home');

?>