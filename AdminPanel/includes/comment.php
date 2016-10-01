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


 		<div class="col-md-10 ">
			
			<h3>Summery</h3>
			
			
			
		  <?php		  
		  
			
			
			
			$sql = mysql_query("SELECT COUNT(comment_id) FROM comment ");
			$sql1 = mysql_query("SELECT COUNT(comment_id) FROM comment WHERE status = 'On Process' ");
			$sql2 = mysql_query("SELECT COUNT(comment_id) FROM comment WHERE status = 'Done'  ");
			$sql3 = mysql_query("SELECT COUNT(comment_id) FROM comment WHERE status = 'Pending'  ");
			
			
			while( $row = mysql_fetch_array($sql) ){
				$total = $row["COUNT(comment_id)"];				
			}

				while( $row = mysql_fetch_array($sql1) ){
				$onprocess = $row["COUNT(comment_id)"];				
			}
			
				while( $row = mysql_fetch_array($sql2) ){
				$done = $row["COUNT(comment_id)"];				
			}
			
				while( $row = mysql_fetch_array($sql3) ){
				$pending = $row["COUNT(comment_id)"];				
			}
			 
		 
			
		  
						$output = 	'<div class="details col-md-6">';
						$output .= 	'<ul class="list list-inline text-left">';
						$output .=  	'<li>';
						$output .= 	 		'<ul class="list list-unstyled">';			
						$output .=			'<li><label>Total</label></li>';
						$output .=			'<li><label>Pending complains</label></li>';
						$output .= 			'<li><label>On Process complains</label></li>'	;
						$output .= 			'<li><label>Completed complains</label></li>';
						$output .= 	'</ul>';
									  
						$output .=	'</li>';
						$output .= 	 '<li>';
						$output .= 			  '<ul class="list list-unstyled">';
						$output .=				'<li><label>: &nbsp;&nbsp;&nbsp;'.$total.'</label></li>';
						$output .= 				'<li><label>: &nbsp;&nbsp;&nbsp;'.$pending.'</label></li>';
						$output .= 				'<li><label>: &nbsp;&nbsp;&nbsp;'.$onprocess.'</label></li>';
						$output .= 				'<li><label>: &nbsp;&nbsp;&nbsp;'.$done.'</label></li>';
						$output .= 		 	  '</ul>';
						$output .=	 '</li>';	  
						$output .= 	 '</ul>';	
						$output .= 	'</div>';
											  
						echo $output;
				
			
			  ?>
		  
		  </div>
		

    







