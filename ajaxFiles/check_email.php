<?php
	require_once("../includes/connection.php");
	if(isset($_POST['email']))
	{
		$email = mysqli_real_escape_string($con,(htmlentities($_POST['email'])));
		$query = "select email from student_user where email='{$email}'";
		$res = mysqli_query($con,$query);
		$count_stu = mysqli_num_rows($res);
		if($count_stu>0)
		{
			echo "user already registered";
		}
		else
		{
			$query = "select email from investor_user where email='{$email}'";
			$res = mysqli_query($con,$query);
			$count_ent = mysqli_num_rows($res);
			if($count_ent>0)
			{
				echo "user already registered";
			}else
			{
				// $query = "select email from venture_user where email='{$email}'";
				// $res = mysqli_query($con,$query);
				// $count_vent = mysqli_num_rows($res);
				// if($count_vent>0)
				// {
				// 	echo "user already registered";
				// 	exit;
				// }else{
					echo "0";
				// }
			}
		}
	}
?>