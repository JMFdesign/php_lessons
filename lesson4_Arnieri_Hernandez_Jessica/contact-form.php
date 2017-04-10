<?php

$to = "jmfa89@ufl.edu";
$subject = "New Contact Form Submission";
$message = trim(stripslashes($_POST['Message'])); 
$from = trim(stripslashes($_POST['Email']));
$name = trim(stripslashes($_POST['Name']));

$validationOK = true;

if (!$validationOK) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
	exit;
}

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n";
$body .= "Email: ";
$body .= $from;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";

$success = mail($to, $subject, $body, "From: <$from>" );

if ($success) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.php#thanks\">";
} else {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html#error\">";
}

?>