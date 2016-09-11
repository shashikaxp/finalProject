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





<div class="modal fade " id="reservation-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span><br></button>
			
			<div class="container">
				
			<form type="POST" id="edit-reservation">
			
			<fieldset>
					
				<!-- Text input-->
				
				<input type="hidden" name="id" id="res-id">
				  <div class="form-group row">        
					  <label class="col-md-4 control-label" for="f_name">Arrival</label> 
					  	<div class="input-group date form_date2 col-md-6" data-date="" data-date-format="dd MM yyyy" data-link-field="check_in" data-link-format="yyyy-mm-dd">
                    <input id="res-arrival" class="form-control  "  name="arrival"  type="text" value="" required="">                    
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					  	</div>
    				</div>

				<!-- Text input-->
				<div class="form-group row">        
					  <label class="col-md-4 control-label" for="f_name">Departure</label> 
					  	<div class="input-group date form_date2 col-md-6" data-date="" data-date-format="dd MM yyyy" data-link-field="check_in" data-link-format="yyyy-mm-dd">
                    <input id="res-departure" class="form-control  "  name="departure"  type="text" value="" required="">                    
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
					  	</div>
    				</div>

				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Adult</label> 					  
                    <input id="res-adults" class="input-group col-md-6"  name="adult"  type="text" value="" required="">                    
				</div>
    				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Child</label> 					  
                    <input id="res-child" class="input-group col-md-6"  name="child"  type="text" value="" required="">                    
				</div>
				
				<!-- Selct input-->
				<div class="form-group row"> 
					<label class="col-md-4 control-label" for="f_name">Status</label> 
					
					<select id="res-status"  class="input-group col-md-6" name="status">
						<option value="confrm">Confirm</option>
						<option value="pending">Pending</option>
						<option value="cleared">Cleared</option>						
					</select>
				</div>
				
				<ul class="lisr list-inline pull-right">
					<li><button id="update-reservation" class="btn" >Update</button> </li>
					<li><button type="button" class="btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button></li>
				</ul>
				
				
				

				
				</fieldset>
			</form>
			</div>
		


					
					</div>
				</div>
			</div>





