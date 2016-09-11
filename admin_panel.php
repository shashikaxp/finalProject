<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "AdminPanel/includes/navigation.php" ?>

<!--tab-->

<div class="col-md-12 container full-panel">
 
<div class="col-xs-2"> <!-- required for floating -->
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-left">
      <li class="active"><a href="#reservation" data-toggle="tab">Reservation</a></li>
      <li><a href="#roomsinventory" data-toggle="tab">Room Inventory</a></li>
      <li><a href="#customer" data-toggle="tab">Customners</a></li>
      <li><a href="#rooms" data-toggle="tab">Rooms</a></li>
	  <li><a href="#comment" data-toggle="tab">Comments</a></li>
    </ul>
</div>

<div class="col-xs-10">
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="reservation"><?php include "AdminPanel/includes/reservation.php" ?></div>
      <div class="tab-pane" id="roomsinventory"><?php include "AdminPanel/includes/room_inventory.php" ?></div>
      <div class="tab-pane" id="customer"><?php include "AdminPanel/includes/customers.php" ?></div>
      <div class="tab-pane" id="rooms">Settings Tab.</div>
	  <div class="tab-pane" id="comment">comments Tab.</div>
    </div>
</div>  


</div>








<?php include "includes/footer.php" ?>