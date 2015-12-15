<?php
	session_start();
	require_once("../includes/connection.php");
	
	if(is_array($_POST))
	{
		foreach($_POST as $key => $value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,(htmlentities($value)));
		}
	// print_r($_POST);exit; 

		if(($cpass == "") || ($npass == "") || ($cnpass == "")){
			echo "1";
		}else if(strlen($cpass) < 5){
			echo "2";
		}else if($npass !== $cnpass){
			echo "3";
		}else if(strlen($npass) < 5 ){
			echo "4";
		}else{
			$query1 = "SELECT pass from investor_user where username='{$_SESSION['username']}' and id='{$_SESSION['id']}'";
			$res1 = mysqli_query($con,$query1);
			$row=mysqli_fetch_assoc($res1);
			if($res1)
			{
				if($row['pass'] == $cpass)
				{
					$query = "UPDATE investor_user set pass='{$npass}' where username='{$_SESSION['username']}' and id='{$_SESSION['id']}'";
					$res = mysqli_query($con,$query);
					if($res){
						echo "5";
					}else{
						echo "6";
					}
				}else{
					echo "current password is not correct";
				}
			}
		}
	}
 ?>