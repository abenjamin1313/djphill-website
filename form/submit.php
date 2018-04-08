<?php
//  noreply@djphilteklie.com imdeejayphil@gmail.com
error_reporting ( 0 );
include ('class_PHPMailer.php');
$from = "noreply@djphilteklie.com";
$sendTo = array(
			'iamdeejayphil@gmail.com',	
	);

$mail = new PHPMailer (); // defaults to using php "mail()"
$mail->SetFrom ( $from );
$mail->AddReplyTo ( $from );
foreach ( $sendTo as $address ) {
	$mail->AddAddress ( $address );
}

foreach($_FILES as $file){
	$mail->AddAttachment($file['tmp_name'],	$file['name']);
}

$mail->Subject = "Response to DJ Phil from DJ Phil website";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

ob_start ();
// start output for email body. Just output raw html

foreach ( $_POST as $key => $value ) {
	
	$name = ucwords ( $key );
	echo $name . ' = ' . $value . '<br>';
}

// end output for email body
$body = ob_get_clean ();

$mail->MsgHTML ( $body );
$mail->Send ();

header('location: ../thank-you.php');


