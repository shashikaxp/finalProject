
<?php include "functions/config.php" ?>

<div class="col-md-12 container-fluid">
 
	<h2>Monthly Reservation Report</h2>

<div class="col-xs-12" style="margin : 30px auto;">

	  
	<form method="post" action="" name="index" id="report-monthly">
	<div class="col-md-3">	
		From
		<div class="input-group date form_date2" data-date="" data-date-format="dd MM yyyy" data-link-field="check_in" data-link-format="yyyy-mm-dd">
			<input class="form-control reports-date" name="start" size="16" type="text" value="<?php  if(isset($_POST["start"])){echo $_POST["start"];} ?>" required="" id="report">
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
	</div>

	<div class="col-md-3">
		To
		<div class="input-group date form_date2" data-date="" data-date-format="dd MM yyyy" data-link-field="check_out" data-link-format="yyyy-mm-dd">
			<input class="form-control reports-date" name="end" size="16" type="text" value="<?php  if(isset($_POST["start"])){echo $_POST["end"];} ?>" required="" id="report2">
			<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
	</div>
		  </form>			 
				 

				 
	<table id="reports_table" class="display" cellspacing="0" width="100%">
		
		
	<thead>
		<tr>			
                <th>Inventory ID</th>
                <th>Arrival</th>
                <th>Departure</th>
                <th>Quantity</th>
                <th>Room ID</th>
                <th>Status</th>
				<th>Adult</th>
				<th>Child</th>
				<th>Reservation ID</th>
			
		</tr>
	</thead>
	
		
		  <tbody>
		  
		  <?php 

			$start = $myDate = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "-1 month" ) );					
			$end = date("Y-m-d"); 
		
   			if(isset($_POST["start"])){
			$start	= $_POST["start"];	
			
			}

			if(isset($_POST["end"])){
			$end	= $_POST["end"];	
			
			}

			
			$result = mysql_query("SELECT * FROM roominventory WHERE status != 'Cancelled' AND (arrival BETWEEN '$start' AND '$end' OR departure BETWEEN '$start' AND '$end')  ; ");	
			

			 while ($row = mysql_fetch_array($result)) {
						  
				 	$output  =	'<tr>';
				 	$output .=  '<td>'.$row["roominventory_id"].'</td>';
					$output .=  '<td>'.$row["arrival"].'</td>';
					$output .=  '<td>'.$row["departure"].'</td>';
					$output .=  '<td>'.$row["qty_reserve"].'</td>';
					$output .=  '<td>'.$row["room_id"].'</td>';
					$output .=  '<td>'.$row["status"].'</td>';
					$output .=  '<td>'.$row["max_adult"].'</td>';					
					$output .=  '<td>'.$row["max_child"].'</td>';
					$output .=  '<td>'.$row["reservation_id"].'</td>';
				 	$output .=  '</tr>';
				 	echo $output;
				 
				 
			 }
			  
			  

					
?>
		  </tbody>
		  </table>
	  
		  <div class="col-md-10 col-md-offset-1">
		  <?php		  
		  
//		  $days = ( strtotime($end) - strtotime($start) )  / (60 * 60 * 24) ;
//		  $day	 = intval(abs($days));		
		  $total = 0;
		  $incm = 0;
		  $sql = "SELECT * FROM room";
		  $id = array();
		  $result2 = mysql_query($sql);	
		  
		   while ($row = mysql_fetch_array($result2)) {						  
				 	 $id[] = $row["room_id"];					
			 }
		  
		  
		  
		   	foreach($id as $val){
				$data = mysql_query("SELECT sum(qty_reserve),sum(max_adult),sum(max_child),arrival,departure FROM roominventory WHERE room_id = '$val' AND  status != 'Cancelled' AND (arrival BETWEEN '$start' AND '$end' OR departure BETWEEN '$start' AND '$end')  ; ");	
				$data2 = mysql_query("SELECT * FROM room WHERE room_id = '$val' ; ");	
				
				while ($row = mysql_fetch_array($data2)) {
				
				
				$rm_name = $row["type"]	;
				$rm_rate = $row["rate"]	;

				}
				
				while ($rows = mysql_fetch_array($data)) {
					
					$redda = $rows["arrival"];
					$days = ( strtotime($rows["departure"]) - strtotime($rows["arrival"]) )  / (60 * 60 * 24) ;
					$day	 = intval(abs($days));		
					$qty =  $rows["sum(qty_reserve)"]	;
					$income = $rm_rate * $day * $qty	;					
					$adult = $rows["sum(max_adult)"]	;
					$child =  $rows["sum(max_child)"]	;
					
			
					
									
				}
				
						
				if($qty < 1){
					$qty = "N/A" ;
					$adult = "N/A" ;
					$child = "N/A" ;
					$income = "N/A" ;					
					
				}
					
				
					$out =	' <div class="details col-md-6">';
					$out .=		 ' <ul class="list list-inline text-left" >';
					$out .=				'  <li>';
					$out .=					  '<ul class="list list-unstyled">';
					$out .=						  '<li><label>Room Type</label></li>';
					$out .=						  '<li><label>Room ID</label></li>';
					$out .=						  '<li><label>Room Quantity</label></li>';
					$out .=						  '<li><label>Total Adults</label></li>';
					$out .=						  '<li><label>Total childrens</label></li>';
					$out .=						  '<li><label>Income</label></li>';
					$out .=					  '</ul>';
					$out .=				  '</li>';
					$out .=				  '<li>';
					$out .=					  '<ul class="list list-unstyled">';
					$out .=						  '<li><label>: &nbsp;&nbsp;&nbsp;'.$rm_name.'</label></li>';
					$out .=						  '<li><label>: &nbsp;&nbsp;&nbsp;'.$val.'</label></li>';
					$out .=						  '<li><label>: &nbsp;&nbsp;&nbsp;'.$qty.'</label></li>';
					$out .=						  '<li><label>: &nbsp;&nbsp;&nbsp;'.$adult.'</label></li>';
					$out .=						  '<li><label>: &nbsp;&nbsp;&nbsp;'.$child.'</label></li>';
					$out .=						  '<li><label>: &nbsp;&nbsp;&nbsp;'.$income.'</label></li>'	;
					$out .=					  '</ul>';
					$out .=					'</li>'	;		  
					$out .=			  	'</ul>'	;	
					$out .=		  	'</div>'	;
											  
					
					echo $out;
					
					
				if($income > 0){
					$total = $total + $income ;
					}
			
			}
			
	
		  		
			 if($total > 0){				 
				echo	'<lable style="font-size : 18px"><b>Total Income : $'.$total.'</b></lable>' ;
					}
									
			  
		  ?>
		  
			 
		  
		  </div>
		
	 </div>
    </div>  
