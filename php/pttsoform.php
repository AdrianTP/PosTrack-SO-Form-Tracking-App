<?php
	
	require ('mysqlprefs.php');
	
	// This function, when called, will fill the fields in an so form with data from the table
	function fillTable()
	{
		global $sql_host;
		global $sql_user;
		global $sql_pass;
		global $sql_db_name1;
		global $sql_table_name1;
		$con = mysql_connect($sql_host,$sql_user,$sql_pass);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($sql_db_name1, $con);
		
		$result = mysql_query("SELECT * FROM " . $sql_table_name1);
		
		$tablenumber = 0;
		
		while($row = mysql_fetch_array($result))
		{
			$tablenumber ++;
			if ($row['isdeleted'] == 0)
			{
				echo
				"
						<form action='./php/updatesoform.php' method='post'>
							<table class='sotable smalltable' style='display: block;' id='smalltable" . $row['soID'] . "'>
								<tr>
									<td>
										<input class='noborder specialwidth' type='text' name='sonumber' value='" . $row['sonumber'] . "' />
									</td>
									<td>
										<input class='noborder' type='text' name='custschool' value='" . $row['custschool'] . "' />
									</td>
									<td>
										<input class='noborder' type='text' name='datecompleted' value='" . $row['datecompleted'] . "' />
									</td>
									<td colspan='3'>
										<input class='noborder' id='worktobedone_width' type='text' name='worktobedone' value='" . $row['worktobedone'] . "' />
									</td>
									<td>
										<input class='noborder' type='text' name='itemtoship1' value='" . $row['itemtoship1'] . "' />
									</td>
									<td>
										<input class='noborder quarterwidth'  type='text' name='soID' value='" . $row['soID'] . "' /><a href='#' class='detail button' onclick=\"show('bigtable" . $row['soID'] . "');hide('smalltable" . $row['soID'] . "');\">Show</a>
									</td>
								</tr>
							</table>
							<table class='sotable bigtable' style='display: none;' id='bigtable" . $row['soID'] . "'>
								<tr>
									<td>
										SO#:
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='sonumber' value='" . $row['sonumber'] . "' />
									</td>
									<td>
										In:
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='startdate' value='" . $row['startdate'] . "' />
									</td>
									<td>
										Order Type:
									</td>
									<td colspan='2'>
										Sales<input class='noborder'  ";
										if($row['sales']==1){echo"checked ";}
										echo"type='checkbox' name='sales' tabindex=1 value='1' /> / Service<input class='noborder'  ";
										if($row['service']==1){echo"checked ";}
										echo"type='checkbox' name='service' tabindex=2 value='1' /> / Ship<input class='noborder'  ";
										if($row['shipping']==1){echo"checked ";}
										echo"type='checkbox' name='shipping' tabindex=3 value='1' />
									</td>
									<td>
										ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
									<td>
										<input class='noborder quarterwidth'  type='text' name='soID' value='" . $row['soID'] . "' /><a href='#' class='detail button' onclick=\"hide('bigtable" . $row['soID'] . "');show('smalltable" . $row['soID'] . "');\">Hide</a>
									</td>
								</tr>
								<tr>
									<td>
										SAP:
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='sapnumber' value='" . $row['sapnumber'] . "' />
									</td>
									<td>
										Out:
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='datecompleted' value='" . $row['datecompleted'] . "' />
									</td>
									<td>
										Division:
									</td>
									<td colspan='2'>
										POS<input class='noborder'  ";
										if($row['division']==1){echo"checked ";}
										echo"type='radio' name='division' value='1' /> / VOIP<input class='noborder'  ";
										if($row['division']==2){echo"checked ";}
										echo"type='radio' name='division' value='2' /> / INT<input class='noborder'  ";
										if($row['division']==3){echo"checked ";}
										echo"type='radio' name='division' value='3' />
									</td>
									<td colspan='2'>
										<input type='submit' class='update button' name='button' value='Update' onclick='return confirmUpdate();' />
										<input type='submit' class='view button' name='button' value='View' />
										<input type='submit' class='delete button' name='button' value='Delete' onclick='return confirmDelete();' />
									</td>
								</tr>
								<tr>
									<td>
										Address:
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='unitlocname' value='" . $row['unitlocname'] . "' />
									</td>
									<td>
										Unit:
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='custschool' value='" . $row['custschool'] . "' />
									</td>
									<td>
										Taken:
									</td>
									<td>
										<input class='noborder halfwidth'  type='text' name='ordertakenby' value='" . $row['ordertakenby'] . "' />
									</td>
									<td>
										Employee#:
									</td>
									<td colspan='2'>
										<input class='noborder quarterwidth'  type='text' name='employeenumber' value='" . $row['employeenumber'] . "' /><input type='submit' class='view button' name='button' value='PDF' />
									</td>
								</tr>
								<tr>
									<td rowspan='2'>
										
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='unitlocstreet' value='" . $row['unitlocstreet'] . "' />
									</td>
									<td rowspan='2'>
										
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='custname' value='" . $row['custname'] . "' />
									</td>
									<td>
										Labor:
									</td>
									<td>
										<input class='noborder halfwidth'  type='text' class='halfwidth' name='laborname' value='" . $row['laborname'] . "' />
									</td>
									<td>
										Hours:
									</td>
									<td colspan='2'>
										<input class='noborder quarterwidth'  type='text' name='laborhours' value='" . $row['laborhours'] . "' /><input style='display:none;' class='quarterwidth' name='isdeleted' type='text' value='" . $row['isdeleted'] . "' />
									</td>
								</tr>
								<tr>
									<td>
										<input class='noborder doublewidth'  type='text' name='unitloczip' value='" . $row['unitloczip'] . "' />
									</td>
									<td>
										<input class='noborder doublewidth'  type='text' name='custline3' value='" . $row['custline3'] . "' />
									</td>
									<td>
										Completed:
									</td>
									<td>
										<input class='noborder halfwidth'  type='text' class='halfwidth' name='completedname' value='" . $row['completedname'] . "' />
									</td>
									<td>
										Bill?
									</td>
									<td colspan='2'>
										Yes<input class='noborder'  ";
										if($row['laborbilling']==1){echo"checked ";}
										echo"type='radio' name='laborbilling' value='1' /> / No<input class='noborder'  ";
										if($row['laborbilling']==0){echo"checked ";}
										echo"type='radio' name='laborbilling' value='0' />
									</td>
								</tr>
								<tr>
									<td>
										Work:
									</td>
									<td colspan='3' rowspan='4'>
										<textarea name='worktobedone' rows='6' cols='85'>" . $row['worktobedone'] . "</textarea>
									</td>
									<td>
										<input class='noborder'  type='text' name='itemtoship1' value='" . $row['itemtoship1'] . "' />
									</td>
									<td>
										Yes<input class='noborder'  ";
										if($row['itembilling1']==1){echo"checked ";}
										echo"type='radio' name='itembilling1' value='1' /> / No<input class='noborder'  ";
										if($row['itembilling1']==0){echo"checked ";}
										echo"type='radio' name='itembilling1' value='0' />
									</td>
									<td>
										<input class='noborder'  type='text' name='itemtoship5' value='" . $row['itemtoship5'] . "' />
									</td>
									<td colspan='2'>
										Yes<input class='noborder'  ";
										if($row['itembilling5']==1){echo"checked ";}
										echo"type='radio' name='itembilling5' value='1' /> / No<input class='noborder'  ";
										if($row['itembilling5']==0){echo"checked ";}
										echo"type='radio' name='itembilling5' value='0' />
									</td>
								</tr>
								<tr>
									<td rowspan='3'>
										&nbsp;
									</td>
									<td>
										<input class='noborder'  type='text' name='itemtoship2' value='" . $row['itemtoship2'] . "' />
									</td>
									<td>
										Yes<input class='noborder'  ";
										if($row['itembilling2']==1){echo"checked ";}
										echo"type='radio' name='itembilling2' value='1' /> / No<input class='noborder'  ";
										if($row['itembilling2']==0){echo"checked ";}
										echo"type='radio' name='itembilling2' value='0' />
									</td>
									<td>
										<input class='noborder'  type='text' name='itemtoship6' value='" . $row['itemtoship6'] . "' />
									</td>
									<td colspan='2'>
										Yes<input class='noborder'  ";
										if($row['itembilling6']==1){echo"checked ";}
										echo"type='radio' name='itembilling6' value='1' /> / No<input class='noborder'  ";
										if($row['itembilling6']==0){echo"checked ";}
										echo"type='radio' name='itembilling6' value='0' />
									</td>
								</tr>
								<tr>
									<td>
										<input class='noborder'  type='text' name='itemtoship3' value='" . $row['itemtoship3'] . "' />
									</td>
									<td>
										Yes<input class='noborder'  ";
										if($row['itembilling3']==1){echo"checked ";}
										echo"type='radio' name='itembilling3' value='1' /> / No<input class='noborder'  ";
										if($row['itembilling3']==0){echo"checked ";}
										echo"type='radio' name='itembilling3' value='0' />
									</td>
									<td>
										<input class='noborder'  type='text' name='itemtoship7' value='" . $row['itemtoship7'] . "' />
									</td>
									<td colspan='2'>
										Yes<input class='noborder'  ";
										if($row['itembilling7']==1){echo"checked ";}
										echo"type='radio' name='itembilling7' value='1' /> / No<input class='noborder'  ";
										if($row['itembilling7']==0){echo"checked ";}
										echo"type='radio' name='itembilling7' value='0' />
									</td>
								</tr>
								<tr>
									<td>
										<input class='noborder'  type='text' name='itemtoship4' value='" . $row['itemtoship4'] . "' />
									</td>
									<td>
										Yes<input class='noborder'  ";
										if($row['itembilling4']==1){echo"checked ";}
										echo"type='radio' name='itembilling4' value='1' /> / No<input class='noborder'  ";
										if($row['itembilling4']==0){echo"checked ";}
										echo"type='radio' name='itembilling4' value='0' />
									</td>
									<td>
										<input class='noborder'  type='text' name='itemtoship8' value='" . $row['itemtoship8'] . "' />
									</td>
									<td colspan='2'>
										Yes<input class='noborder'  ";
										if($row['itembilling8']==1){echo"checked ";}
										echo"type='radio' name='itembilling8' value='1' /> / No<input class='noborder'  ";
										if($row['itembilling8']==0){echo"checked ";}
										echo"type='radio' name='itembilling8' value='0' />
									</td>
								</tr>
							</table>
						</form>
				";
			}
		}
		
		mysql_close($con);
	}
	
	function fillForm()
	{
		global $sql_host;
		global $sql_user;
		global $sql_pass;
		global $sql_db_name1;
		global $sql_table_name1;
		$con = mysql_connect($sql_host,$sql_user,$sql_pass);
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db($sql_db_name1, $con);
		
		$result = mysql_query("SELECT * FROM " . $sql_table_name1);
		
		$row = mysql_fetch_array($result);
		echo "		
	</head>
	
	<body>
		<form id='form' action='./php/updatesoform.php' method='post'>
			<img id='logo' src='./img/pttlogo.jpg' />
			<h1>
				Service Order <input class='underline' name='soID' type='text' tabindex=4 value='" . $row['soID'] . "' />
			</h1>
			<fieldset id='ordertype' class='fields'>
				<legend><h2>This is a:</h2></legend>
				<table class='checkboxes'>
					<tr>
						<td>
							<input type='checkbox' name='sales' tabindex=1 value='1' />
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
							<input type='checkbox' name='service' tabindex=2 value='1' />
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
							<input type='checkbox' name='shipping' tabindex=3 value='1' />
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
							<input class='underline' name='sonumber' type='text' tabindex=4 value='" . $sonumber . "' />
						</td>
						<td>
							Date:
						</td>
						<td>
							<input class='underline' name='startdate' type='text' tabindex=5 value='" . date('Y-m-d') . "' />
						</td>
					</tr>
					<tr>
						<td>
							Customer:
						</td>
						<td>
							<input class='underline' name='custname' type='text' tabindex=6 value='" . $custname . "' />
						</td>
						<td>
							Unit Location:
						</td>
						<td>
							<input class='underline' name='unitlocname' type='text' tabindex=9 value='" . $unitlocname . "' />
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<input class='underline' name='custschool' type='text' tabindex=7 value='" . $custschool . "' />
						</td>
						<td>
						</td>
						<td>
							<input class='underline' name='unitlocstreet' type='text' tabindex=10 value='" . $unitlocstreet . "' />
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<input class='underline' name='custline3' type='text' tabindex=8 value='" . $custline3 . "' />
						</td>
						<td>
						</td>
						<td>
							<input class='underline' name='unitloczip' type='text' tabindex=11 value='" . $unitloczip . "' />
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
							if ($division == 1){echo "checked ";}
							echo "type='radio' name='division' value='1' /> POS / <input class='radiobutton' ";
							if ($division == 2){echo "checked ";}
							echo "type='radio' name='division' value='2' /> VOIP / <input class='radiobutton' ";
							if ($division == 3){echo "checked ";}
							echo "type='radio' name='division' value='3' /> INT (company use)
						</td>
						<td>
							SAP#:
						</td>
						<td>
							<input class='underline' name='sapnumber' type='text' value='" . $sapnumber . "' />
						</td>
					</tr>
					<tr>
						<td>
							Order Taken By:
						</td>
						<td>
							<input class='underline' name='ordertakenby' type='text' value='" . $ordertakenby . "' />
						</td>
						<td>
							Employee Number:
						</td>
						<td>
							<input class='underline' name='employeenumber' type='text' value='" . $employeenumber . "' />
						</td>
					</tr>
					<tr>
						<td>
							Work to be Done:
						</td>
						<td rowspan='2' colspan='3'>
							<textarea class='outline' name='worktobedone' rows='5' cols='75'>" . $worktobedone . "</textarea>
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
							<input class='underline' name='itemtoship1' type='text' value='" . $itemtoship1 . "' />
						</td>
						<td>
							<input class='radiobutton' ";
							if ($itembilling1 == 1){echo "checked ";}
							echo "type='radio' name='itembilling1' value='1' /> / <input class='radiobutton' ";
							if ($itembilling1 == 0){echo "checked ";}
							echo "type='radio' name='itembilling1' value='0' />
						</td>
						<td>
							&nbsp;
						</td>
						<td colspan='2'>
							<input class='underline' name='itemtoship5' type='text' value='" . $itemtoship5 . "' />
						</td>
						<td>
							<input class='radiobutton' ";
							if ($itembilling5 == 1){echo "checked ";}
							echo "type='radio' name='itembilling5' value='1' /> / <input class='radiobutton' ";
							if ($itembilling5 == 0){echo "checked ";}
							echo "type='radio' name='itembilling5' value='0' />
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input class='underline' name='itemtoship2' type='text' value='" . $itemtoship2 . "' />
						</td>
						<td>
							<input class='radiobutton' ";
							if ($itembilling2 == 1){echo "checked ";}
							echo "type='radio' name='itembilling2' value='1' /> / <input class='radiobutton' ";
							if ($itembilling2 == 0){echo "checked ";}
							echo "type='radio' name='itembilling2' value='0' />
						</td>
						<td>
							&nbsp;
						</td>
						<td colspan='2'>
							<input class='underline' name='itemtoship6' type='text' value='" . $itemtoship6 . "' />
						</td>
						<td>
							<input class='radiobutton' ";
							if ($itembilling6 == 1){echo "checked ";}
							echo "type='radio' name='itembilling6' value='1' /> / <input class='radiobutton' ";
							if ($itembilling6 == 0){echo "checked ";}
							echo "type='radio' name='itembilling6' value='0' />
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input class='underline' name='itemtoship3' type='text' value='" . $itemtoship3 . "' />
						</td>
						<td>
							<input class='radiobutton' ";
							if ($itembilling3 == 1){echo "checked ";}
							echo "type='radio' name='itembilling3' value='1' /> / <input class='radiobutton' ";
							if ($itembilling3 == 0){echo "checked ";}
							echo "type='radio' name='itembilling3' value='0' />
						</td>
						<td>
							&nbsp;
						</td>
						<td colspan='2'>
							<input class='underline' name='itemtoship7' type='text' value='" . $itemtoship7 . "' />
						</td>
						<td>
							<input class='radiobutton' ";
							if ($itembilling7 == 1){echo "checked ";}
							echo "type='radio' name='itembilling7' value='1' /> / <input class='radiobutton' ";
							if ($itembilling7 == 0){echo "checked ";}
							echo "type='radio' name='itembilling7' value='0' />
						</td>
					</tr>
					<tr>
						<td colspan='2'>
							<input class='underline' name='itemtoship4' type='text' value='" . $itemtoship4 . "' />
						</td>
						<td>
							<input class='radiobutton' ";
							if ($itembilling4 == 1){echo "checked ";}
							echo "type='radio' name='itembilling4' value='1' /> / <input class='radiobutton' ";
							if ($itembilling4 == 0){echo "checked ";}
							echo "type='radio' name='itembilling4' value='0' />
						</td>
						<td>
							&nbsp;
						</td>
						<td colspan='2'>
							<input class='underline' name='itemtoship8' type='text' value='" . $itemtoship8 . "' />
						</td>
						<td>
							<input class='radiobutton' ";
							if ($itembilling8 == 1){echo "checked ";}
							echo "type='radio' name='itembilling8' value='1' /> / <input class='radiobutton' ";
							if ($itembilling8 == 0){echo "checked ";}
							echo "type='radio' name='itembilling8' value='0' />
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
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
							<input class='underline' name='laborname' type='text' value='" . $laborname . "' />
						</td>
						<td>
							Hours:
						</td>
						<td>
							<input class='underline' name='laborhours' type='text' value='" . $laborhours . "' />
						</td>
						<td>
							Bill? <input class='radiobutton' ";
							if ($laborbilling == 1){echo "checked ";}
							echo"type='radio' name='laborbilling' value='1' />Yes / <input class='radiobutton' ";
							if ($laborbilling == 0){echo "checked ";}
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
							<input class='underline' name='completedname' type='text' value='" . $completedname . "' />
						</td>
						<td>
						</td>
						<td>
							<input class='underline' name='datecompleted' type='text' value='" . date('Y-m-d') . "' />
						</td>
					</tr>
				</table>
			</fieldset>
			<fieldset class='fields' style='border: none;'>
				<input type='submit' class='detail button' name='button' value='Update'/>
				<a href='./' class='detail button'>Return to List</a>
			</fieldset>
		</form>
		
	</body>
	
</html>
";
/*			echo
			"
					<form action='./php/updatesoform.php' method='post'>
						<table class='sotable smalltable' style='display: block;' id='smalltable" . $row['soID'] . "'>
							<tr>
								<td>
									<input class='noborder specialwidth' type='text' name='sonumber' value='" . $row['sonumber'] . "' />
								</td>
								<td>
									<input class='noborder' type='text' name='custschool' value='" . $row['custschool'] . "' />
								</td>
								<td>
									<input class='noborder' type='text' name='datecompleted' value='" . $row['datecompleted'] . "' />
								</td>
								<td colspan='3'>
									<input class='noborder' id='worktobedone_width' type='text' name='worktobedone' value='" . $row['worktobedone'] . "' />
								</td>
								<td>
									<input class='noborder' type='text' name='itemtoship1' value='" . $row['itemtoship1'] . "' />
								</td>
								<td>
									<input class='noborder quarterwidth'  type='text' name='soID' value='" . $row['soID'] . "' /><a href='#' class='detail button' onclick=\"show('bigtable" . $row['soID'] . "');hide('smalltable" . $row['soID'] . "');\">Show</a>
								</td>
							</tr>
						</table>
						<table class='sotable bigtable' style='display: none;' id='bigtable" . $row['soID'] . "'>
							<tr>
								<td>
									SO#:
								</td>
								<td>
									<input class='noborder'  type='text' name='sonumber' value='" . $row['sonumber'] . "' />
								</td>
								<td>
									In:
								</td>
								<td>
									<input class='noborder'  type='text' name='startdate' value='" . $row['startdate'] . "' />
								</td>
								<td>
									Order Type:
								</td>
								<td colspan='2'>
									Sales<input class='noborder'  ";
									if($row['sales']==1){echo"checked ";}
									echo"type='checkbox' name='sales' tabindex=1 value='1' /> / Service<input class='noborder'  ";
									if($row['service']==1){echo"checked ";}
									echo"type='checkbox' name='service' tabindex=2 value='1' /> / Ship<input class='noborder'  ";
									if($row['shipping']==1){echo"checked ";}
									echo"type='checkbox' name='shipping' tabindex=3 value='1' />
								</td>
								<td>
									ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								</td>
								<td>
									<input class='noborder quarterwidth'  type='text' name='soID' value='" . $row['soID'] . "' /><a href='#' class='detail button' onclick=\"hide('bigtable" . $row['soID'] . "');show('smalltable" . $row['soID'] . "');\">Hide</a>
								</td>
							</tr>
							<tr>
								<td>
									SAP:
								</td>
								<td>
									<input class='noborder'  type='text' name='sapnumber' value='" . $row['sapnumber'] . "' />
								</td>
								<td>
									Out:
								</td>
								<td>
									<input class='noborder'  type='text' name='datecompleted' value='" . $row['datecompleted'] . "' />
								</td>
								<td>
									Division:
								</td>
								<td colspan='2'>
									POS<input class='noborder'  ";
									if($row['division']==1){echo"checked ";}
									echo"type='radio' name='division' value='1' /> / VOIP<input class='noborder'  ";
									if($row['division']==2){echo"checked ";}
									echo"type='radio' name='division' value='2' /> / INT<input class='noborder'  ";
									if($row['division']==3){echo"checked ";}
									echo"type='radio' name='division' value='3' />
								</td>
								<td colspan='2'>
									<input type='submit' class='update button' name='button' value='Update' onclick='if (confirmUpdate()) submit();' />
									<input type='submit' class='view button' name='button' value='View' />
									<input type='submit' class='delete button' name='button' value='Delete' onclick='if (confirmDelete()) submit();' />
								</td>
							</tr>
							<tr>
								<td>
									Address:
								</td>
								<td>
									<input class='noborder'  type='text' name='unitlocname' value='" . $row['unitlocname'] . "' />
								</td>
								<td>
									Unit:
								</td>
								<td>
									<input class='noborder'  type='text' name='custschool' value='" . $row['custschool'] . "' />
								</td>
								<td>
									Taken:
								</td>
								<td>
									<input class='noborder'  type='text' class='halfwidth' name='ordertakenby' value='" . $row['ordertakenby'] . "' />
								</td>
								<td>
									Employee#:
								</td>
								<td colspan='2'>
									<input class='noborder'  type='text' class='quarterwidth' name='employeenumber' value='" . $row['employeenumber'] . "' />
								</td>
							</tr>
							<tr>
								<td rowspan='2'>
									
								</td>
								<td>
									<input class='noborder'  type='text' name='unitlocstreet' value='" . $row['unitlocstreet'] . "' />
								</td>
								<td rowspan='2'>
									
								</td>
								<td>
									<input class='noborder'  type='text' name='custname' value='" . $row['custname'] . "' />
								</td>
								<td>
									Labor:
								</td>
								<td>
									<input class='noborder'  type='text' class='halfwidth' name='laborname' value='" . $row['laborname'] . "' />
								</td>
								<td>
									Hours:
								</td>
								<td colspan='2'>
									<input class='noborder'  type='text' class='quarterwidth' name='laborhours' value='" . $row['laborhours'] . "' />
								</td>
							</tr>
							<tr>
								<td>
									<input class='noborder'  type='text' name='unitloczip' value='" . $row['unitloczip'] . "' />
								</td>
								<td>
									<input class='noborder'  type='text' name='custline3' value='" . $row['custline3'] . "' />
								</td>
								<td>
									Completed:
								</td>
								<td>
									<input class='noborder'  type='text' class='halfwidth' name='completedname' value='" . $row['completedname'] . "' />
								</td>
								<td>
									Bill?
								</td>
								<td colspan='2'>
									Yes<input class='noborder'  ";
									if($row['laborbilling']==1){echo"checked ";}
									echo"type='radio' name='laborbilling' value='1' /> / No<input class='noborder'  ";
									if($row['laborbilling']==0){echo"checked ";}
									echo"type='radio' name='laborbilling' value='0' />
								</td>
							</tr>
							<tr>
								<td>
									Work:
								</td>
								<td colspan='3' rowspan='4'>
									<textarea name='worktobedone' rows='6' cols='50'>" . $row['worktobedone'] . "</textarea>
								</td>
								<td>
									<input class='noborder'  type='text' name='itemtoship1' value='" . $row['itemtoship1'] . "' />
								</td>
								<td>
									Yes<input class='noborder'  ";
									if($row['itembilling1']==1){echo"checked ";}
									echo"type='radio' name='itembilling1' value='1' /> / No<input class='noborder'  ";
									if($row['itembilling1']==0){echo"checked ";}
									echo"type='radio' name='itembilling1' value='0' />
								</td>
								<td>
									<input class='noborder'  type='text' name='itemtoship5' value='" . $row['itemtoship5'] . "' />
								</td>
								<td colspan='2'>
									Yes<input class='noborder'  ";
									if($row['itembilling5']==1){echo"checked ";}
									echo"type='radio' name='itembilling5' value='1' /> / No<input class='noborder'  ";
									if($row['itembilling5']==0){echo"checked ";}
									echo"type='radio' name='itembilling5' value='0' />
								</td>
							</tr>
							<tr>
								<td rowspan='3'>
									&nbsp;
								</td>
								<td>
									<input class='noborder'  type='text' name='itemtoship2' value='" . $row['itemtoship2'] . "' />
								</td>
								<td>
									Yes<input class='noborder'  ";
									if($row['itembilling2']==1){echo"checked ";}
									echo"type='radio' name='itembilling2' value='1' /> / No<input class='noborder'  ";
									if($row['itembilling2']==0){echo"checked ";}
									echo"type='radio' name='itembilling2' value='0' />
								</td>
								<td>
									<input class='noborder'  type='text' name='itemtoship6' value='" . $row['itemtoship6'] . "' />
								</td>
								<td colspan='2'>
									Yes<input class='noborder'  ";
									if($row['itembilling6']==1){echo"checked ";}
									echo"type='radio' name='itembilling6' value='1' /> / No<input class='noborder'  ";
									if($row['itembilling6']==0){echo"checked ";}
									echo"type='radio' name='itembilling6' value='0' />
								</td>
							</tr>
							<tr>
								<td>
									<input class='noborder'  type='text' name='itemtoship3' value='" . $row['itemtoship3'] . "' />
								</td>
								<td>
									Yes<input class='noborder'  ";
									if($row['itembilling3']==1){echo"checked ";}
									echo"type='radio' name='itembilling3' value='1' /> / No<input class='noborder'  ";
									if($row['itembilling3']==0){echo"checked ";}
									echo"type='radio' name='itembilling3' value='0' />
								</td>
								<td>
									<input class='noborder'  type='text' name='itemtoship7' value='" . $row['itemtoship7'] . "' />
								</td>
								<td colspan='2'>
									Yes<input class='noborder'  ";
									if($row['itembilling7']==1){echo"checked ";}
									echo"type='radio' name='itembilling7' value='1' /> / No<input class='noborder'  ";
									if($row['itembilling7']==0){echo"checked ";}
									echo"type='radio' name='itembilling7' value='0' />
								</td>
							</tr>
							<tr>
								<td>
									<input class='noborder'  type='text' name='itemtoship4' value='" . $row['itemtoship4'] . "' />
								</td>
								<td>
									Yes<input class='noborder'  ";
									if($row['itembilling4']==1){echo"checked ";}
									echo"type='radio' name='itembilling4' value='1' /> / No<input class='noborder'  ";
									if($row['itembilling4']==0){echo"checked ";}
									echo"type='radio' name='itembilling4' value='0' />
								</td>
								<td>
									<input class='noborder'  type='text' name='itemtoship8' value='" . $row['itemtoship8'] . "' />
								</td>
								<td colspan='2'>
									Yes<input class='noborder'  ";
									if($row['itembilling8']==1){echo"checked ";}
									echo"type='radio' name='itembilling8' value='1' /> / No<input class='noborder'  ";
									if($row['itembilling8']==0){echo"checked ";}
									echo"type='radio' name='itembilling8' value='0' />
								</td>
							</tr>
						</table>
					</form>
			";
		}*/
		
		mysql_close($con);
	}

?>
