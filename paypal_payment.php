<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>



<div class="booking-img">
<img src="images/covers/room-details.jpg" style="margin-top:-2%">
<h1 class="center">Payment</h1>	
</div>

<?php
	
$_SESSION["nic"]  		     = $_POST['nic']; 
$_SESSION["fname"]  		 = $_POST['f_name'];                 
$_SESSION["lname"]			 = $_POST['l_name'];    
$_SESSION["addr_line1"] 	 = $_POST['addr_line1'];    
$_SESSION["addr_line2"] 	 = $_POST['addr_line2'];    
$_SESSION["city"] 			 = $_POST['city'];    
$_SESSION["zip"]			 = $_POST['zip_code'];    
$_SESSION["country"] 		 = $_POST['country'];    
$_SESSION["contact"] 	     = $_POST['contact'];    
$_SESSION["email"]			 = $_POST['email'];    




$days = ( strtotime($_SESSION["departure"]) - strtotime($_SESSION["arival"]) )  / (60 * 60 * 24) ;



?>


	
	<dvi class=" container col-md-10 col-md-offset-1 ">
		<div class="col-md-3"></div>
	<div class="container col-md-6 center">
	
		<h3 class="select_room_header"> <br>&nbsp;&nbsp; <b><i>Selected Rooms</i></b></h3>
        <div id="selected-room" class="">
		<?php
				for( $n = 1 ; $n <= $_SESSION["count"] ; $n++ ){	
					echo "<div ><p> &nbsp;&nbsp;Room $n | ".$_SESSION{"view_room$n"}." -  ".$_SESSION{"bed_room$n"}." | view - ".$_SESSION{"view_room$n"}."<br><span><b>Price :<i> $".$_SESSION{"rate_room$n"}*$days."</i></b> </span></p></div>";
				
				} 
			
			
			$tot = ($_SESSION["rate_room1"]*$days)+($_SESSION["rate_room2"]*$days)+($_SESSION["rate_room3"]*$days);
			$_SESSION["total"] = $tot;
			echo "<p><b>Total Amount : <i>$$tot </i></b></p>";
			
			
			
		?>	
		</div>
	
	
	
<!--	paypal form  -->
	
	
	
 <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal_form">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="shashikaxp_seller@gmail.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Total Amount">
  <input type="hidden" name="amount" value="<?php echo $tot ?>">
  <input type="hidden" name="currency_code" value="USD">
	 
	 <input type="hidden" name="return" value="http://localhost/final/thank_you.php">
	 <input type="hidden" name="cancel_return" value="http://localhost/final/rooms.php">
	 
  <!-- Display the payment button. -->
	 

  <input type="image" border="0" name="submit"
  src="http://troop1299.com/v4/images/paypal.png"
    >
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

	</form>

		</div>

</dvi>
	



 
<?php include "includes/footer.php" ?>