<?php include "../../functions/config.php" ?>


<?php 

	        $id = $_POST["id"];
	
			$result = mysql_query("SELECT * FROM amenities WHERE amenities_id = '$id' ");
			
			$array =  mysql_fetch_row($result);

			 echo json_encode($array);
			
			

?>