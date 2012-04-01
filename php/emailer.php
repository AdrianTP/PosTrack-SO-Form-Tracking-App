<?php
	
	function sendEmail($state, $id, $so)
	{
		
		///////////////////////////
		//Begin Configuration
		///////////////////////////
		
		// Email From
		$from = "adrian.thomasprestemon@postrack.net";
		
		// Email To
		$to = "adrian.thomasprestemon@gmail.com";
		
		// Email Subject
		if ($state == 'Submit')
		{
			$subject = "SO Form Submission" . " ID " . $id . " SO# " . $so;
			$so_message = "An SO form has been submitted.\nID " . $id . "\nSO# " . $so;
		}
		else if ($state == 'Update')
		{
			$subject = "SO Form Update" . " ID " . $id . " SO# " . $so;
			$so_message = "An SO form has been updated.\nID " . $id . "\nSO# " . $so;
		}
		else if ($state == 'Delete')
		{
			$subject = "SO Form Deletion" . " ID " . $id . " SO# " . $so;
			$so_message = "An SO form has been deleted.\nID " . $id . "\nSO# " . $so;
		}
		
		// Server name, to display in the headers
		$server_name = "PosTrack SO Form Server";
		
		///////////////////////////
		//End Configuration
		///////////////////////////
		
/*		if (!empty($_POST['send']) || !empty($_GET['send']))
		{
			$action = (!empty($_POST['send'])) ? $_POST['send'] : $_GET['send'];
		}
		else
		{
			$action = '';
		}
		
		$build_message = false;
		if($action != "")
		{
			$build_message = true;
			$message = trim($so_message);
			//$name = trim($_POST['name']);
			//$email = trim($_POST['email']);
			$time = time();
*/			$date = date("F j, Y", time());
/*			$date = date("Y-m-d", time());
*/			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
			$headers .= "From: $from\r\n";
			$headers .= "X-mailer: " . $server_name . " Server\r\n";
/*		}
*/		
/*		if($build_message)
		{
*/			$message = "
			Sender E-Mail: $from\n 
			Date Sent: $date\n 
			Message:\n----------------------------------------\n$so_message \n";
			
/*			if(mail($to, $subject, $message, $headers))
			{
				global $result;
				$result = "An email has been dispatched to " . $to;
			}
			else
			{
				global $result;
				$result = "There was an error within the emailer script.";
			}
		}
*/		
/*		// Output a result Message
		if(mail($to, $subject, $message, $headers))
		{
			print "An email has been dispatched to " . $to;
		}
		else
		{
			print "There was an error within the emailer script.";
		}//print $result;
*/		
		if (mail($to, $subject, $message, $headers))
		{
			echo "<br />An email has been dispatched to " . $to;
		}
		else
		{
			echo "There was an error within the emailer script.";
		}
		
	}
?>
