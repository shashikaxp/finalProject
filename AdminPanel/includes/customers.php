
<table id="customer_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>NIC</th>
                <th>Fisrt Name</th>
                <th>Last Name</th>
                <th>Address Line 1</th>
                <th>Address Line 1</th>
				<th>City</th>
				<th>Zip Code</th>
				<th>Country</th>
				<th>Contact</th>
				<th>Email</th>
				<th></th>
			
            </tr>
        </thead>
        <tbody>
			
			
			
			 <?php include "functions/config.php" ?>
			
			<?php
			
			$result = mysql_query("SELECT * FROM customer ");
	
			while($row = mysql_fetch_array($result)) {
			
			$output  =	'<tr>';
            $output .=  '<td>'.$row["cus_id"].'</td>';
            $output .=  '<td>'.$row["nic"].'</td>';
            $output .=  '<td>'.$row["f_name"].'</td>';
            $output .=  '<td>'.$row["l_name"].'</td>';
            $output .=  '<td>'.$row["addr_line1"].'</td>';
            $output .=  '<td>'.$row["addr_line2"].'</td>';
		    $output .=  '<td>'.$row["city"].'</td>';					
			$output .=  '<td>'.$row["zip_code"].'</td>';
			$output .=  '<td>'.$row["country"].'</td>';
			$output .=  '<td>'.$row["contact"].'</td>';
			$output .=  '<td>'.$row["email"].'</td>' ;
				
			$output .=  '<td><i class="fa fa-pencil-square-o edit-cus" data-customer='.$row["cus_id"].' aria-hidden="true"></i></td>';	
			
			$output .=  '</tr>';	
			
			echo $output;
			
			}
			
			
			?>
			
			            
	</tbody>
</table>


