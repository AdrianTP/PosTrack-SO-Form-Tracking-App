<?
/*$sonumber = "1234-56-789-POS";
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
$itembilling1 = "1";
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
$laborbilling = "1";
$completedname = "Adrian";
$datecompleted  = "2010-04-20";
*/?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<html>
	
	<head>
	
		<meta content='text/html; charset=ISO-8859-1'http-equiv='content-type'>
		
		<title>PosTrack Service Orders</title>
		
		<link rel='stylesheet' type='text/css' href='./css/main-css.php' />
		<script type='text/javascript' src='./js/showhide.js'></script>
		<script type='text/javascript' src='./js/confirm.js'></script>
		<script type='text/javascript' src='./js/jquery.js'></script>
<!--	
		<link rel='stylesheet' type='text/css' href='./css/special-features.css' />
		<script type='text/javascript' src='./js/fade2.js'></script>
-->

		
	</head>
	
	<body>
	
		<? require ('./php/pttsoform.php'); ?>
		
		<div>
			<div id='columnone'>
				<table class='sidebartable'>
					<tr>
						<td>
							<a href='pttsoformsubmit.php' class='detail button'>Add Record</a>
						</td>
					</tr>
					<tr>
						<td>
							
						</td>
					</tr>
				</table>
			</div>
			<div id='columntwo'>
			
				<? fillTable(); ?>
				
			</div>
			
		</div>
	
	</body>
	
</html>




















