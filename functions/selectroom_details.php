<?php
$result = mysql_query("SELECT * FROM room");
	

while($row = mysql_fetch_array($result))
  {
  $a=$row['room_id'];
   $query = mysql_query("SELECT sum(qty_reserve) FROM roominventory where arrival <= '".$_SESSION["arival"]."'  and departure >= '".$_SESSION["departure"]."' and room_id='$a' and status='confirm'");
while($rows = mysql_fetch_array($query))
  {
  $inogbuwin=$rows['sum(qty_reserve)'];
  }
  $angavil = $row['qty'] - $inogbuwin;
	
	$max_ppl = $row["max_adult"] 	;
	
	
	if( $angavil > 0 && $max_pp <= $max_ppl ) {
		
	
	$output  =	'<div id="rm-search-detail" class="bb">' ;
	$output .=   '<div class="col-md-8 pull-right rm-padding"  style="padding-bottom: 50px;">' ;
	$output .=	'<div class="room_details">' ;
	$output .=	'<div class="room-img col-md-4">'	;
	$output .=	'<img  src="'. $row["image"] .'"></div> ' ;
				
			
	$output .=	'<div class="col-md-8">' ;
	$output .= 	'<h3 style= "padding-bottom: 10px;" >'. $row["type"] .'</h3>' ;
				
				
	$output .=	'<ul class="room-main">' ;
	$output .=	'<li>Bed  <span class="italic">'. $row["bed"] .'</span>   &nbsp;&nbsp;/  &nbsp;&nbsp;   </li>';
	$output .=	'<li>Max <span class="italic">' . $max_ppl .' people</span>   &nbsp; &nbsp; /  &nbsp;&nbsp;   </li>' ;
	$output .=	'<li>View <span class="italic">'. $row["view"] .'</span></li>' ;		
	$output .=	'</ul>' ;
				
				
	$output .=	'<p class="room_dis">' ;
	$output .=	 $row["description"]   ;
	$output .=	'</p>' ;
	
    $output .=  '<input type="hidden" value="'.$row["type"].'" class="rm_name">';
    $output .=  '<input type="hidden" value="'.$row["bed"].'" class="rm_bed">';
	$output .=  '<input type="hidden" value="'.$a.'" class="rm_id">';
	$output .=  '<input type="hidden" value="'.$row["view"].'" class="view">';
	$output .=  '<input type="hidden" value="'.$row["rate"].'" class="rate">';
	
	
             
	$output .=	'<input type="button" value="Select this Room" class="sr-button" style= "margin-top: 10px;"><span>&nbsp; &nbsp; &nbsp; only '.$angavil.' Rooms Available</span><span><i>&nbsp; &nbsp; &nbsp; Start From $'.$row["rate"].' / Night </i></span>' ;
			
				
	$output .=	'</div></div></div></div>' ;	
        
   
		
		echo $output ;	
		
	}}
	
?>