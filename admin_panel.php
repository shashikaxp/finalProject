<?php

session_start();

if( !isset($_SESSION['username']) &&  !isset($_SESSION['position'])  ){
	
	header('Location: http://localhost/final/admin_login.php');
}

 ?>



<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "AdminPanel/includes/navigation.php" ?>

<!--tab-->

<div class="col-md-12 container-fluid">
 
<div class="col-xs-12" style="margin-top : 80px;"> <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs admin-tabs">
      <li class="active"><a id="ap-res" href="#reservation" data-toggle="tab">Reservation</a></li>
      <li><a id="ap-roominventory" href="#roomsinventory" data-toggle="tab">Room Inventory</a></li>
      <li><a id="ap-cus"  href="#customer" data-toggle="tab">Customers</a></li>
      <li><a id="ap-room" href="#rooms" data-toggle="tab">Rooms</a></li>	 
	  <li><a id="ap-com" href="#gallery" data-toggle="tab">Gallery</a></li>
	  <li><a id="ap-com" href="#amenities" data-toggle="tab">Amenities</a></li>
	<?php 
	if( ($_SESSION['position']) == 'admin' ){
	echo '<li><a id="ap-com" href="#comment" data-toggle="tab">Comments</a></li>' ;
 	echo  '<li><a id="ap-report" href="#reports" data-toggle="tab">Reports</a></li>';
	}		
	?>	
		
	  
		
    </ul>
</div>

<div class="col-xs-12" style="margin : 30px auto;">
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="reservation"><?php include "AdminPanel/includes/reservation.php" ?></div>
      <div class="tab-pane" id="roomsinventory"><?php include "AdminPanel/includes/room_inventory.php" ?></div>
      <div class="tab-pane" id="customer"><?php include "AdminPanel/includes/customers.php" ?></div>
      <div class="tab-pane" id="rooms"><?php include "AdminPanel/includes/rooms.php" ?></div>
	  <div class="tab-pane" id="comment"><?php include "AdminPanel/includes/comment.php" ?></div>
	  <div class="tab-pane" id="gallery"><?php include "AdminPanel/includes/gallery.php" ?></div>
	  <div class="tab-pane" id="reports"><?php include "AdminPanel/includes/reports.php" ?></div>
	  <div class="tab-pane" id="amenities"><?php include "AdminPanel/includes/amenities.php" ?></div>
    </div>
</div>  


</div>




<?php include "AdminPanel/includes/modal.php" ?>



<?php include "includes/footer.php" ?>