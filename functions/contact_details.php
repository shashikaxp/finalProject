 <?php include "config.php" ?>

<?php 

	$sql= "INSERT INTO comment (name, email, subject, content )
		VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["subject"]."' ,'".$_POST["message"]."')";

	$result = mysql_query($sql);

	if($result){
		header("Location: {$_SERVER['HTTP_REFERER']}");
		
		echo "Thank You";
		
		
		
			}

?>	
