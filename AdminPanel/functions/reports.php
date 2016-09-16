
 <?php include "../../functions/config.php" ?>

<?php 

			$check = date("Y-m-d"); 

   			if(isset($_POST["start"])){
			$check	= $_POST["start"];	
			
			}

			
			$result = mysql_query("SELECT * FROM roominventory WHERE arrival = '$check' ; ");	
			

//			 while ($row = mysql_fetch_assoc($result)) {
//			   $return_arr[] = $row;
//			 }

			 while ($row = mysql_fetch_array($result)) {
						  
				 	$output  =	'<tr>';
				 	$output .=  '<td>'.$row["roominventory_id"].'</td>';
					$output .=  '<td>'.$row["arrival"].'</td>';
					$output .=  '<td>'.$row["departure"].'</td>';
					$output .=  '<td>'.$row["qty_reserve"].'</td>';
					$output .=  '<td>'.$row["room_id"].'</td>';
					$output .=  '<td>'.$row["status"].'</td>';
					$output .=  '<td>'.$row["max_adult"].'</td>';					
					$output .=  '<td>'.$row["max_child"].'</td>';
					$output .=  '<td>'.$row["reservation_id"].'</td>';
				 	$output .=  '<tr>';
				 	echo $output;
				 
				 
						 }

					
?>

