<?php 
	require_once("../includes/connection.php");
	session_start();
	if(is_array($_POST))
	{
		foreach($_POST as $key=>$value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,(htmlentities($value)));
		}
		if($pass != $pass1){
			echo "Change password and confirm password do not match!";exit;
		}
		if($token == ""){
			echo "Invalid Link";exit;
		}
		if(($type != 1)&&($type != 2)&&($type !=3 )){
			echo "Invalid Link";exit;
		}
		if($type == 1){
			$query = "UPDATE student_user set pass='{$pass}' where email='{$email}' and token='{$token}'";
			$res = mysqli_query($con,$query);
			if(mysqli_affected_rows($con) > 0){
				$query1="UPDATE student_user set token = 0 where email='{$email}'";
				$res1=mysqli_query($con, $query1);
				if(mysqli_affected_rows($con) > 0){
					echo "Password Updated. Please login now.";
				}
			}else{
				echo "Error while updating password. Please try again later.";
			}
		}else if($type == 2){
			$query = "update vent_user set pass='{$pass}' where email='{$email}' and token='{$token}'";
			$res = mysqli_query($con,$query);
			if( mysqli_affected_rows($con) > 0){
				$query1="UPDATE vent_user set token = 0 where email='{$email}'";
				$res1=mysqli_query($con, $query1);
				if(mysqli_affected_rows($con) > 0){
					echo "Password Updated. Please login now.";
				}
			}else{
				echo "Error while updating password. Please try again later.";
			}
		}else if($type == 3){
			$query = "update investor_user set pass='{$pass}' where email='{$email}' and token='{$token}'";
			$res = mysqli_query($con,$query);
			if( mysqli_affected_rows($con) > 0){
				$query1="UPDATE investor_user set token = 0 where email='{$email}'";
				$res1=mysqli_query($con, $query1);
				if(mysqli_affected_rows($con) > 0){
					echo "Password Updated. Please login now.";
				}
			}else{
				echo "Error while updating password. Please try again later.";
			}
		}

	}

 ?>