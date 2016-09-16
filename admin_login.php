<?php require "includes/header.php" ?>

<?php
	
if( isset($_SESSION['username']) &&  isset($_SESSION['position'])  ){
	
	header('Location: http://localhost/final/admin_panel.php');
}

?>

<div class="layer admin_body">
	<div class="layer panel">
		<div class=" col-md-4">
			
		<form id="login_form" class="form-horizontal col-md-12" method="POST">
   
				<!-- Text input-->
			    <div class=" center">				  
				  <div class="col-md-12">
				  <input id="username" name="username" type="text" placeholder="Username" class="form-control input-md" required="">

				  </div>
				</div>

				<!-- Text input-->
				<div class=" center">				  
				  <div class="col-md-12">
				  <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">

				  </div>
				</div>

				<!-- Button -->
				<div style="inline-block">
				  <div class="col-md-8" id="login_error" style="padding : 10px 24px; font-size:18px;"></div>
				  <div class="col-md-4">
					<button id="login_btn" class="btn btn-primary pull-right">LogIn</button>
				  </div>
				</div>

			
				</form>

		</div>
	</div>
</div>

<script  src="js/jquery-2.0.0.min.js"></script>
<script src="js/image-tooltip.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/admin_panel.js"></script>
<script src="js/data_table.js"></script>

