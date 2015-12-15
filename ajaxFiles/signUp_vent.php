<?php 
	require_once("../includes/connection.php");
	if(is_array($_POST))
	{
		foreach($_POST as $key=>$value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,(htmlentities($value)));
		}

		$query = "insert into vent_user(username,email,pass,phone,create_time,isVent,is_active,token) values('{$name}','{$email}','{$pass}','{$phno}',NOW(),'{$isVent}',0,0)";
		$res = mysqli_query($con,$query);
		if($res)
		{
			echo "Venture successfully registered.";
			$random = rand();
			$random = md5(md5($random));
			$query5 = "update vent_user set token='{$random}' where email='{$email}'";
			$body = "<h3>Dear ".$name."</h3><p>Click on the following link to activate your account on C.I.E portal.</p><br/> <a href='http://www.davstartups.com/index/mailVent.php?email=".$email."&token=".$random."'>Activate my account</a>";
			$header= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$header.= "From:info@davstartups.com";
			$res5 = mysqli_query($con, $query5);
			if($res5){
				$subject = "subject";
				$resMail = mail($email, $subject, $body, $header);
				if($resMail)
					echo "...A mail has been sent to your email id..Please confirm your email id to activate your account..!!";
				else
					echo "Error while sending mail";
			}else{
				echo "0";
			}
		}else{
			echo "Error while registration.";
		}
	}
 ?>