 <?php include "../../functions/config.php" ?>


<?php 

	
	
	$add = $_POST["amenities-add"];


	$id = $_POST["id"];
	$name = $_POST["name"];	
	$dec = $_POST["des"];

	
// img inserat
			

if( $add > 0 ){
	
	                          $errors= array();
							  $file_name = $_FILES['pic']['name'];
							  $file_size = $_FILES['pic']['size'];
							  $file_tmp = $_FILES['pic']['tmp_name'];
							  $file_type = $_FILES['pic']['type'];
							  $file_ext=strtolower(end(explode('.',$_FILES['pic']['name'])));
								
							  $image = addslashes($file_tmp);	
						      $image = file_get_contents($image);
							  $image = base64_encode($image);	

							  $expensions= array("jpeg","jpg","png");

							  if(in_array($file_ext,$expensions)=== false){
								 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
							  }

							  if($file_size > 20971520) {
								 $errors[]='File size must be excately 2 MB';
							  }

							  if(empty($errors)==true) {
								 
							  }else{
								 print_r($errors);
							  }
								
								
																					
								$sql = "INSERT INTO amenities  (name, pic, des)
								VALUES ('$name','$image','$dec');"	;
				
								mysql_query($sql);
								
								
					echo sql;
	
	
	
}
else{
	
	if(  $_FILES['pic']['size'] > 0){
								
							  $errors= array();
							  $file_name = $_FILES['pic']['name'];
							  $file_size = $_FILES['pic']['size'];
							  $file_tmp = $_FILES['pic']['tmp_name'];
							  $file_type = $_FILES['pic']['type'];
							  $file_ext=strtolower(end(explode('.',$_FILES['pic']['name'])));
								
							  $image = addslashes($file_tmp);	
						      $image = file_get_contents($image);
							  $image = base64_encode($image);	

							  $expensions= array("jpeg","jpg","png");

							  if(in_array($file_ext,$expensions)=== false){
								 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
							  }

							  if($file_size > 20971520) {
								 $errors[]='File size must be excately 2 MB';
							  }

							  if(empty($errors)==true) {
								 
							  }else{
								 print_r($errors);
							  }
								
								
																					
								$sql = "UPDATE amenities SET  name='$name' , pic='$image' , des ='$dec' WHERE amenities_id = '$id' ; "	;
				
								mysql_query($sql);
			
								echo $sql;	
		
								
								
							}else{
								
								$sql = "UPDATE amenities SET  name='$name' ,  des ='$dec' WHERE amenities_id='$id' ; "	;
				
		                         mysql_query($sql);
								echo $sql;	
								
								
							}
	
							}



?>