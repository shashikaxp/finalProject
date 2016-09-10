<?php include "config.php" ?>

<?php

$nic =  $_POST["nic"];

$result = mysql_query("SELECT * FROM customer where nic = '$nic' ");
$array =  mysql_fetch_row($result);

 echo json_encode($array);
	

?>