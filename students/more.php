<?php
// session_start();
	include_once("header.php");
	$idea_number = $_GET['idea_number'];
	$query = "select id from newideas where id='{$idea_number}' && u_id=".$_SESSION['id'];
	$res = mysqli_query($con, $query);
	if(mysqli_num_rows($res) == 0){
		echo "<script type='text/javascript'>alert('Invalid URL');</script>";
		echo "<div class='container'><div style='margin-top:80px;'><a href='dashboard.php'>Click Here</a> to go to Dashboard.</div></div>";
		exit;
	}
	$query = "select title, description, upload, logo, area, create_time from newideas where id='{$idea_number}' && u_id=".$_SESSION['id'];
	$res = mysqli_query($con, $query);
	while($row = mysqli_fetch_assoc($res)){
		// start of while loop

 ?>
<div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-lg-12">
			<h3>COMPLETE DESCRIPTION</h3><hr/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">Title</div>
		<div class="col-lg-8"><?php echo $row['title']; ?></div>
	</div><hr/>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4">Description</div>
		<div class="col-lg-8"><?php echo $row['description']; ?></div>
	</div><hr/>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4">Area to target</div>
		<div class="col-lg-8"><?php echo $row['area']; ?></div>
	</div><hr/>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4">Executive Summary</div>
		<div class="col-lg-8"><?php echo "<a href='../students/uploads/".$row['upload']."'>".$row['upload']."</a>"; ?></div>
	</div><hr/>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4">Logo</div>
		<div class="col-lg-8"><?php echo "<a href='../students/logos/".$row['logo']."'>".$row['logo']."</a>"; ?></div>
	</div><hr/>	
</div>
<?php 
// end of the while loop
}
 ?>