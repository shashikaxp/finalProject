<button id="add-admin" class="add-btn">+ Add New</button>

<table id="admin_table" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>User ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Position</th>
			
			<th></th>
			<th></th>	
		</tr>
	</thead>
	<tbody>



		<?php include "functions/config.php" ?>

			<?php
			
			
			$result = mysql_query("SELECT * FROM user ");
			
			while($row = mysql_fetch_array($result)) {
			
			$output  =	'<tr>';
            $output .=  '<td>'.$row["user_id"].'</td>';
            $output .=  '<td>'.$row["username"].'</td>';
            $output .=  '<td>'.$row["password"].'</td>';
            $output .=  '<td>'.$row["position"].'</td>';
       
		
				
			$output .=  '<td><i class="fa fa-pencil-square-o edit-admin" data-admin='.$row["user_id"].' aria-hidden="true"></i></td>';	
			$output .=  '<td><i class="fa fa-trash delete-admin" data-deladmin='.$row["user_id"].' aria-hidden="true"></i></td>';
			
			$output .=  '</tr>';	
			
			echo $output;
			
			}
				
			?>
	</tbody>
</table>


<div class="modal fade " id="admin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content reservation-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span>
				<br>
			</button>

			<div class="container">

				<form type="POST" id="edit-admin">

					<fieldset>

						<!-- Text input-->
						<input type="hidden" name="admin-add" id="admin-add" value="0">	
						<input type="hidden" name="id" id="admin-id">				

						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">ID</label>
							<input id="adminid" class="col-md-6" name="adult" type="text" value="" required="" disabled>
						</div>
						
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Username</label>
							<input id="admin-username" class="col-md-6" name="username" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Password</label>
							<input id="admin-password" class="col-md-6" name="password" type="text" value="" required="">
						</div>
						

						<!-- Selct input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Position</label>

							<select id="admin-position" class="col-md-6" name="position">
								<option value="Admin">Admin</option>
								<option value="Frontdesk">Frontdesk</option>								
							</select>
						</div>
						


						<ul class="lisr list-inline pull-right">
							<li>
								<button id="update-admin" class="update-btn">Update</button>
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
