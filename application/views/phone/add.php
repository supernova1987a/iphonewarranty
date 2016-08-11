<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add iPhone</legend>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Type</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="iPhone6" checked="checked">
      iPhone6
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="iPhone6S">
      iPhone6S
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="color">Color</label>
  <div class="col-md-4">
    <select id="color" name="color" class="form-control">
      <option value="Gold">Gold</option>
      <option value="Rose Gold">Rose Gold</option>
      <option value="Space Gray">Space Gray</option>
      <option value="Silver">Silver</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="weight">Weight</label>  
  <div class="col-md-4">
  <input id="weight" name="weight" type="text" placeholder="Enter Weight" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="size">Size</label>
  <div class="col-md-4">
    <select id="size" name="size" class="form-control">
      <option value="5 inch">5 inch</option>
      <option value="6 inch">6 inch</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imei">IMEI</label>  
  <div class="col-md-4">
  <input id="imei" name="imei" type="text" placeholder="imei number" class="form-control input-md" required="">
  <span class="help-block">Enter the unique IMEI of the phone</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="customer">Select Customer</label>
  <div class="col-md-4">
    <select id="customer" name="customer" class="form-control">
      <option value="cid1">cid1</option>
      <option value="cid2">cid2</option>
      <option value="cid3">cid3</option>
      <option value="cid4">cid4</option>
    </select>
  </div>
</div>

</fieldset>
</form>
