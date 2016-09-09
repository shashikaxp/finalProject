
<?php

session_start();

		$_SESSION["fname"] = $_POST["f_name"] ;
		$_SESSION["lname"] = $_POST["l_name"] ;
		$_SESSION["addr_line1"] = $_POST["addr_line1"] ;
		$_SESSION["addr_line2"] = $_POST["addr_line2"] ;
		$_SESSION["city"] = $_POST["city"] ;
		$_SESSION["zip"] = $_POST["zip_code"] ;
		$_SESSION["country"] =	$_POST["country"] ; 
		$_SESSION["contact"] = $_POST["contact"] ;
		$_SESSION["email"]	= $_POST["email"]
	
	//	echo "redda" ;
		echo $_SESSION["fname"];

?>