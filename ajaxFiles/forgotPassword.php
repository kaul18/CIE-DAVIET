<?php 
	include_once("../header.php");

 ?>
<div class="container" style="margin-top:100px;">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="form-group">
    		<label for="email">Email Address:</label>
    		<input type="email" class="form-control" id="email">
  		</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<button type="submit" class="btn btn-default btn-block" style="background-color:#212A3F;color:#ededed" onclick="forgotPassword();">Hit it!</button>
		</div>
	</div>
</div>