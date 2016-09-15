 <?php include "../../functions/config.php" ?>


<?php 
	
session_start();	

$username = $_POST["username"];
$pw = $_POST["password"];
$pw2 = 2;
$position = 0;



$sql = mysql_query("SELECT * FROM user WHERE username = '$username' ");



while($row = mysql_fetch_array($sql)) {
	
	$pw2 = $row["password"];
	$position = $row["position"];
}

if( $pw2 == $pw ){		
	echo 1 ;
		$_SESSION["username"] = $username ;
	    $_SESSION["position"] = $position ;	
	
     }else{
	
	echo 0 ;
	
	}




?>


