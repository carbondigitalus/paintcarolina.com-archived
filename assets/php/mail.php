<?php

$to = 'info@paintcarolina.com';
$subject = 'DERTY WERKS FREE LEAD';
$from = 'jared@carbondigital.us';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Taking all values
$firstName 		= $_POST['firstName'];
$phone 		= $_POST['phone'];
$email 		= $_POST['email'];
$subjectName 	= $_POST['subjectName'];
$msg 		= $_POST['msg'];
$output 	= "First Name: ".$firstName."\n\nSubject: ".$subjectName."\n\nMessage: ".$msg;

$send = mail($to, $subject.": ".$subjectName." | ".$firstName, $output."\n\n***This free lead has been sent from Carbon Digital.***", $headers);
?>
