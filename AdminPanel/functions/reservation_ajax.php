 <?php include "../../functions/config.php" ?>


<?php 

	$id = $_POST["id"];
	
			$result = mysql_query("SELECT * FROM reservation where reservation_id = $id ");
			
			$array =  mysql_fetch_row($result);

			 echo json_encode($array);
			
			

?>