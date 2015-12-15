<?php 
	require_once("../includes/connection.php");
	if(is_array($_POST))
	{
		foreach($_POST as $key => $value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,(htmlentities($value)));
		}
		$query = "insert into contact_us(name,email,message,create_time) values('{$name}','{$email}','{$msg}',NOW())";
		$res = mysqli_query($con,$query);
		if($res)
		{
			echo "Details submitted successfully";
		}
		else{
			echo " error while deleting the details";
		}
	}
?>