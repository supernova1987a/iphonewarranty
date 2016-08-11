<?php echo validation_errors(); ?>
    <?php echo form_open('customer/add', 'class="form-horizontal"'); ?>

<fieldset>

<!-- Form Name -->
<legend>Add Customer</legend>

<!-- Select Basic 
<div class="form-group">
  <label class="col-md-4 control-label" for="appleid">Select Apple ID</label>
  <div class="col-md-4">
    <select id="appleid" name="appleid" class="form-control">
      <option value="aid1">aid1</option>
      <option value="aid2">aid2</option>
      <option value="aid3">aid3</option>
      <option value="aid4">aid4</option>
    </select>
  </div>
</div> -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cname">Name</label>  
  <div class="col-md-4">
  <input id="cname" name="cname" type="text" placeholder="Enter Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cphone">Phone Number</label>  
  <div class="col-md-4">
  <input id="cphone" name="cphone" type="text" placeholder="Enter Phone #" class="form-control input-md" required="">
   </div>   </div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Enter Email Address" class="form-control input-md">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="singlebutton"></label>
    <div class="col-md-4">
    <input class="btn btn-primary" type="submit" name="submit" value="Create Customer" />
    </div>
</div>



</fieldset>   

</form>
