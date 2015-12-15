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
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	 	{
			echo "Incorrect email";
		}
		else if($password == "")
		{
			echo "please enter a password";
		}
		else
		{
			$query1 = "select id, username,isStu from student_user where email='{$email}' and pass='{$password}' and is_active=1";
			$res1 = mysqli_query($con,$query1);
			$query2 = "select id, username, isInvestor from investor_user where email='{$email}' and pass='{$password}' and is_active=1";
			$res2 = mysqli_query($con,$query2);
			$query3 = "select id, username,isVent from vent_user where email='{$email}' and pass='{$password}' and is_active=1";
			$res3 = mysqli_query($con,$query3);
			if(mysqli_num_rows($res1)>0)
			{
				while($row = mysqli_fetch_assoc($res1))
				{
					$_SESSION['id'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['type'] = 'student';
					echo "1";
				}	
			}else if(mysqli_num_rows($res2)>0)
			{
				while($row = mysqli_fetch_assoc($res2))
				{
					$_SESSION['id'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['type'] = 'investor';
					echo "2";
				}
			}else if(mysqli_num_rows($res3)>0)
			{
				while($row = mysqli_fetch_assoc($res3))
				{
					$_SESSION['id'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['type'] = 'vent';
					echo "3";
				}
			}else
			{
				echo "Email and password donot match";
			}
		}
	}
 ?>