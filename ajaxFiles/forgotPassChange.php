<?php 
	include_once("../header.php");
	error_reporting(0);
	if(($_GET['email'] == "")||($_GET['email'] == "undefined")||($_GET['token'] == "")||($_GET['token'] == "undefined")||($_GET['type'] == "")||($_GET['type'] == "undefined")){
		echo "<div class='container' style='margin-top:80px;'>Invalid Link!</div>";exit;
	}
 ?>
 <div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-lg-12" style="text-align:center;padding-top:1%;">
			<h4>Password Reset</h4><br/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<input type="password" class="form-control" id="passwordchange" placeholder="Enter Password" 
				onblur="">
		</div>
		<div class="col-lg-4 col-lg-offset-4" style="margin-top:10px;">
			<input type="password" class="form-control" id="passwordchange1" placeholder="Re-enter Password">
		</div>
			<input type="hidden" class="form-control" id="pcemail" value="<?php echo $_GET['email'];?>">
			<input type="hidden" class="form-control" id="pctoken" value="<?php echo $_GET['token'];?>">
			<input type="hidden" class="form-control" id="pctype" value="<?php echo $_GET['type'];?>">
			<div class="col-lg-4 col-lg-offset-4" style="margin-top:10px;">
			<button class="btn btn-primary btn-md btn-block" style="background-color:#212A3F;" name="resetPassword" onclick="passwordChangeYes()">Reset</button>
		</div>
	</div>
</div>