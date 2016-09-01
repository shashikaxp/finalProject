<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>




<?php  
	
		
	 $_SESSION["arival"]= $_POST['start'];
	 $_SESSION["departure"] = $_POST['end'];
	 $_SESSION["adult"] = $_POST['adult'];
	 $_SESSION["child"] = $_POST['child'];	
	 $max_pp= $_SESSION["child"]/2 + $_SESSION["adult"]	;
 ?>	

<div class="booking-img">
<img src="images/covers/booking.jpg">
<h1 class="center">Booking</h1>	
</div>


<div class="container-fluid">
<div class="col-md-10 col-md-offset-1 select-room">

	<!-- Room Search  -->
	<div class="col-md-4 sr-search">
		
		<h3>Your Reservation</h3>
	
        <h4 class="select_room_header hidden"> <br>&nbsp;&nbsp; Selected Rooms</h4>
        <div id="selected-room">
        
        </div>
		
		   <div class="col-md-10 col-md-offset-1">        
        Check In <br>
        <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="check_in" data-link-format="yyyy-mm-dd">
                    <input id="1"  class="form-control search-room"  name="start" size="16" type="text" value="<?php echo $_SESSION["arival"] ?>" readonly>                    
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
         </div>
    	</div>
    
		<div class="col-md-10 col-md-offset-1"> 
        <br>Check Out<br>
        <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="check_out" data-link-format="yyyy-mm-dd">
                    <input id="2"  class="form-control search-room"  name="end" size="16" type="text" value="<?php echo $_SESSION["departure"] ?>" readonly>                    
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
       </div>    
		</div>
		
		<div class="col-md-6 col-xm-10 col-md-offset-1"> 
        <br>Rooms<br>
       <select name="rooms" class="soflow rooms-count search-room" value="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>                
                </select>    
		</div>
		
		<div class="col-md-12 col-xm-12 room-count-list">
			<br>
					<div class="col-md-4">
						<br><div class="center">Room 1<br></div>
					</div>
	
			
		<div class="col-md-4 col-xm-12">
        Adults
        <select id="3" name="adult"  class="soflow search-room" value="<?php echo $_SESSION["adult"] ?>">
					<option value="<?php echo $_SESSION['adult'] ?>" selected><?php echo $_SESSION['adult'] ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>                
                </select>    
		</div>
				
		<div class="col-md-4 col-xm-12" >
        Children
            <select id="4" name="child" class="soflow search-room">
					<option value="<?php echo $_SESSION["child"] ?>" selected><?php echo $_SESSION['child'] ?></option>
					<option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>                
                </select>
		</div>
				
		
		</div>
		
		
	</div>
	
		<?php include "functions/selectroom.php"  ?>
	
	
	<!-- Available Room  -->

	
	<!-- -->
	


	</div></div>

<?php  include "includes/footer.php" ?>