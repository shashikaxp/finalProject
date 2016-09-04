<?php 


//  $output =  ''   ;
   

	$output =    '<input name="rmid'.$_POST["count"].'" type="text" value="'.$_POST["rmid"].'" >' ;
	$output .=    '<input name="bed'.$_POST["count"].'" type="text" value="'.$_POST["bed"].'" >' ;
	$output .=    '<input name="view'.$_POST["count"].'" type="text" value="'.$_POST["view"].'" >' ;
	$output .=    '<input name="name'.$_POST["count"].'" type="text" value="'.$_POST["name"].'" >' ;
	$output .=    '<input name="count" type="text" value="'.$_POST["number"].'" >' ;
	$output .=    '<div><p> &nbsp;&nbsp;Room '.$_POST["count"].' : '. $_POST["name"] .' - '. $_POST["bed"] .'</p></div>';
  

echo $output ;

?>
