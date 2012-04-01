<?php
	
	require ('mysqlprefs.php');
		
	// This function, when called, will fill html tables with data found in the notes table
	function fillNotes()
	{
		$con = mysql_connect($sql_host,$sql_user,$sql_pass);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($sql_db_name1, $con);
		
		$result = mysql_query("SELECT * FROM " . $sql_table_name1);
		
		while($row = mysql_fetch_array($result))
		{
			echo
			"
				<form class='inputForm' action='updatenotes.php' method='post'>
					<table id='shipping' style='border-bottom:2px solid #000;'>
						<tr>
							<td class='notesColumnOne'>
								<input class='noBorderInput' type='text' name='number' value='" . $row['number'] . "' />
							</td>
							<td class='notesColumnTwo'>
								<input class='noBorderInput' type='text' name='location' value='" . $row['location'] . "' />
							</td>
						</tr>
						<tr class='alt'>
							<td colspan='2'>
								<input class='noBorderInput' style='float:left;width:80%;' type='text' name='description' value='" . $row['description'] . "' />
								<input class='noBorderInput' type='hidden' name='ticketID' value='" . $row['ticketID'] . "' />
								<input class='skinnySubmit' style='float:right;width:15px;' type='submit' name='button' value='X'/>
								<input class='skinnySubmit' style='float:right;width:15px;' type='submit' name='button' value='!'/>
							</td>
						</tr>
					</table>
				</form>
			";
		}
		
		mysql_close($con);
	}
	
	function notesInputForm()
	{
		echo
		"
		<form class='inputForm' action='updatenotes.php' method='post'>
				<table id='shipping' style='border:2px solid #000;'>
					<tr>
						<td class='shippingColumnOne'><input class='noBorderInput' type='text' name='number' value='#' /></td>
						<td class='shippingColumnTwo'><input class='noBorderInput' type='text' name='location' value='Location' /></td>
					</tr>
					<tr class='alt'>
						<td colspan='2'><input class='noBorderInput' style='width:80%;' type='text' name='description' value='Description' />
						<input class='flatSubmit' type='submit' name='button' value='>'/></td>
					</tr>
				</table>
			</form>	
		";
	}

?>
