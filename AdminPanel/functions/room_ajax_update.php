 <?php include "../../functions/config.php" ?>


<?php 

	
	
	$add = $_POST["room-add"];


	$id = $_POST["id"];
	$type = $_POST["type"];
	$rate = $_POST["rate"];
	$dec = $_POST["dec"];
	$declg = $_POST["declg"];	
	$qty = $_POST["qty"];
	$adult = $_POST["adult"];
	$child = $_POST["child"];
	$bed = $_POST["bed"];
	$view = $_POST["view"];
	$sqm = $_POST["sqm"];
	$wifi = $_POST["wifi"];
	$rs = $_POST["rs"];


// img inserat
			

if( $add > 0 ){
	
	                          $errors= array();
							  $file_name = $_FILES['image']['name'];
							  $file_size = $_FILES['image']['size'];
							  $file_tmp = $_FILES['image']['tmp_name'];
							  $file_type = $_FILES['image']['type'];
							  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
								
							  $image = addslashes($file_tmp);	
						      $image = file_get_contents($image);
							  $image = base64_encode($image);	

							  $expensions= array("jpeg","jpg","png");

							  if(in_array($file_ext,$expensions)=== false){
								 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
							  }

							  if($file_size > 2097152) {
								 $errors[]='File size must be excately 2 MB';
							  }

							  if(empty($errors)==true) {
								 
							  }else{
								 print_r($errors);
							  }
								
								
																					
								$sql = "INSERT INTO room  (type, rate, description, description_large , image ,qty ,max_adult ,max_child ,bed ,view ,sqm ,wifi ,room_service )
								VALUES ('$type','$rate','$dec','$declg','$image','$qty','$adult','$child','$bed','$view','$sqm','$wifi','$rs');"	;
				
								mysql_query($sql);
								echo $sql;	
								;
		
	
	
	
}else{
	
	if(  $_FILES['image']['size'] > 0){
								
							  $errors= array();
							  $file_name = $_FILES['image']['name'];
							  $file_size = $_FILES['image']['size'];
							  $file_tmp = $_FILES['image']['tmp_name'];
							  $file_type = $_FILES['image']['type'];
							  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
								
							  $image = addslashes($file_tmp);	
						      $image = file_get_contents($image);
							  $image = base64_encode($image);	

							  $expensions= array("jpeg","jpg","png");

							  if(in_array($file_ext,$expensions)=== false){
								 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
							  }

							  if($file_size > 2097152) {
								 $errors[]='File size must be excately 2 MB';
							  }

							  if(empty($errors)==true) {
								 
							  }else{
								 print_r($errors);
							  }
								
								
																					
								$sql = "UPDATE room SET  type='$type' , rate='$rate' , description ='$dec' , description_large='$declg', image = '$image' , qty='$qty', max_adult='$adult' , max_child='$child' , bed='$bed' , view='$view' , sqm='$sqm' , wifi='$wifi' , room_service = '$rs' WHERE room_id='$id' ; "	;
				
								mysql_query($sql);
			
								;
		
								
								
							}else{
								
								$sql = "UPDATE room SET  type='$type' , rate='$rate' , description ='$dec' , description_large='$declg', qty='$qty', max_adult='$adult' , max_child='$child' , bed='$bed' , view='$view' , sqm='$sqm' , wifi='$wifi' , room_service = '$rs' WHERE room_id='$id' ; "	;
				
		                         mysql_query($sql);
								
								
								
							}
	
							}

   		

?>