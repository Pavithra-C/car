<?php
$ToEmail = 'immanuel26@gmail.com';
$EmailSubject = 'Enqiry for Drivers';
$mailheader = "From: ".$_POST["name"]."\r\n";
$mailheader .= "Mail: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Name: ".$_POST["name"]."";
$MESSAGE_BODY .= "Email: ".$_POST["email"]."";
$MESSAGE_BODY .= "Mobile: ".$_POST["mobile"]."";
echo $MESSAGE_BODY .= "Package: ".nl2br($_POST["package"])."";
$m=mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>
thankyou page to be displayed with contact number 9611156086, 9902020975.