<?php
	
 $counts = $_POST["pic_count"];


if($counts > 0 ){
	


			$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
			$max_file_size = 1024*10000; //10 MB
			$path = "../../gallery-images/"; // Upload directory
			$count = 0;

			if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
				// Loop $_FILES to execute all files
				foreach ($_FILES['files']['name'] as $f => $name) {     
					if ($_FILES['files']['error'][$f] == 4) {
						continue; // Skip file if any error found
					}	       
					if ($_FILES['files']['error'][$f] == 0) {	           
						if ($_FILES['files']['size'][$f] > $max_file_size) {
							$message[] = "$name is too large!.";
							continue; // Skip large files
						}
						elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
							$message[] = "$name is not a valid format";
							continue; // Skip invalid file formats
						}
						else{ // No error found! Move uploaded files 
							if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {
								$count++; // Number of successfully uploaded files
							}
						}
					}
				}
}

			
	

			}else{

					  $file = $_POST["name"];

						   $dir = "C:/xampp/htdocs/final/gallery-images/";   


							unlink($dir.$file);


			}

		echo $counts;

	?>
 




