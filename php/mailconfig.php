<?php
	
	// Defining global variables:
	global $smtp_username;
	global $smtp_password;
	
	global $from_email;
	global $from_name;
	global $to_email;
	
	global $submit_subject;
	global $submit_body;
	global $submit_alt;
	global $update_subject;
	global $update_body;
	global $update_alt;
	global $delete_subject;
	global $delete_body;
	global $delete_alt;
	// Finished defining global variables
	
	// Gmail SMTP account info:
	$smtp_username = 'employee.11111@gmail.com';
	$smtp_password = '&Were0ff';
	
	// Email address to send replies to
	$from_email = 'vargroup.11111@gmail.com';
	$from_name = 'PosTrack SO/PO Mailer';
	
	// Email addresses to be notified of submissions/updates/deletions
	$to_email = array
	(
		'adrian.thomasprestemon@postrack.net',
		'scott.munch@postrack.net',
//		'rod.hill@postrack.net',
//		'brooke.lambert@postrack.net'
	)
	
	// Defining email subject and body for newly-submitted SO forms:
//	$submit_subject = "Record Submitted: ID " . $_POST['soID'];
//	$submit_body = "An SO form has been submitted to the database.<br /><br />ID: " . $_POST['soID'] . "<br /><br />Please update the SO number ASAP.";
//	$submit_alt = "An SO form has been submitted to the database.\n\nID: " . $_POST['soID'] . "\n\nPlease update the SO number ASAP.";
	
	// Defining email subject and body for updated SO forms:
//	$update_subject = "Record Updated: ID " . $_POST['soID'] . " SO " . $_POST['sonumber'];
//	$update_body = "An SO form in the database has been updated.<br /><br />ID: " . $_POST['soID'] . "<br /><br /> SO: " . $_POST['sonumber'];
//	$update_alt = "An SO form in the database has been updated.\n\nID: " . $_POST['soID'] . "\n\n SO: " . $_POST['sonumber'];
	
	// Defining email subject and body for deleted SO forms:
//	$delete_subject = "Record Deleted: ID " . $_POST['soID'] . " SO " . $_POST['sonumber'];
//	$delete_body = "An SO form has been deleted from the database.<br /><br />ID: " . $_POST['soID'] . "<br /><br /> SO: " . $_POST['sonumber'];
//	$delete_alt = "An SO form has been deleted from the database.\n\nID: " . $_POST['soID'] . "\n\n SO: " . $_POST['sonumber'];
	
?>
