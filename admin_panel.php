<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "AdminPanel/includes/navigation.php" ?>

<!--tab-->

<div class="col-md-12 container-fluid">
 
<div class="col-xs-12" style="margin-top : 80px;"> <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a id="ap-res" href="#reservation" data-toggle="tab">Reservation</a></li>
      <li><a id="ap-roominventory" href="#roomsinventory" data-toggle="tab">Room Inventory</a></li>
      <li><a id="ap-cus"  href="#customer" data-toggle="tab">Customers</a></li>
      <li><a id="ap-room" href="#rooms" data-toggle="tab">Rooms</a></li>
	  <li><a id="ap-com" href="#comment" data-toggle="tab">Comments</a></li>
	  <li><a id="ap-com" href="#gallery" data-toggle="tab">Gallery</a></li>
		
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
    </div>
</div>  


</div>




<?php include "AdminPanel/includes/modal.php" ?>



<?php include "includes/footer.php" ?>