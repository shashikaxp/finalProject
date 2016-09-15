<?php 

session_start();
session_unset();
session_destroy();

header('Location: http://localhost/final/admin_login.php');


?>