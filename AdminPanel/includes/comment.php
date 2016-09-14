<table id="comment_table" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Comment ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Subject</th>
			<th>Content</th>
			<th>Status</th>			
			<th></th>	
		</tr>
	</thead>
	<tbody>



		<?php include "functions/config.php" ?>

			<?php
			
			
			$result = mysql_query("SELECT * FROM comment ");
			
			while($row = mysql_fetch_array($result)) {
			
			$output  =	'<tr>';
            $output .=  '<td>'.$row["comment_id"].'</td>';
            $output .=  '<td>'.$row["name"].'</td>';
            $output .=  '<td>'.$row["email"].'</td>';
            $output .=  '<td>'.$row["subject"].'</td>';
            $output .=  '<td>'.$row["content"].'</td>';
            $output .=  '<td>'.$row["status"].'</td>';
		
				
			$output .=  '<td><i class="fa fa-pencil-square-o edit-comment" data-comment='.$row["comment_id"].' aria-hidden="true"></i></td>';	
			
			$output .=  '</tr>';	
			
			echo $output;
			
			}
				
			?>
	</tbody>
</table>





