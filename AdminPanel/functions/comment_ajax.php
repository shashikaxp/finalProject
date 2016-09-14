 <?php include "../../functions/config.php" ?>


<?php 

	$id = $_GET["id"];
	
			$result = mysql_query("SELECT * FROM comment where comment_id = $id ");
			
			$array =  mysql_fetch_row($result);

			 echo json_encode($array);
			
			

?>