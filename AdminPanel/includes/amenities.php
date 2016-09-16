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


<div class="modal fade" data-easein="flipXIn" id="amenities-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content reservation-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span>
				<br>
			</button>

			<div class="container">

				<form type="post" id="edit-amenities">

					<fieldset>

						<input type="hidden" name="amenities-add" id="amenities-add" value="0">
						<input type="hidden" name="id" id="am-id">
						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">ID</label>
							<input id="amenities-id" class="col-md-6" name="nnid" type="text" value="" required="" disabled>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Name</label>
							<input id="amenities-name" class="col-md-6" name="name" type="text" value="" required="" >
						</div>
						
						<!-- Text input-->
						<div class="form-group row">        
							 <label class="col-md-4 control-label" for="f_name">Image</label> 
							<img id="amenities-img"  src="" class="room-image col-md-4"> 
							 <input id="amenities-image" class="col-md-2"  name="pic"  type="file" >   				       
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Description</label>
							<textarea id="amenities-des" class="col-md-6" name="des" rows="5" type="text" value="" required="" > </textarea>
						</div>

						

						<ul class="lisr list-inline pull-right">
							<li>
								<button id="update-amenities" class="update-btn">Update</button>
							</li>
							<li>
								<button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button>
							</li>
						</ul>





					</fieldset>
				</form>
			</div>




		</div>
	</div>
</div>
