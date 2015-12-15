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
		$query = "UPDATE student_user set username='{$t_username}',phone = '{$t_phone}',address = '{$t_address}',comp_name= '{$t_comp}' ,insti_name = '{$t_iname}',insti_add='{$t_iadd}',insti_no = '{$t_ino}',univ='{$t_uni}',current_profile='{$t_profile}' where id=".$_SESSION['id'];
		$res = mysqli_query($con,$query);
		if($res){
			echo "Profile details updated";

		}else{
			echo "error while updating the profile details ".mysqli_error($con);
		}	
	}
 ?>
		