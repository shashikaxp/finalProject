<?php require "includes/header.php" ?>

<?php include "includes/loading.php" ?>

<?php include "includes/navigation.php" ?>


<div class="booking-img">
<img src="images/covers/payment.jpg">
<h1 class="center">Payment</h1>	
</div>


<div class="payment-form col-md-10 col-md-offset-1">

<form class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="f_name">First Name</label>  
  <div class="col-md-4">
  <input id="f_name" name="f_name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="l_name">Last Name</label>  
  <div class="col-md-4">
  <input id="l_name" name="l_name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr_line1">Address Line 1</label>  
  <div class="col-md-4">
  <input id="addr_line1" name="addr_line1" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

 <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr_line2">Address Line 2</label>  
  <div class="col-md-4">
  <input id="addr_line2" name="addr_line2" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

 <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

	<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="zip_code">Zip Code</label>  
  <div class="col-md-4">
  <input id="zip_code" name="zip_code" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>  
  <div class="col-md-4">
  <input id="country" name="country" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact Number</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="terms"></label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="terms-0">
      <input type="checkbox" name="terms" id="terms-0" value="1">
      i agree the terms and condition of this hotel
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-default">Payment</button>
  </div>
</div>

</fieldset>
</form>
</div>

<?php include "includes/footer.php" ?>
