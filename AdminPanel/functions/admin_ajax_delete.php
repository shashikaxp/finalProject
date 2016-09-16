 <?php include "../../functions/config.php" ?>


<?php 

	 $id = $_POST["id"];
	
	

	

		$sql = "DELETE FROM user WHERE user_id='$id'; "	;
				
		$result =	mysql_query($sql);
			
	

		

?>