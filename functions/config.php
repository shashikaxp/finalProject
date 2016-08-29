<?php

	$db_host = "localhost"; 
	$db_username = "root";  
	$db_pass = "";  
	$db_name = "final"; 
 
	$con = mysql_connect($db_host,$db_username,$db_pass);
	
	if (mysqli_connect_errno())
	{
		echo "Failed to Connect to DB: " . mysqli_connect_error();
	}  

    mysql_select_db( $db_name , $con);

?>