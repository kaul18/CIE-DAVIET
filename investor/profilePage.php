<?php 
	include_once("header.php");
	$query = "select username,phone from investor_user where id=".$_SESSION['id'];
	$res = mysqli_query($con,$query);
?>
<div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-lg-12 text-center"><h3><?php echo $_SESSION['username']; ?>'s Profile</h3></div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="row">
				<div class="col-lg-10"><h4>Details</h4></div>
				<div class="col-lg-2 pull-right" id="editUpdate"><button id="updateButton" onclick="editProfileInvestor()" class="btn btn-default" style="background-color:#ededed;"><span class="glyphicon glyphicon-pencil" ></span> edit</button></div>
			</div><hr/>
			<?php 
				while($row = mysqli_fetch_assoc($res)){
					echo '  <div class="row">
								<div class="col-lg-6">Name</div>
								<div class="col-lg-6" id="e_username">'.$row["username"].'</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-lg-6">Phone</div>
								<div class="col-lg-6" id="e_phone">'.$row["phone"].'</div>
							</div>
							<hr/>
							';
					}
			 ?>
			<br/>
			<div class="row">
				<div class="col-lg-10"><h4>Change Password</h4></div>
			</div><hr/>
			<div class="row">
				<div class="col-lg-6">Current Password</div>
				<div class="col-lg-6">
					<div class="form-group">
						<input type="password" class="form-control" id="curr_password" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">New Password</div>
				<div class="col-lg-6">
					<div class="form-group">
						<input type="password" class="form-control" data-toggle="tooltip" data-placement="left" title=" New password can't be less than 5 characters" id="new_password"/>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">Confirm new Password</div>
				<div class="col-lg-6">
					<div class="form-group">
						<input type="password" class="form-control" id="confirm_new_password"/>
					</div>
				</div>
			</div><hr/>
			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-default pull-right" style="background-color:#ededed;" onclick="password_change('investor')"><span class="glyphicon glyphicon-pencil" ></span> Change Password</button>
				</div>
			</div>
			<br/><br/><br/>
		</div>
	</div>
</div>