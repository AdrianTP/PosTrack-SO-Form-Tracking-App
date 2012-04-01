<?
	echo"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html>
	
	<head>
	
		<meta content='text/html; charset=ISO-8859-1'http-equiv='content-type'>
		
		<title>PosTrack Service Order Form</title>
		
		<link rel='stylesheet' type='text/css' href='./css/main-css.php' />
";//		<link rel='stylesheet' type='text/css' href='./css/special-features.css' />
//		<script type='text/javascript' src='./js/fade.js'></script>
//		<script type='text/javascript' src='./js/fade2.js'></script>

require ('./php/mysqlprefs.php');
require ('./php/pttsoform.php');

fillForm();

/*

$sonumber = "1234-56-789-POS";
$sapnumber = "123";
$startdate = "2010-04-20";
$custname = "Customer Name";
$custschool = "Customer School";
$custline3 = "Extra Line";
$unitlocname = "Unit Location Name";
$unitlocstreet = "Unit Location Street Address";
$unitloczip = "Unit Location City, State, Zip";
$division = "1";
$sapnumber = "1234567890";
$ordertakenby = "Adrian";
$employeenumber = "011";
$worktobedone = "Description of the Problem";
$itemtoship1 = "Item1";
$itembilling1 = "0";
$itemtoship2 = "";
$itembilling2 = "";
$itemtoship3 = "";
$itembilling3 = "";
$itemtoship4 = "";
$itembilling4 = "";
$itemtoship5 = "";
$itembilling5 = "";
$itemtoship6 = "";
$itembilling6 = "";
$itemtoship7 = "";
$itembilling7 = "";
$itemtoship8 = "";
$itembilling8 = "";
$laborname = "Adrian";
$laborhours = "2";
$laborbilling = "0";
$completedname = "Adrian";
$datecompleted  = "2010-04-20";

echo "		
	</head>
	
	<body>
		<form id='form' action='./php/updatesoform.php' method='post'>
			<img id='logo' src='./img/pttlogo.jpg' />
			<h1>
				Service Order <input class='underline' name='sonumber' type='text' tabindex=4 value='" . $sonumber . "' />
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
";*/
?>




















