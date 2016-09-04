<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>

<?php
	
	
	$count = $_POST["count"] ;  

	// room 1 //

		$rmid_room1 =0 ;
		$view_room1 ;
		$bed_room1 ;
		$name_room1	 ;	
		$child_room1 ;
		$adult_room1 ; 
		$qty_room1 = 1;

	// room 2 //

		$rmid_room2 = 0;
		$view_room2 ;
		$bed_room2 ;
		$name_room2	 ;	
		$child_room2 ;
		$adult_roo2 ; 
		$qty_room2 = 0 ;


	// room 3 //

		$rmid_room3 = 0 ;
		$view_room3 ;
		$bed_room3 ;
		$name_room3	 ;	
		$child_room3 ;
		$adult_roo3 ; 
		$qty_room3 = 0 ;

	

	
	$n = 1  ;

	while( $n <= $count ){
	
		
	${"rmid_room$n"} = $_POST["rmid$n"];
	${"view_room$n"} = $_POST["view$n"];
	${"bed_room$n"} = $_POST["bed$n"];
	${"name_room$n"} = $_POST["name$n"] ;
	${"child_room$n"} = $_POST["child$n"] ;
	${"adult_room$n"} = $_POST["adult$n"] ;		
	$n++;
		
	}

?>

<form method="post" action="functions/customer_details.php" class="form-horizontal" >
	
	<?php
	

			
//		if(( $rmid_room1 == $rmid_room2 ) && ( $rmid_room1 ==  $rmid_room3 )){
//			$qty_room1 = 3;			
//		}else if(( $rmid_room1 == $rmid_room2 ) || ( $rmid_room1 ==  $rmid_room3 )){
//			$qty_room1 = 2;
//		}
//		
//		
//		if(( $rmid_room1 == $rmid_room2 ) && ( $rmid_room2 ==  $rmid_room3 )){
//			$qty_room2 = 3;			
//		}else if(( $rmid_room1 == $rmid_room2 ) || ( $rmid_room2 ==  $rmid_room3 )){
//			$qty_room2 = 2;
//		}
//	
//		
//		if(( $rmid_room2 == $rmid_room2 ) && ( $rmid_room1 ==  $rmid_room3 )){
//			$qty_room3 = 3;			
//		}else if(( $rmid_room2 == $rmid_room3 ) || ( $rmid_room1 ==  $rmid_room3 )){
//			$qty_room3 = 2;
//		}
//	
	
	
	
	for( $n = 1 ; $n <= $count ; $n++ ){
		
		echo  "<input name='rmid_room$n' value='${"rmid_room$n"}' type='text'>"; 
		echo  "<input name='child_room$n' value='${"child_room$n"}' type='text'>"; 
		echo  "<input name='adult_room$n' value='${"adult_room$n"}' type='text'>"; 	
	} 
			
		echo  "<input name='count' value='$count' type='text'>"; 	
	
	?>







<div class="booking-img">
<img src="images/covers/payment.jpg">
<h1 class="center">Payment</h1>	
</div>


<div class="payment-form col-md-10 col-md-offset-1">
	
<div class = "reseved_rooms center container">
<h3>Your Reservation</h3>
	
		<h4 class="select_room_header hidden"> <br>&nbsp;&nbsp; Selected Rooms</h4>
        <div id="selected-room" class="col-md-6 col-xs-12 col-md-offset-3">
		<?php
				for( $n = 1 ; $n <= $count ; $n++ ){
					echo "<div ><p> &nbsp;&nbsp;Room $n | ${"name_room$n"} - ${"bed_room$n"} | view - ${"view_room$n"} </p></div>";
				} 
		?>	
		</div>
	
	
</div>


<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="f_name">First Name</label>  
  <div class="col-md-4">
  <input id="f_name" name="f_name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="l_name">Last Name</label>  
  <div class="col-md-4">
  <input id="l_name" name="l_name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr_line1">Address Line 1</label>  
  <div class="col-md-4">
  <input id="addr_line1" name="addr_line1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

 <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr_line2">Address Line 2</label>  
  <div class="col-md-4">
  <input id="addr_line2" name="addr_line2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

 <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="zip_code">Zip Code</label>  
  <div class="col-md-4">
  <input id="zip_code" name="zip_code" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>  
  <div class="col-md-4">
  <input id="country" name="country" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact Number</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="terms"></label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="terms-0">
      <input type="checkbox" name="terms" id="terms" value="1">
      i agree the terms and condition of this hotel
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="payment_btn" name="" class="btn btn-default" disabled>Payment</button>
  </div>
</div>

</fieldset>
</form>
</div>

<?php include "includes/footer.php" ?>
