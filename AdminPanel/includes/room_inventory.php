<table id="inventory_table" class="display" cellspacing="0" width="100%">
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
				<th></th>
				
            </tr>
        </thead>
        <tbody>
			
			
			
			 <?php include "functions/config.php" ?>
			
			<?php
			
			
			$result = mysql_query("SELECT * FROM roominventory ");
			
			while($row = mysql_fetch_array($result)) {
			
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
				
			$output .=  '<td><i class="fa fa-pencil-square-o edit-roomin"  data-roomin='.$row["roominventory_id"].' aria-hidden="true"></i></td>';
				
			//$output .=  '<td><i class="fa fa-trash" aria-hidden="true"></i></td>';
			$output .=  '</tr>';	
			
			echo $output;
			
			}
			
			
			?>
			
	</tbody>
</table>


