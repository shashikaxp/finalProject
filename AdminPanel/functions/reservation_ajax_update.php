 <?php include "../../functions/config.php" ?>


<?php 

	$id = $_POST["id"];
	$arrival = $_POST["arrival"];
	$departure = $_POST["departure"];
	$adults = $_POST["adult"];
	$child = $_POST["child"];
	$status = $_POST["status"];		
	
	
	

			$sql = "UPDATE reservation SET arrival='$arrival', departure='$departure' , adults='$adults' ,child='$child' ,status='$status'
					WHERE reservation_id='$id'; "	;
				
		$result =	mysql_query($sql);
			
		if($result){
			
			if( $status == 'Cancelled'){
				
				    $sql2 = "UPDATE roominventory AS r SET r.arrival='$arrival', r.departure='$departure' , r.status='$status'
				   WHERE r.reservation_id='$id'; " ;		
			
			      mysql_query($sql2);
		
			}else{
				
				
				$sql2 = "UPDATE roominventory AS r SET r.arrival='$arrival', r.departure='$departure' 
				WHERE r.reservation_id='$id'; " ;		
			
			
			      mysql_query($sql2);
		
				
			}
		
		}
		

?>