<?php

if ( isset( $_POST['email'] ) ) {
	// Read the form values
	$success     = false;
	$senderEmail = isset( $_POST['email'] ) ? preg_replace( '/[^\.\-\_\@a-zA-Z0-9]/', '', $_POST['email'] ) : '';

	//Headers
	$to       = ''; // Your email goes here.
	$subject  = 'Newslatters';
	$headers  = 'From: Your name ' . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	//body message
	$message = 'Email: ' . $senderEmail . '';

	//Email Send Function
	$send_email = mail( $to, $subject, $message, $headers );

	echo ( $send_email ) ? '<div class="success alert alert-success">Sent Successfully.</div>' : '<div class="success alert alert-danger">Error: Email did not send.</div>';
	exit;
} else {
	echo '<div class="failed alert alert-danger">Failed: Email not Sent.</div>';
	exit;
}

?>