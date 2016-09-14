 <?php include "../../functions/config.php" ?>


<?php 

	$id = $_GET["id"];
	$status = $_GET["status"];
	

	

		$sql = "UPDATE comment SET status='$status'	WHERE comment_id='$id'; "	;
				
		$result =	mysql_query($sql);
			
	
		

?>