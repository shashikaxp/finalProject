<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>


<div class="booking-img">
<img src="images/covers/rooms.jpg" style="margin-top:-8%">
<h1 class="center">Rooms</h1>	
</div>



<!-- Room details load from db -->


 <?php include "functions/config.php" ?>


<!-- Room Details  -->

<div class="col-md-8 col-md-offset-2">
	
	<?php
	
	$result = mysql_query("SELECT * FROM room");

	while($row = mysql_fetch_array($result)){
		
	$output  =	'<div class="col-md-4 col-sm-6 room-details">';				
	$output	.=	'<img src="'. $row["image"] .'" class="center img-responsive">';
	$output	.=	'<h4><br>'. $row["type"] .' - '. $row["bed"] .'</h4>';
	$output	.=	'<hr class="hr-large">';				
	$output	.=	'<ul >';
	$output .=	'<li><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Room Size <i>'. $row["sqm"] .' sqm</i></li>';
	$output	.=	'<li><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;View <i>'. $row["view"] .'</i></li>';
	$output	.=	'<li><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Max <i>'. $row["max_adult"] .' Peoples</i> </li>';
	$output	.=	'<li><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Bed <i>'. $row["bed"] .'</i></li>';				
	$output	.=	'</ul>';			
	$output	.=	'<span> Start From $'. $row["rate"] .' / Night<br> </span>';
	$output	.=	'<form class="room_form" method="post" action="room_details.php">';
	$output	.=	'<input type="hidden" name="rmid" value="'. $row["room_id"] .'" >';			
	$output	.=	'<button type="submit" class="rd-button">More Details</button></form>';	
	$output	.=  '</div>';
		

		echo $output;
		
	}	


?>
	
</div>


 
<?php include "includes/footer.php" ?>