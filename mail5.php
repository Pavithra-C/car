<?php
$ToEmail = 'immanuel26@gmail.com';
$EmailSubject = 'Enqiry for Drivers';
$mailheader = "From: ".$_POST["name"]."\r\n";
$mailheader .= "Mail: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Name: ".$_POST["name"]."";
$MESSAGE_BODY .= "Email: ".$_POST["mail"]."";
$MESSAGE_BODY .= "Mobile: ".$_POST["mobile"]."";
$MESSAGE_BODY .= "Subject: ".nl2br($_POST["sub"])."";
$m=mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");

"Thanks for enquiry"


?>