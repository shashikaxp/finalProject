 <?php include "config.php" ?>
 

<?php 
	
	$id = $_POST["id"];


	$result = mysql_query("SELECT * FROM amenities where amenities_id = '$id' ");

	while($row = mysql_fetch_array($result)) {

	$output  =	'<div class="modal fade" id="amenities'.$row["amenities_id"].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">';
	$output .=	'<div class="modal-dialog modal-lg" role="document">';
	$output .=	'<div class="modal-content amenities-modal">';
    $output .=  '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>	';
	
	$output	 .=	'<div class="center">';
	$output	.=	'<h4 style="margin: 20px auto font-size:22px"><b><i>'.$row["name"].'</i></b></h4>';
	$output	.=	'<div calss="container center"><img src="data:image;base64,'.$row["pic"].'" alt="" class="center am-img img-responsive"></div></div>';	
	$output	.=   '<div><p>'.$row["des"].'</p></div>';	
		
		
		
 	$output .=	'</div>';    
  	$output .=	'</div></div>';
		
	echo $output;	
		
	}
	




?>
