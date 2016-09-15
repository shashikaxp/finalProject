<button id="add-room" class="add-btn">+ Add New</button>

<div class="row">

<table id="room_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>              
                <th>Type</th>
                <th>Rate</th>
                <th>Description</th>
                <th>Description Large</th>                
				<th>Image</th>
				<th>QTY</th>
				<th>Adult</th>
				<th>Child</th>
				<th>Bed</th>
				<th>View</th>
				<th>SQM</th>
				<th>Wifi</th>
				<th>Room Service</th>
				<th></th>
				<th></th>
			
            </tr>
        </thead>
        <tbody>
			
			
			
			 <?php include "functions/config.php" ?>
			
			<?php
			
			$result = mysql_query("SELECT * FROM room ");
	
			while($row = mysql_fetch_array($result)) {
			
			$output  =	'<tr>';           
            $output .=  '<td>'.$row["type"].'</td>';
            $output .=  '<td>'.$row["rate"].'</td>';
            $output .=  '<td><textarea rows="6" >'.$row["description"].'</textarea></td>';
            $output .=  '<td><textarea rows="6" >'.$row["description_large"].'</textarea></td>';
            $output .=  '<td class="col-md-1"><img src="data:image;base64,'.$row["image"].'" class="img room-image img-responsive"></td>';  		    				
			$output .=  '<td>'.$row["qty"].'</td>';
			$output .=  '<td>'.$row["max_adult"].'</td>';	
			$output .=  '<td>'.$row["max_child"].'</td>';
			$output .=  '<td>'.$row["bed"].'</td>';
			$output .=  '<td>'.$row["view"].'</td>' ;
			$output .=  '<td>'.$row["sqm"].'</td>' ;
			$output .=  '<td>'.$row["wifi"].'</td>' ;
			$output .=  '<td>'.$row["room_service"].'</td>' ;
				
			$output .=  '<td><i class="fa fa-pencil-square-o edit-room" data-room='.$row["room_id"].' aria-hidden="true"></i></td>';	
			$output .=  '<td><i class="fa fa-trash delete-room" data-delroom='.$row["room_id"].' aria-hidden="true"></i></td>';
			$output .=  '</tr>';	
			
			echo $output;
			
			}
			
			
			?>
			
			          
	</tbody>
</table>


</div>

