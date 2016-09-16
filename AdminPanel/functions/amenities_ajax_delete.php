 <?php include "../../functions/config.php" ?>


<?php 

	 $id = $_POST["id"];
	
	

	

		$sql = "DELETE FROM amenities WHERE amenities_id='$id'; "	;
				
		$result =	mysql_query($sql);
			
	

		

?>