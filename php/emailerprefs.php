<?php
	
	// emailerprefs.php
	// Add, remove, and modify email addresses for the emailer script
	
	// The "From:" address every message sent should appear to be from
	global $so_emailer_from;
	$so_emailer_from = 'so.mailer@postrack.net';
	
	// The "To:" addresses to be notified of every SO form update
	global $so_emailer_to;
	$so_emailer_to = array
	(
		'adrian.thomasprestemon@postrack.net',
		'adrian.thomasprestemon@postrack.net',
		'adrian.thomasprestemon@postrack.net',
		'adrian.thomasprestemon@postrack.net',
		'adrian.thomasprestemon@postrack.net',
		'adrian.thomasprestemon@postrack.net',
		'adrian.thomasprestemon@postrack.net',
		'adrian.thomasprestemon@postrack.net'
	);
	
	// The "Subject:" field
	// For new submissions
	global $so_emailer_subject_new;
	$so_emailer_subject_new = 'SO Form Submission';
	
	// For updates
	global $so_emailer_subject_update;
	$so_emailer_subject_update = 'SO Form Update';
	
	// For deletions
	global $so_emailer_subject_delete;
	$so_emailer_subject_delete = 'SO Form Deletion';
	
	// Server name
	global $so_server_name;
	$so_server_name = 'PosTrack SO Form Server';
	
?>
