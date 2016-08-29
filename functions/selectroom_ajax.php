 <?php include "config.php" ?>

<?php
	
session_start();

	$_SESSION["arival"]  =	$_POST["arrival"];
 	$_SESSION["departure"]  =	$_POST["departure"];
	$_SESSION["adult"] = $_POST["adult"];
	$_SESSION["child"]  = $_POST["child"];
	$max_pp = $_SESSION["child"]/2 + $_SESSION["adult"];


include "selectroom_details.php" ;



?>