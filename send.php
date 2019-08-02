<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Thank You</title>
</head>

<body>
<?php

// Fetching data that is entered by the user
$firstname - $_POST['firstname'];
$lastname - $_POST['lastname'];
$homephone - $_POST['homephone'];
$mobile - $_POST['mobile'];
$email - $_POST['email'];

mail("lilyrose234@slingshot.co.nz", "Contact from Website",$message"From: $email\r\n");

echo "Thank you!";

?>
<br />
Thank you for your contact! We will reply within 24 hours.
<br>
<a href="index.html">
Return to home page
</a>






</body>

</html>
