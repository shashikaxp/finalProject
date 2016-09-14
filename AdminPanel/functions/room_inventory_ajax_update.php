 <?php include "../../functions/config.php" ?>


<?php 

	$id = $_POST["id"];
	$arrival = $_POST["arrival"];
	$departure = $_POST["departure"];
	$quantity = $_POST["quantity"];
	$rmid = $_POST["room_id"];
    $status = $_POST["status"];	
	$adults = $_POST["adult"];
	$child = $_POST["child"];
		
	

		$sql = "UPDATE roominventory SET arrival='$arrival', departure='$departure' , qty_reserve='$quantity' ,room_id='$rmid', status='$status', max_adult='$adults', max_child='$child' 
					WHERE roominventory_id='$id'; "	;
				
		$result =	mysql_query($sql);
			
	
		

?>