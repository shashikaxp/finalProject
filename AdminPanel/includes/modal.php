<style>

	select{
		padding: 4px;
	}
	
</style>


<!-- Comments modal-->

<div class="modal fade " id="comment-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content reservation-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span>
				<br>
			</button>

			<div class="container">

				<form type="get" id="edit-comment">

					<fieldset>


						<input type="hidden" name="id" id="comment-id">
						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Name</label>
							<input id="comment-name" class="col-md-6" name="child" type="text" value="" required="" disabled>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Email</label>
							<input id="comment-email" class="col-md-6" name="child" type="text" value="" required="" disabled>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Subject</label>
							<input id="comment-subject" class="col-md-6" name="child" type="text" value="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Content</label>
							<textarea id="comment-content" class="col-md-6" name="child" rows="5" type="text" value="" required="" disabled> </textarea>
						</div>

						<!-- Selct input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Status</label>

							<select id="comment-status" class="col-md-6" name="status">
								<option value="Pending">Pending</option>
								<option value="On Process">On Process</option>
								<option value="Done">Done</option>
							</select>
						</div>

						<ul class="lisr list-inline pull-right">
							<li>
								<button id="update-comment" class="update-btn">Update</button>
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



<!-- Customers Modal -->

<div class="modal fade " id="customer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content reservation-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span>
				<br>
			</button>

			<div class="container">

				<form type="POST" id="edit-customer">

					<fieldset>
						<input type="hidden" name="id" id="cus-id">
						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">NIC</label>
							<input id="customer-nic" class="col-md-6" name="nic" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">First Name</label>
							<input id="customer-fname" class="col-md-6" name="f_name" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Last Name</label>
							<input id="customer-lname" class="col-md-6" name="l_name" type="text" value="" required="">
						</div>


						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Address Line 1</label>
							<input id="customer-line1" class="col-md-6" name="addr_line1" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Address Line 2</label>
							<input id="customer-line2" class="col-md-6" name="addr_line2" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">City</label>
							<input id="customer-city" class="col-md-6" name="city" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Zip Code</label>
							<input id="customer-zip" class="col-md-6" name="zip" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Country</label>
							<input id="customer-country" class="col-md-6" name="country" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Contact</label>
							<input id="customer-contact" class="col-md-6" name="contact" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Email</label>
							<input id="customer-email" class="col-md-6" name="email" type="text" value="" required="">
						</div>

						<ul class="lisr list-inline pull-right">
							<li>
								<button id="update-cus" class="update-btn">Update</button>
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






<!-- Gallery Modal -->



<div class="modal fade " id="pic-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content reservation-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span>
				<br>
			</button>

			<div class="container">


				<form method="post" id="pic-addForm" enctype="multipart/form-data">

					<fieldset>

						<input type="hidden" name="pic_count" id="pic_count">

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-2 control-label" for="f_name">Upload</label>
							<img id="gal-image" src="" class="room-image col-md-4">
							<input id="file" class="col-md-4" name="files[]" multiple="multiple" accept="image/*" type="file">
						</div>



						<ul class="lisr list-inline pull-right">
							<li>
								<button id="add-pics" class="update-btn">Add</button>
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



<!-- Reservation Modal -->

<div class="modal fade " id="reservation-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content reservation-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span>
				<br>
			</button>

			<div class="container">

				<form type="POST" id="edit-reservation">

					<fieldset>

						<!-- Text input-->

						<input type="hidden" name="id" id="res-id">
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Arrival</label>
							<div class="input-group date form_date2 col-md-6" data-date="" data-date-format="dd MM yyyy" data-link-field="check_in" data-link-format="yyyy-mm-dd">
								<input id="res-arrival" class="form-control  " name="arrival" type="text" value="" required="">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Departure</label>
							<div class="input-group date form_date2 col-md-6" data-date="" data-date-format="dd MM yyyy" data-link-field="check_in" data-link-format="yyyy-mm-dd">
								<input id="res-departure" class="form-control" name="departure" type="text" value="" required="">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Adult</label>
							<input id="res-adults" class="col-md-6" name="adult" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Child</label>
							<input id="res-child" class="col-md-6" name="child" type="text" value="" required="">
						</div>

						<!-- Selct input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Status</label>

							<select id="res-status" class="col-md-6" name="status">
								<option value="Confirm">Confirm</option>
								<option value="Pending">Pending</option>
								<option value="Cancelled">Cancelled</option>
								<option value="Cleared">Cleared</option>
							</select>
						</div>

						<ul class="lisr list-inline pull-right">
							<li>
								<button id="update-reservation" class="update-btn">Update</button>
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



<!-- Room Inventory -->

<div class="modal fade " id="roomin-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content reservation-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span>
				<br>
			</button>

			<div class="container">

				<form type="POST" id="edit-roomin">

					<fieldset>

						<!-- Text input-->

						<input type="hidden" name="id" id="roomin-id">
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Arrival</label>
							<div class="input-group date form_date2 col-md-6" data-date="" data-date-format="dd MM yyyy" data-link-field="check_in" data-link-format="yyyy-mm-dd">
								<input id="room-arrival" class="form-control  " name="arrival" type="text" value="" required="">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">							
							<label class="col-md-4 control-label" for="f_name">Departure</label>
							<div class="input-group date form_date2 col-md-6" data-date="" data-date-format="dd MM yyyy" data-link-field="check_in" data-link-format="yyyy-mm-dd">
								<input id="room-departure" class="form-control" name="departure" type="text" value="" required="">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Quantitiy</label>
							<input id="room-quantity" class="col-md-6" name="quantity" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Room ID</label>
							<input id="room-rmid" class="col-md-6" name="room_id" type="text" value="" required="">
						</div>

						<!-- Selct input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Status</label>

							<select id="room-status" class="col-md-6" name="status">
								<option value="Reserved">Reserved</option>
								<option value="Checked In">Cheked In</option>
								<option value="Checked Out">Cheked Out</option>
								<option value="Cancelled">Cancelled</option>
							</select>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Adult</label>
							<input id="room-adult" class="col-md-6" name="adult" type="text" value="" required="">
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="f_name">Child</label>
							<input id="room-child" class="col-md-6" name="child" type="text" value="" required="">
						</div>


						<ul class="lisr list-inline pull-right">
							<li>
								<button id="update-roomin" class="update-btn">Update</button>
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





<!-- Room  Modal -->

	


<div class="modal fade" id="room-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content  reservation-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span><br></button>
			
			<div class="container">
				
			<form type="POST" id="edit-room" enctype="multipart/form-data">
			
			<fieldset>
				<input type="hidden" name="id" id="room-id">
				<input type="hidden" name="room-add" id="room-add" value="0">	
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Room ID</label> 					  
                    <input id="rm-id" class="col-md-6"  name="id"  type="text" value="" disabled>                    
				</div>
    				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Type</label> 					  
                    <input id="rm-type" class="col-md-6"  name="type"  type="text" value="" required="">                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Rate</label> 					  
                    <input id="rm-rate" class="col-md-6"  name="rate"  type="text" value="" required="">                    
				</div>
				
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Description</label> 					  
					<textarea rows="3" id="rm-dec" class="col-md-6"  name="dec"  type="text" value="" required=""></textarea>                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Description Large</label> 					  
					<textarea rows="5" id="rm-dec-lg" class="col-md-6"  name="declg"  type="text" value="" required=""></textarea>                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Image</label> 
					<img id="room-image"  src="" class="room-image col-md-4"> 
					 <input id="rm-image" class="col-md-2"  name="image"  type="file" >   				       
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Quantity</label> 					  
                    <input id="rm-qty" class="col-md-6"  name="qty"  type="text" value="" required="">                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Adult</label> 					  
                    <input id="rm-adult" class="col-md-6"  name="adult"  type="text" value="" required="">                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Child</label> 					  
                    <input id="rm-child" class="col-md-6"  name="child"  type="text" value="" required="">                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Bed</label> 					  
                    <input id="rm-bed" class="col-md-6"  name="bed"  type="text" value="" required="">                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">View</label> 					  
                    <input id="rm-view" class="col-md-6"  name="view"  type="text" value="" required="">                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">SQM</label> 					  
                    <input id="rm-sqm" class="col-md-6"  name="sqm"  type="text" value="" required="">                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">WIFI</label> 					  
                    <input id="rm-wifi" class="col-md-6"  name="wifi"  type="text" value="" required="">                    
				</div>
				
				<!-- Text input-->
				<div class="form-group row">        
					 <label class="col-md-4 control-label" for="f_name">Room Services</label> 					  
                    <input id="rm-rs" class="col-md-6"  name="rs"  type="text" value="" required="">                    
				</div>
				
				<ul class="lisr list-inline pull-right">
					<li><button id="update-room" class="update-btn" name="submit" >Update</button> </li>
					<li><button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button></li>
				</ul>
				
		
			
				
				</fieldset>
			</form>
			</div>
			
					
					</div>
				</div>
			</div>
