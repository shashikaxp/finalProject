<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>


<div class="booking-img">
<img src="images/covers/ama.jpg" style="margin-top:-2%">
<h1 class="center">Amenities</h1>	
</div>


<div class="col-md-8 col-md-offset-2" style="margin-bottom : 35px;">
	
	 <?php include "functions/config.php" ?>
	
	<?php
	
	$result = mysql_query("SELECT * FROM amenities");

	while($row = mysql_fetch_array($result)) {

	$output	 =	'<div class="amenities col-md-2 center container ">';
	$output	.=	'<h4 >'.$row["name"].'</h4>';
	$output .=   '<input class="amenities_id" value="'.$row["amenities_id"].'" type="hidden">';
	$output	.=	'<div calss="container"><img src="images/'.$row["pic"].'" alt="" class="center am-img img img-responsive"></div></div>';
	
		
	echo $output;	
		
	}
	
	

	?>

</div>

<div id="amanities-modal"></div>


 
<?php include "includes/footer.php" ?>