<?php 
	session_start();
	require_once("../includes/connection.php");
	if(is_array($_POST))
	{
		foreach($_POST as $key=>$value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,(htmlentities($value)));
		}
		$query = "update vent_user set username='{$name}',phone = '{$phone}' where id=".$_SESSION['id'];
		$res = mysqli_query($con,$query);
		if($res){
			echo "Profile details updated";

		}else{
			echo "error while updating the profile details ".mysqli_error($con);
		}	
	}
 ?>
		
