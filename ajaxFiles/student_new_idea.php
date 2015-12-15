<?php 
	session_start();
	require_once("../includes/connection.php");
	// echo $_FILES['file']['error'][0];exit;
	if(isset($_FILES['file']))
	{ 
		if($_FILES["file"]["error"][0] > 0)
		{
	  		echo 3;
		}else
		{
	  		$idea_name = $_FILES['file']['name'][0];
	  		$type = $_FILES["file"]["type"][0];
	  		$idea_name2 = $_FILES['file2']['name'][0];
	  		$type2 = $_FILES["file2"]["type"][0];

	  		if($type== "application/pdf" || $type== "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
	  		{
	  			move_uploaded_file($_FILES["file"]["tmp_name"][0],"../students/uploads/" . $idea_name);
	  		}
	  		else 
	  		{
	  			echo 0;
	  				exit;
	  		}

	  		if($type2=="image/jpg" || $type2== "image/jpeg" || $type2== "image/png" || $type2== "image/gif")
	  		{
	  			move_uploaded_file($_FILES["file2"]["tmp_name"][0],"../students/logos/" . $idea_name2);
	  			echo 1;
	  		}
	  		else
	  		{
	  			echo 2;
	  		}
		}
		exit; 	
	}else if(isset($_POST['title']))
	{
		foreach($_POST as $key=>$value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,(htmlentities($value)));
		}
		// print_r($_POST);exit;
		$query = "insert into newideas(u_id,title,description,upload,logo,area,create_time) values('{$_SESSION["id"]}','{$title}','{$desc}','{$file}','{$file2}','{$area}',NOW())";
		$res = mysqli_query($con,$query);
		if($res)
		{
			echo "idea successfully submitted";
		}
		else
		{
			echo "error while uploading idea";
		}
	}
 ?>