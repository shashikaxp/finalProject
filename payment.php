<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>

<?php
	
	session_start();
	
	$_SESSION["count"] = $_POST["count"] ;  
	
	$_SESSION["rate_room1"] = 0;
	$_SESSION["rate_room2"] = 0;
	$_SESSION["rate_room3"] = 0;


	$_SESSION{"child_room2"} = 0 ;
	$_SESSION{"adult_room2"} = 0 ;

	$_SESSION{"child_room3"} = 0 ;
	$_SESSION{"adult_room3"} = 0 ;

	
	$n = 1  ;

	while( $n <= $_SESSION["count"] ){
	
		
	$_SESSION{"rmid_room$n"} = $_POST["rmid$n"];
	$_SESSION{"view_room$n"} = $_POST["view$n"];
	$_SESSION{"bed_room$n"} = $_POST["bed$n"];
	$_SESSION{"name_room$n"} = $_POST["name$n"] ;
	$_SESSION{"child_room$n"} = $_POST["child$n"] ;
	$_SESSION{"adult_room$n"} = $_POST["adult$n"] ;
	$_SESSION{"rate_room$n"} = $_POST["rate$n"] ;		
	$n++;
		
	}

?>

	<form method="post"  class="form-horizontal" action="paypal_payment.php" >
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
	
	
	
	
	?>







<div class="booking-img">
<img src="images/covers/payment.jpg">
<h1 class="center">Payment</h1>	
</div>


<div class="payment-form col-md-10 col-md-offset-1">

	
	
<div class = "reseved_rooms center container">
<h3>Your Informations</h3>
</div>


<fieldset>
	
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nic">NIC / Passport</label>  
  <div class="col-md-4">
  <input id="nic" name="nic" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>	

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
    <button id="payment_btn" name="" class="btn btn-default " type="submit" disabled >Payment</button>
  </div>
</div>

</fieldset>
</div>
		
		

</form>








<?php include "includes/footer.php" ?>
