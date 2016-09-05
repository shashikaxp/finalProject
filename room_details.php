
<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>


<div class="booking-img">
<img src="images/covers/room-details.jpg" style="margin-top:-2%">
<h1 class="center">Room Details</h1>	
</div>

<div class="room col-md-6 col-md-offset-3">
	
	
<?php include "functions/config.php" ?>	

	<?php
	
	
	$result = mysql_query("SELECT * FROM room where room_id='".$_POST["rmid"]."'");

	while($row = mysql_fetch_array($result)){
		
	$output =	'<img class="center img-responsive" src="'. $row["image"] .'" style="width:100%">';

	$output .=	'<h3>'. $row["type"] .' - '. $row["bed"] .'<span class="pull-right">Start From $ '. $row["rate"] .' / Night</span></h3>';

	$output .=	'<hr class="hr-large">';

	$output .=	'<div class="grid-detail container-fluid">';
	
	$output .=	'<div class="col-md-5 grid"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Bed <i>'. $row["bed"] .'</i></div>';
	$output .=	'<div class="col-md-5 grid"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Max <i>'. $row["max_adult"] .' Peoples</i></div>';
	$output .=	'<div class="col-md-5 grid"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;View <i>'. $row["view"] .'</i></div>';
	$output .=	'<div class="col-md-5 grid"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Room Size <i>'. $row["sqm"] .' sqm</i></div>';
	$output .=	'<div class="col-md-5 grid"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Room Service <i>'. $row["room_service"] .' </i></div>';
	$output .=	'<div class="col-md-5 grid"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Wifi <i>'. $row["wifi"] .' </i></div>';
	
	$output .=	'</div>';

	$output .=	'<p>'.$row["description_large"].'</p>';
	
		echo $output;
	
	
	}
	
	?>	

	
</div>








<?php include "includes/footer.php" ?>






