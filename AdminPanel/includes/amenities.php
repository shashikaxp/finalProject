<button id="add-amenities" class="add-btn">+ Add New</button>

<table id="amenities_table" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Amenities ID</th>
			<th>Name</th>
			<th>Pic</th>
			<th>Description</th>
			<th></th>	
			<th></th>	
		</tr>
	</thead>
	<tbody>



		<?php include "functions/config.php" ?>

			<?php
			
			
			$result = mysql_query("SELECT * FROM amenities ");
			
			while($row = mysql_fetch_array($result)) {
			
			$output  =	'<tr>';
            $output .=  '<td>'.$row["amenities_id"].'</td>';
            $output .=  '<td>'.$row["name"].'</td>';
            $output .=  '<td class="col-md-1"><img src="data:image;base64,'.$row["pic"].'" class="img room-image img-responsive"></td>';  	
            $output .=  '<td>'.$row["des"].'</td>';         
		
				
			$output .=  '<td><i class="fa fa-pencil-square-o edit-amenities" data-amenities='.$row["amenities_id"].' aria-hidden="true"></i></td>';	
			$output .=  '<td><i class="fa fa-trash delete-amenities" data-amenitiesdel='.$row["amenities_id"].' aria-hidden="true"></i></td>';
			
			$output .=  '</tr>';	
			
			echo $output;
			
			}
				
			?>
	</tbody>
</table>


