<?php

	/* Working with MySQL */
	
	require ('mysqlprefs.php');
	
	/* Connect to MySQL Server */
	
	// Connect to MySQL Server
	$con = mysql_connect($sql_host,$sql_user,$sql_pass);
	if (!$con)
		{
			die ('<br/>' . date('Y-m-d @ H:i:s: ') . 'Could not connect: ' . mysql_error());
		}
	else
		{
			echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Opened MySQL connection to ' . $sql_host . '.';
		}
	
	/* Clear MySQL Database */
	
	// Construction of MySQL DROP query
	$sql_drop = 'DROP DATABASE ' . $sql_db_name1;
	
	// Drop MySQL database
	
	if (!mysql_query($sql_drop, $con))
		{
			echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Error dropping database ' . $sql_db_name1 . ': ' . mysql_error();
		}
	else
		{
			echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Dropped MySQL database ' . $sql_db_name1 . '.';
		}
	
	/* Create MySQL Database */
	
	// Construction of MySQL CREATE query
	$sql_create = 'CREATE DATABASE ' . $sql_db_name1;
	
	// Create MySQL database
	if (!mysql_query($sql_create, $con))
		{
			echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Error creating database ' . $sql_db_name1 . ': ' . mysql_error();
		}
	else
		{
			echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Created MySQL database ' . $sql_db_name1 . '.';
		}
	
	/* Create MySQL Tables in previously-created database */
	
	// Select appropriate MySQL database
	mysql_select_db($sql_db_name1, $con);
	
	// Create table and fields in $sql_db_name1
	
	// Execute query and make log entry
	if (!mysql_query($create_query1, $con))
		{
			echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Error creating table ' . $sql_table_name1 . ': ' . mysql_error();
		}
	else
		{
			echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Created MySQL table ' . $sql_table_name1 . '.';
		}
	
	/* Insert Data into previously-created table */
	
	// Select appropriate MySQL database
	mysql_select_db($sql_db_name1, $con);
	
	// Insert test data into $sql_table_name1
	// Construction of MySQL INSERT queries
//	$insert_query1 = "INSERT INTO " . $sql_table_name1 . "(sales, service, shipping, sonumber, startdate, custname, custschool, custline3, unitlocname, unitlocstreet, unitloczip, division, sapnumber, ordertakenby, employeenumber, worktobedone, itemtoship1, itembilling1, laborname, laborhours, laborbilling, completedname, datecompleted, isdeleted) VALUES ('1', '0', '1', '1234-56-789-ABC', '2010-04-20', 'Customer Name', 'Customer School', 'Extra Line', 'Unit Location Name', 'Unit Location Street', 'Unit Location City, State, Zip', '1', '1234567890', 'Adrian', '011', 'Please describe the work to be done.', 'Shipping Item 1', '1', 'Adrian', '5', '1', 'Adrian', '2010-04-20', '0')";
//	$insert_query2 = "INSERT INTO " . $sql_table_name1 . "(sales, service, shipping, sonumber, startdate, custname, custschool, custline3, unitlocname, unitlocstreet, unitloczip, division, sapnumber, ordertakenby, employeenumber, worktobedone, itemtoship1, itembilling1, laborname, laborhours, laborbilling, completedname, datecompleted, isdeleted) VALUES ('1', '0', '1', '1234-56-789-ABC', '2010-04-20', 'Customer Name', 'Customer School', 'Extra Line', 'Unit Location Name', 'Unit Location Street', 'Unit Location City, State, Zip', '1', '1234567890', 'Adrian', '011', 'Please describe the work to be done.', 'Shipping Item 1', '1', 'Adrian', '5', '1', 'Adrian', '2010-04-20', '0')";
	
	// Execute queries and make log entries
	if (mysql_query($insert_query1))
	{
		echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Inserted MySQL entries into ' . $sql_table_name1 . '.';
	}
	else
	{
		echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Error inserting entries into ' . $sql_table_name1 . ': ' . mysql_error();
	}
	
	if (mysql_query($insert_query2))
	{
		echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Inserted MySQL entries into ' . $sql_table_name1 . '.';
	}
	else
	{
		echo '<br/>' . date('Y-m-d @ H:i:s: ') . 'Error inserting entries into ' . $sql_table_name1 . ': ' . mysql_error();
	}
		
	// Close MySQL connection and make log entry
	$close = mysql_close($con);
	if (!$close)
	{
		die ('<br/>' . date('Y-m-d @ H:i:s: ') . 'Could not disconnect: ' . mysql_error());
	}
	else
	{
		echo '<br />' . date('Y-m-d @ H:i:s: ') . 'Closed MySQL connection to ' . $sql_host . '.';
	}

?>
