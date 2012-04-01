<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html>
	<head>
		<SCRIPT LANGUAGE="JavaScript">
			<!-- Original:  desypfa@hotmail.com -->
			<!-- Modified:  Benjamin Wright, Editor -->

			<!-- This script and many more are available free online at -->
			<!-- The JavaScript Source!! http://javascript.internet.com -->

			<!-- Begin
			redirTime = "0";
			redirURL = "../";
			function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
			//  End -->
		</script>
		<link rel='stylesheet' type='text/css' href='../css/main-css.php' />


<?php
	
	require ('mysqlprefs.php');
	
	require ('emailer.php');
	
	require ('phpmailer/class.phpmailer.php');
	
	require ('mailconfig.php');
	
	if ($_POST['button'] == "Update")
	{
		$con = mysql_connect($sql_host,$sql_user,$sql_pass);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($sql_db_name1, $con);
		
		$sales = 0;
		$service = 0;
		$shipping = 0;
		if (isset ($_POST['sales']))
		{
			$sales = $_POST['sales'];
		}
		
		if (isset ($_POST['service']))
		{
			$service = $_POST['service'];
		}
		
		if (isset ($_POST['shipping']))
		{
			$shipping = $_POST['shipping'];
		}
		
		$sql1=
		"
			UPDATE $sql_table_name1 SET sales = '$sales' WHERE soID = '$_POST[soID]'
		";
		
		$sql36=
		"
			UPDATE $sql_table_name1 SET service = '$service' WHERE soID = '$_POST[soID]'
		";
		
		$sql37=
		"
			UPDATE $sql_table_name1 SET shipping = '$shipping' WHERE soID = '$_POST[soID]'
		";
		
		$sql2=
		"
			UPDATE $sql_table_name1 SET sonumber = '$_POST[sonumber]' WHERE soID = '$_POST[soID]'
		";
		
		$sql3=
		"
			UPDATE $sql_table_name1 SET startdate = '$_POST[startdate]' WHERE soID = '$_POST[soID]'
		";
			
		$sql4=
		"
			UPDATE $sql_table_name1 SET custname = '$_POST[custname]' WHERE soID = '$_POST[soID]'
		";
			
		$sql5=
		"
			UPDATE $sql_table_name1 SET custschool = '$_POST[custschool]' WHERE soID = '$_POST[soID]'
		";
			
		$sql6=
		"
			UPDATE $sql_table_name1 SET custline3 = '$_POST[custline3]' WHERE soID = '$_POST[soID]'
		";
			
		$sql7=
		"
			UPDATE $sql_table_name1 SET unitlocname = '$_POST[unitlocname]' WHERE soID = '$_POST[soID]'
		";
			
		$sql8=
		"
			UPDATE $sql_table_name1 SET unitlocstreet = '$_POST[unitlocstreet]' WHERE soID = '$_POST[soID]'
		";
			
		$sql9=
		"
			UPDATE $sql_table_name1 SET unitloczip = '$_POST[unitloczip]' WHERE soID = '$_POST[soID]'
		";
			
		$sql10=
		"
			UPDATE $sql_table_name1 SET division = '$_POST[division]' WHERE soID = '$_POST[soID]'
		";
			
		$sql11=
		"
			UPDATE $sql_table_name1 SET sapnumber = '$_POST[sapnumber]' WHERE soID = '$_POST[soID]'
		";
			
		$sql12=
		"
			UPDATE $sql_table_name1 SET ordertakenby = '$_POST[ordertakenby]' WHERE soID = '$_POST[soID]'
		";
		
		$sql13=
		"
			UPDATE $sql_table_name1 SET employeenumber = '$_POST[employeenumber]' WHERE soID = '$_POST[soID]'
		";
			
		$sql14=
		"
			UPDATE $sql_table_name1 SET worktobedone = '$_POST[worktobedone]' WHERE soID = '$_POST[soID]'
		";
			
		$sql15=
		"
			UPDATE $sql_table_name1 SET itemtoship1 = '$_POST[itemtoship1]' WHERE soID = '$_POST[soID]'
		";
			
		$sql16=
		"
			UPDATE $sql_table_name1 SET itembilling1 = '$_POST[itembilling1]' WHERE soID = '$_POST[soID]'
		";
			
		$sql17=
		"
			UPDATE $sql_table_name1 SET itemtoship2 = '$_POST[itemtoship2]' WHERE soID = '$_POST[soID]'
		";
			
		$sql18=
		"
			UPDATE $sql_table_name1 SET itembilling2 = '$_POST[itembilling2]' WHERE soID = '$_POST[soID]'
		";
			
		$sql19=
		"
			UPDATE $sql_table_name1 SET itemtoship3 = '$_POST[itemtoship3]' WHERE soID = '$_POST[soID]'
		";
			
		$sql20=
		"
			UPDATE $sql_table_name1 SET itembilling3 = '$_POST[itembilling3]' WHERE soID = '$_POST[soID]'
		";
			
		$sql21=
		"
			UPDATE $sql_table_name1 SET itemtoship4 = '$_POST[itemtoship4]' WHERE soID = '$_POST[soID]'
		";
			
		$sql22=
		"
			UPDATE $sql_table_name1 SET itembilling4 = '$_POST[itembilling4]' WHERE soID = '$_POST[soID]'
		";
			
		$sql23=
		"
			UPDATE $sql_table_name1 SET itemtoship5 = '$_POST[itemtoship5]' WHERE soID = '$_POST[soID]'
		";
			
		$sql24=
		"
			UPDATE $sql_table_name1 SET itembilling5 = '$_POST[itembilling5]' WHERE soID = '$_POST[soID]'
		";
			
		$sql25=
		"
			UPDATE $sql_table_name1 SET itemtoship6 = '$_POST[itemtoship6]' WHERE soID = '$_POST[soID]'
		";
			
		$sql26=
		"
			UPDATE $sql_table_name1 SET itembilling6 = '$_POST[itembilling6]' WHERE soID = '$_POST[soID]'
		";
			
		$sql27=
		"
			UPDATE $sql_table_name1 SET itemtoship7 = '$_POST[itemtoship7]' WHERE soID = '$_POST[soID]'
		";
			
		$sql28=
		"
			UPDATE $sql_table_name1 SET itembilling7 = '$_POST[itembilling7]' WHERE soID = '$_POST[soID]'
		";
			
		$sql29=
		"
			UPDATE $sql_table_name1 SET itemtoship8 = '$_POST[itemtoship8]' WHERE soID = '$_POST[soID]'
		";
			
		$sql30=
		"
			UPDATE $sql_table_name1 SET itembilling8 = '$_POST[itembilling8]' WHERE soID = '$_POST[soID]'
		";
			
		$sql31=
		"
			UPDATE $sql_table_name1 SET laborname = '$_POST[laborname]' WHERE soID = '$_POST[soID]'
		";
			
		$sql32=
		"
			UPDATE $sql_table_name1 SET laborhours = '$_POST[laborhours]' WHERE soID = '$_POST[soID]'
		";
			
		$sql33=
		"
			UPDATE $sql_table_name1 SET laborbilling = '$_POST[laborbilling]' WHERE soID = '$_POST[soID]'
		";
			
		$sql34=
		"
			UPDATE $sql_table_name1 SET completedname = '$_POST[completedname]' WHERE soID = '$_POST[soID]'
		";
			
		$sql35=
		"
			UPDATE $sql_table_name1 SET datecompleted = '$_POST[datecompleted]' WHERE soID = '$_POST[soID]'
		";
		
		if (!mysql_query($sql1,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql2,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql3,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql4,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql5,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql6,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql7,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql8,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql9,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql10,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql11,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql12,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql13,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql14,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql15,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql16,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql17,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql18,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql19,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql20,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql21,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql22,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql23,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql24,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql25,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql26,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql27,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql28,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql29,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql30,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql31,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql32,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql33,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql34,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		if (!mysql_query($sql35,$con))
		{
			die('Error: ' . mysql_error());
		}
			
		if (!mysql_query($sql36,$con))
		{
			die('Error: ' . mysql_error());
		}
			
		if (!mysql_query($sql37,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		echo "</head><body onload='redirTimer()'>1 record updated<br /><a href='javascript:history.back()'>Click to Return</a>";
		
		$mail = new PHPMailer();
		$mail->IsSMTP(); // send via SMTP
		#IsSMTP(); // send via SMTP
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = $smtp_username; // SMTP username
		$mail->Password = $smtp_password; // SMTP password
		$mail->From = $from_email;
		$mail->FromName = $from_name;
		foreach ($to_email as $email)
		{
			$mail->AddAddress($email,'');
		}
		$mail->AddReplyTo($from_email,$from_name);
		$mail->WordWrap = 50; // set word wrap
		#$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
		#$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = "Record Updated: ID " . $_POST['soID'] . " SO " . $_POST['sonumber'];
		$mail->Body = "An SO form in the database has been updated.<br /><br />ID: " . $_POST['soID'] . "<br /><br /> SO: " . $_POST['sonumber'] . "<br /><br />Please visit the <a href='http://172.16.0.223/pttsoform'>PosTrack Service Orders</a> page for more information.";
		$mail->AltBody = "An SO form in the database has been updated.\n\nID: " . $_POST['soID'] . "\n\n SO: " . $_POST['sonumber'] . "\n\nPlease visit the PosTrack Service Orders page at <http://172.16.0.223/pttsoform> for more information.";
		if(!$mail->Send())
		{
			echo "There has been an error in the mail processing script: " . $mail->ErrorInfo;
		}
		else
		{
			echo "A notification email has been dispatched";
		}
		
/*		if (!isset ($_POST['sonumber']))
		{
			sendEmail($_POST['button'], $_POST['soID'], "_");
		}
		else 
		{
			sendEmail($_POST['button'], $_POST['soID'], $_POST['sonumber']);
		}*/
		
		mysql_close($con);
	}
			
	if ($_POST['button'] == "Delete")
	{			
		$con = mysql_connect($sql_host,$sql_user,$sql_pass);

		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($sql_db_name1, $con);
		
		$sql1=
		"
			UPDATE $sql_table_name1 SET isdeleted = '1' WHERE soID = '$_POST[soID]'
		";
		
/*		$sql1=
		"
			DELETE FROM $sql_table_name1 WHERE soID = '$_POST[soID]'
		";*/
		
		if (!mysql_query($sql1,$con))
		{
			die('Error: ' . mysql_error());
		}
		
		echo "</head><body onload='redirTimer()'>1 record marked as deleted<br /><a href='javascript:history.back()'>Click to Return</a>'";
		
		$mail = new PHPMailer();
		$mail->IsSMTP(); // send via SMTP
		#IsSMTP(); // send via SMTP
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = $smtp_username; // SMTP username
		$mail->Password = $smtp_password; // SMTP password
		$mail->From = $from_email;
		$mail->FromName = $from_name;
		foreach ($to_email as $email)
		{
			$mail->AddAddress($email,'');
		}
		$mail->AddReplyTo($from_email,$from_name);
		$mail->WordWrap = 50; // set word wrap
		#$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
		#$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = "Record Deleted: ID " . $_POST['soID'] . " SO " . $_POST['sonumber'];
		$mail->Body = "An SO form has been deleted from the database.<br /><br />ID: " . $_POST['soID'] . "<br /><br /> SO: " . $_POST['sonumber'] . "<br /><br />Please visit the <a href='http://172.16.0.223/pttsoform'>PosTrack Service Orders</a> page for more information."; //HTML Body
		$mail->AltBody = "An SO form has been deleted from the database.\n\nID: " . $_POST['soID'] . "\n\n SO: " . $_POST['sonumber'] . "\n\nPlease visit the PosTrack Service Orders page at <http://172.16.0.223/pttsoform> for more information."; //Text Body
		if(!$mail->Send())
		{
			echo "There has been an error in the mail processing script: " . $mail->ErrorInfo;
		}
		else
		{
			echo "A notification email has been dispatched";
		}
		
/*		if (!isset ($_POST['sonumber']))
		{
			sendEmail($_POST['button'], $_POST['soID'], "_");
		}
		else 
		{
			sendEmail($_POST['button'], $_POST['soID'], $_POST['sonumber']);
		}*/
		
		mysql_close($con);
	}
	
	if ($_POST['button'] == "Submit")
	{
		$con = mysql_connect($sql_host,$sql_user,$sql_pass);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($sql_db_name1, $con);
		
		$sales = 0;
		$service = 0;
		$shipping = 0;
		if (isset ($_POST['sales']))
		{
			$sales = $_POST['sales'];
		}
		
		if (isset ($_POST['service']))
		{
			$service = $_POST['service'];
		}
		
		if (isset ($_POST['shipping']))
		{
			$shipping = $_POST['shipping'];
		}
		
		$sql="INSERT INTO $sql_table_name1 (sales, service, shipping, sonumber, startdate, custname, custschool, custline3, unitlocname, unitlocstreet, unitloczip, division, sapnumber, ordertakenby, employeenumber, worktobedone, itemtoship1, itembilling1, itemtoship2, itembilling2, itemtoship3, itembilling3, itemtoship4, itembilling4, itemtoship5, itembilling5, itemtoship6, itembilling6, itemtoship7, itembilling7, itemtoship8, itembilling8, laborname, laborhours, laborbilling, completedname, datecompleted) VALUES ('$sales','$service','$shipping','$_POST[sonumber]','$_POST[startdate]','$_POST[custname]','$_POST[custschool]','$_POST[custline3]','$_POST[unitlocname]','$_POST[unitlocstreet]','$_POST[unitloczip]','$_POST[division]','$_POST[sapnumber]','$_POST[ordertakenby]','$_POST[employeenumber]','$_POST[worktobedone]','$_POST[itemtoship1]','$_POST[itembilling1]','$_POST[itemtoship2]','$_POST[itembilling2]','$_POST[itemtoship3]','$_POST[itembilling3]','$_POST[itemtoship4]','$_POST[itembilling4]','$_POST[itemtoship5]','$_POST[itembilling5]','$_POST[itemtoship6]','$_POST[itembilling6]','$_POST[itemtoship7]','$_POST[itembilling7]','$_POST[itemtoship8]','$_POST[itembilling8]','$_POST[laborname]','$_POST[laborhours]','$_POST[laborbilling]','$_POST[completedname]','$_POST[datecompleted]')";
		
		if (!mysql_query($sql,$con))
		{
			die('Error: ' . mysql_error());
		}
		echo "</head><body onload='redirTimer()'>1 record added<br /><a href='javascript:history.back()'>Click to Return</a>'";
		
		$mail = new PHPMailer();
		$mail->IsSMTP(); // send via SMTP
		#IsSMTP(); // send via SMTP
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = $smtp_username; // SMTP username
		$mail->Password = $smtp_password; // SMTP password
		$mail->From = $from_email;
		$mail->FromName = $from_name;
		foreach ($to_email as $email)
		{
			$mail->AddAddress($email,'');
		}
		$mail->AddReplyTo($from_email,$from_name);
		$mail->WordWrap = 50; // set word wrap
		#$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
		#$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
		$mail->IsHTML(true); // send as HTML
		$mail->Subject = "Record Submitted: ID " . $_POST['soID'];
		$mail->Body = "An SO form has been submitted to the database.<br /><br />ID: " . $_POST['soID'] . "<br /><br />Please visit the <a href='http://172.16.0.223'>PosTrack Service Orders</a> page to update the SO number ASAP.<br /><br />"; //HTML Body
		$mail->AltBody = "An SO form has been submitted to the database.\n\nID: " . $_POST['soID'] . "\n\nPlease visit the PosTrack Service Orders page at http://172.16.0.223 to update the SO number ASAP."; //Text Body
		if(!$mail->Send())
		{
			echo "There has been an error in the mail processing script: " . $mail->ErrorInfo;
		}
		else
		{
			echo "A notification email has been dispatched";
		}
		
/*		if (!isset ($_POST['sonumber']))
		{
			sendEmail($_POST['button'], $_POST['soID'], "_");
		}
		else 
		{
			sendEmail($_POST['button'], $_POST['soID'], $_POST['sonumber']);
		}*/
		
		mysql_close($con);
	}
	
	if ($_POST['button'] == "View")
	{
/*		$_POST['soID'];
		
		// Load the display page
		// Pick the correct record
		// Load the variables in the display page
		// 
*/		
		$con = mysql_connect($sql_host,$sql_user,$sql_pass);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($sql_db_name1, $con);
		
		echo "		
			</head>
			
			<body>
				<form id='form' action='./updatesoform.php' method='post'>
					<img id='logo' src='../img/pttlogo.jpg' />
					<fieldset id='ordertype' class='fields'>
						<legend><h2>This is a:</h2></legend>
						<table class='checkboxes'>
							<tr>
								<td>
									<input type='checkbox' ";if (isset($_POST['sales'])){if ($_POST['sales'] == 1){echo "checked ";}}echo "name='sales' tabindex=1 value='1' />
								</td>
								<td>
									<h3>Sales Order</h3>
								</td>
								<td>
									(Purchase or Build and Ship)
								</td>
							</tr>
							<tr>
								<td>
									<input type='checkbox' ";if (isset($_POST['service'])){if ($_POST['service'] == 1){echo "checked ";}}echo "name='service' tabindex=2 value='1' />
								</td>
								<td>
									<h3>Service Order</h3>
								</td>
								<td>
									(Receive and Rebuild or Replace, or Tech Support)
								</td>
							</tr>
							<tr>
								<td>
									<input type='checkbox' ";if (isset($_POST['shipping'])){if ($_POST['shipping'] == 1){echo "checked ";}}echo "name='shipping' tabindex=3 value='1' />
								</td>
								<td>
									<h3>Shipping Order</h3>
								</td>
								<td>
									(Return Goods or Ship out miscellaneous items)
								</td>
							</tr>
						</table>
					</fieldset>
					<fieldset id='clientinfo' class='fields'>
						<legend><h2>Client Info:</h2></legend>
						<table class='checkboxes'>
							<tr>
								<td>
									SO#:
								</td>
								<td>
									<input class='underline' name='sonumber' type='text' tabindex=4 value='" . $_POST['sonumber'] . "' />
								</td>
								<td>
									Date:
								</td>
								<td>
									<input class='underline' name='startdate' type='text' tabindex=5 value='" . $_POST['startdate'] . "' />
								</td>
							</tr>
							<tr>
								<td>
									Customer:
								</td>
								<td>
									<input class='underline' name='custname' type='text' tabindex=6 value='" . $_POST['custname'] . "' />
								</td>
								<td>
									Unit Location:
								</td>
								<td>
									<input class='underline' name='unitlocname' type='text' tabindex=9 value='" . $_POST['unitlocname'] . "' />
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td>
									<input class='underline' name='custschool' type='text' tabindex=7 value='" . $_POST['custschool'] . "' />
								</td>
								<td>
									<input style='visibility:hidden;' name='isdeleted' type='text' value='" . $_POST['isdeleted'] . "' />
								</td>
								<td>
									<input class='underline' name='unitlocstreet' type='text' tabindex=10 value='" . $_POST['unitlocstreet'] . "' />
								</td>
							</tr>
							<tr>
								<td>
								</td>
								<td>
									<input class='underline' name='custline3' type='text' tabindex=8 value='" . $_POST['custline3'] . "' />
								</td>
								<td>
								</td>
								<td>
									<input class='underline' name='unitloczip' type='text' tabindex=11 value='" . $_POST['unitloczip'] . "' />
								</td>
							</tr>
						</table>
					</fieldset>
					<fieldset id='officeinfo' class='fields'>
						<legend><h2>Office Info:</h2></legend>
						<table class='checkboxes'>
							<tr>
								<td>
									Division:
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['division'] == 1){echo "checked ";}
									echo "type='radio' name='division' value='1' /> POS / <input class='radiobutton' ";
									if ($_POST['division'] == 2){echo "checked ";}
									echo "type='radio' name='division' value='2' /> VOIP / <input class='radiobutton' ";
									if ($_POST['division'] == 3){echo "checked ";}
									echo "type='radio' name='division' value='3' /> INT (company use)
								</td>
								<td>
									SAP#:
								</td>
								<td>
									<input class='underline' name='sapnumber' type='text' value='" . $_POST['sapnumber'] . "' />
								</td>
							</tr>
							<tr>
								<td>
									Order Taken By:
								</td>
								<td>
									<input class='underline' name='ordertakenby' type='text' value='" . $_POST['ordertakenby'] . "' />
								</td>
								<td>
									Employee Number:
								</td>
								<td>
									<input class='underline' name='employeenumber' type='text' value='" . $_POST['employeenumber'] . "' />
								</td>
							</tr>
							<tr>
								<td>
									Work to be Done:
								</td>
								<td rowspan='2' colspan='3'>
									<textarea class='outline white' name='worktobedone' rows='5' cols='75'>" . $_POST['worktobedone'] . "</textarea>
								</td>
							</tr>
							<tr>
							</tr>
						</table>
					</fieldset>
					<fieldset id='shippinginfo' class='fields'>
						<legend><h2>Shipping / Billing Info:</h2></legend>
						<table class='checkboxes'>
							<tr>
								<th>
									Parts / Items to Ship / Bill:
								</th>
								<th>
								</th>
								<th>
									Yes / No
								</th>
								<th>
									&nbsp;
								</th>
								<th>
									Parts / Items to Ship / Bill:
								</th>
								<th>
								</th>
								<th>
									Yes / No
								</th>
							</tr>
							<tr>
								<td colspan='2'>
									<input class='underline' name='itemtoship1' type='text' value='" . $_POST['itemtoship1'] . "' />
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['itembilling1'] == 1){echo "checked ";}
									echo "type='radio' name='itembilling1' value='1' /> / <input class='radiobutton' ";
									if ($_POST['itembilling1'] == 0){echo "checked ";}
									echo "type='radio' name='itembilling1' value='0' />
								</td>
								<td>
									&nbsp;
								</td>
								<td colspan='2'>
									<input class='underline' name='itemtoship5' type='text' value='" . $_POST['itemtoship5'] . "' />
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['itembilling5'] == 1){echo "checked ";}
									echo "type='radio' name='itembilling5' value='1' /> / <input class='radiobutton' ";
									if ($_POST['itembilling5'] == 0){echo "checked ";}
									echo "type='radio' name='itembilling5' value='0' />
								</td>
							</tr>
							<tr>
								<td colspan='2'>
									<input class='underline' name='itemtoship2' type='text' value='" . $_POST['itemtoship2'] . "' />
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['itembilling2'] == 1){echo "checked ";}
									echo "type='radio' name='itembilling2' value='1' /> / <input class='radiobutton' ";
									if ($_POST['itembilling2'] == 0){echo "checked ";}
									echo "type='radio' name='itembilling2' value='0' />
								</td>
								<td>
									&nbsp;
								</td>
								<td colspan='2'>
									<input class='underline' name='itemtoship6' type='text' value='" . $_POST['itemtoship6'] . "' />
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['itembilling6'] == 1){echo "checked ";}
									echo "type='radio' name='itembilling6' value='1' /> / <input class='radiobutton' ";
									if ($_POST['itembilling6'] == 0){echo "checked ";}
									echo "type='radio' name='itembilling6' value='0' />
								</td>
							</tr>
							<tr>
								<td colspan='2'>
									<input class='underline' name='itemtoship3' type='text' value='" . $_POST['itemtoship3'] . "' />
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['itembilling3'] == 1){echo "checked ";}
									echo "type='radio' name='itembilling3' value='1' /> / <input class='radiobutton' ";
									if ($_POST['itembilling3'] == 0){echo "checked ";}
									echo "type='radio' name='itembilling3' value='0' />
								</td>
								<td>
									&nbsp;
								</td>
								<td colspan='2'>
									<input class='underline' name='itemtoship7' type='text' value='" . $_POST['itemtoship7'] . "' />
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['itembilling7'] == 1){echo "checked ";}
									echo "type='radio' name='itembilling7' value='1' /> / <input class='radiobutton' ";
									if ($_POST['itembilling7'] == 0){echo "checked ";}
									echo "type='radio' name='itembilling7' value='0' />
								</td>
							</tr>
							<tr>
								<td colspan='2'>
									<input class='underline' name='itemtoship4' type='text' value='" . $_POST['itemtoship4'] . "' />
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['itembilling4'] == 1){echo "checked ";}
									echo "type='radio' name='itembilling4' value='1' /> / <input class='radiobutton' ";
									if ($_POST['itembilling4'] == 0){echo "checked ";}
									echo "type='radio' name='itembilling4' value='0' />
								</td>
								<td>
									&nbsp;
								</td>
								<td colspan='2'>
									<input class='underline' name='itemtoship8' type='text' value='" . $_POST['itemtoship8'] . "' />
								</td>
								<td>
									<input class='radiobutton' ";
									if ($_POST['itembilling8'] == 1){echo "checked ";}
									echo "type='radio' name='itembilling8' value='1' /> / <input class='radiobutton' ";
									if ($_POST['itembilling8'] == 0){echo "checked ";}
									echo "type='radio' name='itembilling8' value='0' />
								</td>
							</tr>
							<tr>
								<td>
									<input style='display:none;' class='quarterwidth' name='isdeleted' type='text' value='" . $_POST['isdeleted'] . "' />
								</td>
								<td>
									<input style='display:none;' class='quarterwidth' name='soID' type='text' value='" . $_POST['soID'] . "' />
								</td>
								<td>
								</td>
							</tr>
						</table>
					</fieldset>
					<fieldset id='laborinfo' class='fields'>
						<legend><h2>Labor Info:</h2></legend>
						<table class='checkboxes'>
							<tr>
								<td>
									Name:
								</td>
								<td>
									<input class='underline' name='laborname' type='text' value='" . $_POST['laborname'] . "' />
								</td>
								<td>
									Hours:
								</td>
								<td>
									<input class='underline' name='laborhours' type='text' value='" . $_POST['laborhours'] . "' />
								</td>
								<td>
									Bill? <input class='radiobutton' ";
									if ($_POST['laborbilling'] == 1){echo "checked ";}
									echo"type='radio' name='laborbilling' value='1' />Yes / <input class='radiobutton' ";
									if ($_POST['laborbilling'] == 0){echo "checked ";}
									echo"type='radio' name='laborbilling' value='0' />No
								</td>
							</tr>
							<tr>
								<td>
									&nbsp;
								</td>
							</tr>
							<tr>
								<td colspan='5'>
									Order Completed and Shipped By:
								</td>
								<td>
								</td>
							</tr>
							<tr>
								<td colspan='3'>
									<input class='underline' name='completedname' type='text' value='" . $_POST['completedname'] . "' />
								</td>
								<td>
								</td>
								<td>
									<input class='underline' name='datecompleted' type='text' value='" . $_POST['datecompleted'] . "' />
								</td>
							</tr>
						</table>
					</fieldset>
					<fieldset class='fields' style='border: none;'>
						<input type='submit' class='detail button' name='button' value='Update'/>
						<a href='../' class='detail button'>Return to List</a>
					</fieldset>
				</form>
				
			</body>
			
		</html>
		";
		
/*		$sales = 0;
		$service = 0;
		$shipping = 0;
		if (isset ($_POST['sales']))
		{
			$sales = $_POST['sales'];
		}
		
		if (isset ($_POST['service']))
		{
			$service = $_POST['service'];
		}
		
		if (isset ($_POST['shipping']))
		{
			$shipping = $_POST['shipping'];
		}
		
		$sql="INSERT INTO $sql_table_name1 (sales, service, shipping, sonumber, startdate, custname, custschool, custline3, unitlocname, unitlocstreet, unitloczip, division, sapnumber, ordertakenby, employeenumber, worktobedone, itemtoship1, itembilling1, itemtoship2, itembilling2, itemtoship3, itembilling3, itemtoship4, itembilling4, itemtoship5, itembilling5, itemtoship6, itembilling6, itemtoship7, itembilling7, itemtoship8, itembilling8, laborname, laborhours, laborbilling, completedname, datecompleted) VALUES ('$sales','$service','$shipping','$_POST[sonumber]','$_POST[startdate]','$_POST[custname]','$_POST[custschool]','$_POST[custline3]','$_POST[unitlocname]','$_POST[unitlocstreet]','$_POST[unitloczip]','$_POST[division]','$_POST[sapnumber]','$_POST[ordertakenby]','$_POST[employeenumber]','$_POST[worktobedone]','$_POST[itemtoship1]','$_POST[itembilling1]','$_POST[itemtoship2]','$_POST[itembilling2]','$_POST[itemtoship3]','$_POST[itembilling3]','$_POST[itemtoship4]','$_POST[itembilling4]','$_POST[itemtoship5]','$_POST[itembilling5]','$_POST[itemtoship6]','$_POST[itembilling6]','$_POST[itemtoship7]','$_POST[itembilling7]','$_POST[itemtoship8]','$_POST[itembilling8]','$_POST[laborname]','$_POST[laborhours]','$_POST[laborbilling]','$_POST[completedname]','$_POST[datecompleted]')";
		
		if (!mysql_query($sql,$con))
		{
			die('Error: ' . mysql_error());
		}
		echo "1 record added<br /><a href='javascript:history.back()'>Click to Return</a>'";
*/		
		mysql_close($con);
	}
	
	if ($_POST['button'] == "PDF")
	{	
		
		/** $Id: example3.php 2426 2006-11-18 19:59:26Z jrust $ */
		/**
		 * Here we create an encrypted PDF file based on a dynaically generated page. 
		 * We buffer the content of the page and then create the PDF at the end.
		 * Then we load up PDFEncryptor and set meta-data, password, and permissions.
		 * Finally, we send a header and the file so it opens straight into the
		 * browser.
		 */
		
		// Require the class
		require_once dirname(__FILE__) . '/../htmltopdf/HTML_ToPDF.php';
		require_once dirname(__FILE__) . '/../htmltopdf/PDFEncryptor.php';
		// Create a unique filename for the resulting PDF
		$linkToPDFFull = $linkToPDF = tempnam(dirname(__FILE__), 'PDF-');
		// Remove the temporary file it creates
		unlink($linkToPDFFull);
		// Give it an extension
		$linkToPDFFull .= '.pdf';
		$linkToPDF .= '.pdf';
		// Make it web accessible
		$linkToPDF = basename($linkToPDF);
		$defaultDomain = 'www.rustyparts.com';
		
		// Buffer the current html page so we can write it to file later
		ob_start();
		?>
		<html>
		<head>
		  <title>Testing HTML_ToPDF</title>
		  <style type="text/css">
		  div.noprint {
			display: none;
		  }
		  h6 {
			font-style: italic;
			font-weight: bold;
			font-size: 14pt;
			font-family: Courier;
			color: blue;
		  }
		  /** Change the paper size, orientation, and margins */
		  @page {
			size: 8.5in 14in;
			orientation: landscape;
		  }
		  /** This is a bit redundant, but its works ;) */
		  /** odd pages */
		  @page:right {
			margin-right: 1.0cm;
			margin-left: 1.0cm;
			margin-top: 1.0cm;
			margin-bottom: 1.0cm;
		  }
		  /** even pages */
		  @page:left {
			margin-right: 1.0cm;
			margin-left: 1.0cm;
			margin-top: 1.0cm;
			margin-bottom: 1.0cm;
		  }
		  </style>
		</head>
		<body>
		  An example dynamic page that is converted to PDF on 8x14 paper, 
		  in landscape mode, with 1.0cm margins!<br /> 
		  And what about <sub>subscript</sub> or <sup>superscript</sup>?<br />
		  Hmmm...one last test, special characters: &alpha; &copy; &#187;<br /><br />
		  This document has been encrypted with the helper PDFEncryptor class so you will need to
		  enter "foobar" for the password<br />
		  This should open straight into your PDF reader, 
		  but, if not, click <a href="<?php echo $linkToPDF; ?>">here</a> to view the PDF file.<br />
		  <div class="noprint">This should not show up.</div>
		  <h6>
		  This demonstrates the use of CSS classes for an element.<br />
		  What CSS properties and blocks can be used can be found at 
		  <a href="http://www.tdb.uu.se/~jan/html2psug.html">http://www.tdb.uu.se/~jan/html2psug.html</a>
		  </h6>
		  Inserting a page break..<br /><br />
		  <!--NewPage-->
		  Now on to page 2!
		  A linked image with a relative path:<br />
		  <a href="http://rustyparts.com/pb"><img src="tuckered.jpg" /></a>
		</body>
		</html>
		<?php
		// Send the class our HTML and the defaultDomain for images, css, etc.
		$pdf =& new HTML_ToPDF(ob_get_contents(), $defaultDomain);
		// We won't be sending out the HTML to the user
		ob_end_clean();
		$pdf->setDefaultPath('/scripts/HTML_ToPDF/examples/');
		// Could turn on debugging to see what exactly is happening
		// (commands being run, images being grabbed, etc.)
		// $pdf->setDebug(true);
		// Convert the file
		$result = $pdf->convert();
		
		// Check if the result was an error
		if (is_a($result, 'HTML_ToPDFException')) {
			die($result->getMessage());
		}
		else {
			// Move the generated PDF to the web accessible file
			copy($result, $linkToPDFFull);
			unlink($result);
		
			// Set up encryption
			$encryptor =& new PDFEncryptor($linkToPDFFull);
			// Set paths
			$encryptor->setJavaPath('/usr/lib/j2se/1.4/bin/java');
			$encryptor->setITextPath(dirname(__FILE__) . '/../lib/itext-1.3.jar');
			// Set meta-data
			$encryptor->setAuthor('Paul Bunyan');
			$encryptor->setKeywords('HTML_ToPDF, php, encryption of PDF');
			$encryptor->setSubject('Example of HTML_ToPDF with Ecnryption');
			$encryptor->setTitle('Showing its stuff');
			// Set permissions
			$encryptor->setAllowPrinting(false);
			$encryptor->setAllowModifyContents(false);
			$encryptor->setAllowDegradedPrinting(true);
			$encryptor->setAllowCopy(true);
			// Set password
			$encryptor->setUserPassword('foobar');
			$encryptor->setOwnerPassword('barfoo');
			$result = $encryptor->encrypt();
			if (is_a($result, 'PDFEncryptorException')) {
				die($result->getMessage());
			}
		}
		
		header('Pragma: public');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="example.pdf"');
		readfile($linkToPDFFull);
		unlink($linkToPDFFull);

/*		$con = mysql_connect($sql_host,$sql_user,$sql_pass);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($sql_db_name1, $con);
		
		echo "";
		
		mysql_close($con);*/
	}
?>

</body>
</html>
