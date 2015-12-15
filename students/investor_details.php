<?php
// session_start();
	
	include_once("header.php");
	$investor_id = $_GET['investor_id'];
	$query = "select id from investor_user where id='{$investor_id}'";
	$res = mysqli_query($con, $query);
	if(mysqli_num_rows($res) == 0){
		echo "<script type='text/javascript'>alert('Invalid URL');</script>";
		echo "<div class='container'><div style='margin-top:80px;'><a href='dashboard.php'>Click Here</a> to go to Dashboard.</div></div>";
		exit;
	}
	$query = "select username,linkedin_profile,company_name,current_profile,years_of_experience,about_company,website,revenue from investor_user where id=".$investor_id;
	$res = mysqli_query($con, $query);
	while($row = mysqli_fetch_assoc($res)){
		// start of while loop

 ?>
<div class="container" style="margin-top:100px;">
	<div class="row">
		<div class="col-lg-12"><h3><b>ENTREPRENEUR DETAILS</b></h3><hr/></div>
	</div>
	<div class="row">
		<div class="col-lg-4"><b>Name</b></div>
		<div class="col-lg-8"><?php echo $row['username']; ?></div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-lg-4"><b>Profile</b></div>
		<div class="col-lg-8"><?php echo $row['current_profile']; ?></div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-lg-4"><b>Company Name</b></div>
		<div class="col-lg-8"><?php echo $row['company_name']; ?></div>
	</div>
	<hr/>
	
	<div class="row">
		<div class="col-lg-4"><b>About Company</b></div>
		<div class="col-lg-8" class="text-justify"><?php echo $row['about_company']; ?></div>
	</div>
	<hr/>
	
	<div class="row">
		<div class="col-lg-4"><b>Years of experience</b></div>
		<div class="col-lg-8"><?php echo $row['years_of_experience']; ?></div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-lg-4"><b>Website</b></div>
		<div class="col-lg-8"><?php echo $row['website']; ?></div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-lg-4"><b>Linkedin Profile</b></div>
		<div class="col-lg-8"><?php echo $row['linkedin_profile']; ?></div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-lg-4"><b>Revenue</b></div>
		<div class="col-lg-8"><?php echo $row['revenue']; ?></div>
	</div>
	<hr/>
</div>

<?php 
// end of the while loop
}
 ?>