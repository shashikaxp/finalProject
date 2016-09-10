<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>


<div class="booking-img">
<img src="images/covers/room-details.jpg" style="margin-top:-2%">
<h1 class="center">Thank You</h1>	
</div>


<?php  include "functions/config.php" ?>

<?php 
	
	$nic    = $_SESSION["nic"]	;
	$fname   = $_SESSION["fname"] ;
	$lname   = $_SESSION["lname"]	;
	$addr_line1  = $_SESSION["addr_line1"] ;
	$addr_line2	 = $_SESSION["addr_line2"] ;
	$city  = $_SESSION["city"] ;
	$zip     = $_SESSION["zip"];
	$country  = $_SESSION["country"] ;
	$contact   = $_SESSION["contact"] ;
	$email    = $_SESSION["email"]	;

	$cus_id = 0;

$nic_check = "select * from customer where nic = '$nic' " ;

$result_nic = mysql_query($nic_check) or die(mysql_error()); 


if($result_nic){
	
	while($rows = mysql_fetch_array($result_nic)){		
			$cus_id = $rows['cus_id'] ;
		
	}
	
}

else{
		
	$sql= "INSERT INTO customer (nic, f_name, l_name, addr_line1, addr_line2, city, zip_code , country, contact, email   )
VALUES ('$nic', '$fname', '$lname', '$addr_line1' ,'$addr_line2' ,'$city' ,'$zip' ,'$country' ,'$contact' ,'$email')";


	 mysql_query($sql);
	
	$cus_id = mysql_insert_id();
	
}


$arrival = $_SESSION["arival"];
$departure = $_SESSION["departure"] ;	
$child =  $_SESSION{"child_room1"} + $_SESSION{"child_room2"} +$_SESSION{"child_room3"} ;
$adult = 	$_SESSION{"adult_room1"}+$_SESSION{"adult_room2"}+$_SESSION{"adult_room3"} ;


$reservation = "INSERT INTO reservation (arrival, departure, adults, child, status, customer_id )
VALUES ('$arrival', '$departure', '$child' ,'$adult' ,'pending' , '$cus_id' )";


$result2 = mysql_query($reservation);
	
$reservation_id = mysql_insert_id();
	
	

if($result2){
	

	
$count = $_SESSION["count"] ;  
$n = 1 ;	
	

	
while( $n <= $count ){
	
$rmid = $_SESSION["rmid_room$n"] ;	
$child = $_SESSION["child_room$n"];
$adult = $_SESSION["adult_room$n"];	
	
	

$room_inventory = "INSERT INTO roominventory (arrival, departure, qty_reserve, room_id, status, max_child, max_adult,	reservation_id  )
VALUES ('$arrival', '$departure', '1' ,'$rmid' ,'confirm' , '$child', '$adult' , '$reservation_id' )";
		
	
$result3 = mysql_query($room_inventory);
$n++ ;	
	
if($result2){	

	}
	
	}	
}
	


 

?>


<div class="col-md-10 col-md-offset-1 ">
	<div class="col-md-12 center">
	<h3>Your Reservation is complete</h3>
	<h4>Thank You for chosing Saladura Travels</h4>
	</div>	
</div>


<?php  header('Refresh: 2; URL=http://localhost/final/');
	   exit();	?>

<?php include "includes/footer.php" ?>
