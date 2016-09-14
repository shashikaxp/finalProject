 <?php include "../../functions/config.php" ?>


<?php 

	$id = $_POST["id"];
	$nic = $_POST["nic"];
	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$addr_line1 = $_POST["addr_line1"];
    $addr_line2 = $_POST["addr_line2"];	
	$city = $_POST["city"];
	$zip = $_POST["zip"];
	$country = $_POST["country"];
	$contact = $_POST["contact"];
	$email = $_POST["email"];
		
	

		$sql = "UPDATE customer SET nic='$nic', f_name='$f_name' , l_name='$l_name' ,addr_line1='$addr_line1', addr_line2='$addr_line2', city='$city', zip_code='$zip', country='$country',contact='$contact',email='$email'
					WHERE cus_id='$id'; "	;
				
		$result =	mysql_query($sql);
			
	
		

?>