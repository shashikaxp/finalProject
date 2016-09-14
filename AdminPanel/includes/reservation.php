<table id="reservation_table" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Reservation ID</th>
			<th>Arrival</th>
			<th>Departure</th>
			<th>Adults</th>
			<th>Child</th>
			<th>Status</th>
			<th>Price</th>
			<th>Customer ID</th>
			<th></th>

		</tr>
	</thead>
	<tbody>



		<?php include "functions/config.php" ?>

			<?php
			
			
			$result = mysql_query("SELECT * FROM reservation ");
			
			while($row = mysql_fetch_array($result)) {
			
			$output  =	'<tr>';
            $output .=  '<td>'.$row["reservation_id"].'</td>';
            $output .=  '<td>'.$row["arrival"].'</td>';
            $output .=  '<td>'.$row["departure"].'</td>';
            $output .=  '<td>'.$row["adults"].'</td>';
            $output .=  '<td>'.$row["child"].'</td>';
            $output .=  '<td>'.$row["status"].'</td>';
			$output .=  '<td>'.$row["price"].'</td>';					
			$output .=  '<td>'.$row["customer_id"].'</td>';
				
			$output .=  '<td><i class="fa fa-pencil-square-o edit-reservation" data-reservation='.$row["reservation_id"].' aria-hidden="true"></i></td>';	
			
			$output .=  '</tr>';	
			
			echo $output;
			
			}
				
			?>
	</tbody>
</table>







