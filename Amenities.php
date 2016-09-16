<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>


<div class="booking-img">
<img src="images/covers/ama.jpg" style="margin-top:-2%">
<h1 class="center">Amenities</h1>	
</div>


<div class="col-md-10 col-md-offset-1 container" style="margin-bottom : 35px;">

<div class="container center">
	 <?php include "functions/config.php" ?>
	
	<?php
	
	$result = mysql_query("SELECT * FROM amenities");

	while($row = mysql_fetch_array($result)) {

	$output	 =	'<div class="amenities  container">';
	$output	.=	'<h4 >'.$row["name"].'</h4>';
	$output .=   '<input class="amenities_id" value="'.$row["amenities_id"].'" type="hidden">';
	$output	.=	'<div calss="container"><img src="data:image;base64,'.$row["pic"].'" alt="" class="center am-img img img-responsive"></div></div>';
	
		
	echo $output;	
		
	}
	
	

	?>

	</div>
</div>

<div id="amanities-modal"></div>


 
<?php include "includes/footer.php" ?>