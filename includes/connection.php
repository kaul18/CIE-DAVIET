<?php 
	$con = mysqli_connect("localhost","daviet_user","Davietcie2001","daviet_cie") or die("Database not found..,,,!!").mysqli_error($con);
	$environment = "development"; 
	if($environment == "online"){
		error_reporting(0);
	}
 ?>