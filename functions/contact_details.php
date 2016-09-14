 <?php include "config.php" ?>

<?php 

	$status = "Pending";
	
	$sql = "INSERT INTO comment (name, email, subject, content , status  )
		VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["subject"]."' ,'".$_POST["message"]."' , 'Pending' )";

	$result = mysql_query($sql);

	if($result){
		header("Location: {$_SERVER['HTTP_REFERER']}");
		
		echo "Thank You";
		
		
		
			}

?>	
