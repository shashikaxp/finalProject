 <?php include "config.php" ?>

<?php 
	
$fname = $_POST["f_name"] ;
$lname = $_POST["l_name"] ;
$addr_line1 = $_POST["addr_line1"] ;
$addr_line2 = $_POST["addr_line2"] ;
$city = $_POST["city"] ;
$zip = $_POST["zip_code"] ;
$country =	$_POST["country"] ; 
$contact = $_POST["contact"] ;
$email	= $_POST["email"] ;
	

	
$sql= "INSERT INTO customer (f_name, l_name, addr_line1, addr_line2, city, zip_code , country, contact, email   )
VALUES ('$fname', '$lname', '$addr_line1' ,'$addr_line2' ,'$city' ,'$zip' ,'$country' ,'$contact' ,'$email')";



$result = mysql_query($sql);

$cus_id = mysql_insert_id();

if($result){
	
	
	session_start();

$arrival = $_SESSION["arival"];
$departure = $_SESSION["departure"] ;	


$reservation = "INSERT INTO reservation (arrival, departure, adults, child, status, customer_id )
VALUES ('$arrival', '$departure', '2' ,'3' ,'pending' , '$cus_id' )";


$result2 = mysql_query($reservation);
	
$reservation_id = mysql_insert_id();
	
	

if($result2){
	

	
$count = $_POST["count"] ;  
$n = 1 ;	
	

	
while( $n <= $count ){
	
$rmid = $_POST["rmid_room$n"] ;	
$child = $_POST["child_room$n"];
$adult = $_POST["adult_room$n"];	
	
	

$room_inventory = "INSERT INTO roominventory (arrival, departure, qty_reserve, room_id, status, max_child, max_adult,	reservation_id  )
VALUES ('$arrival', '$departure', '1' ,'$rmid' ,'confirm' , '$child', '$adult' , '$reservation_id' )";
		
	
$result3 = mysql_query($room_inventory);
$n++ ;	
	
if($result2){	
	echo "success";
	}
	
	}	
}
	

}



?>