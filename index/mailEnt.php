<?php 
	include_once("../header.php");
	$email = $_GET['email'];
	$token = $_GET['token'];
	$query = "update student_user set is_active=1 where email='{$email}' and token='{$token}'";
	$res = mysqli_query($con, $query);
	if($res){
		echo "<script>window.location='confirmActivation.php';</script>";
	}else{
		$query1 = "DELETE FROM student_user where email='{$email}' and token='{$token}'";
		$res1 = mysqli_query($con, $query1);
		if($res1){
			echo "<script>window.location='errorActivation.php';</script>";
		}
	}
 ?>