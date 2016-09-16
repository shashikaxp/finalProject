 <?php include "../../functions/config.php" ?>


<?php 

	
	
	$add = $_POST["admin-add"];


	$id = $_POST["id"];
	$name = $_POST["username"];	
	$password = $_POST["password"];
	$position = $_POST["position"];

	
// img inserat
			

if( $add > 0 ){
	
																					
								$sql = "INSERT INTO user  (username, password, position)
								VALUES ('$name','$password','$position');"	;
				
								mysql_query($sql);
								
								
								
	
	
	
}
else{
	
																					
								$sql = "UPDATE user  SET  username='$name' , password='$password' , position ='$position' WHERE user_id = '$id' ; "	;
				
								mysql_query($sql);
			
								
		
								
								
							}
							


?>