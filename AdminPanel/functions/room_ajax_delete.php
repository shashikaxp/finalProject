 <?php include "../../functions/config.php" ?>


<?php 

	$id = $_POST["id"];
	
	

	

		$sql = "DELETE FROM room WHERE room_id='$id'; "	;
				
		$result =	mysql_query($sql);
			
	

		

?>