
<?php

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sales@garnerinsights.com>' . "\r\n";
$headers .= 'Cc: ketki@jmtit.com' . "\r\n";
$to=$_POST['email'];

$subject='Enquiry from Website';
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$city=$_POST['city'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$message = "
<html>
<head>
	<title>Mail</title>
</head>
<body>
	<p>Enquiry From Website</p>
	<table id='t01'>
		<tr>
			<th>Name: </th><td>".$name."</td>
		</tr>
		<tr>
			<th>Contact No: </th><td>".$mobile."</td>
		</tr>

		<tr>
			<th>Email: </th><td>".$email."</td>
		</tr>
		<tr>
			<th>City: </th><td>".$city."</td>
		</tr>
		<tr>
			<th>Subject: </th><td>".$subject."</td>
		</tr>
		<tr>
			<th>Message: </th><td>".$message."</td>
		</tr>
	</table>
</body>
</html>
";

mail($to,$subject,$message,$headers);


// More headers
$headers .= 'From: <donotreplay@garnerinsights.com>' . "\r\n";

$subject='Response Mail From Garner Insights';
$to=$email;
$date=$_POST['date'];

$message="Thank you for the Contacting us, We will Get Back to You before ";

mail($to,$subject,$message,$headers);

//header('Location: home');

?>