<?php 
	require_once("../includes/connection.php");
	if(is_array($_POST))
	{
		foreach($_POST as $key => $value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,(htmlentities($value)));
		}
		$query1 = "SELECT is_active from student_user where email='{$email}'";
		$res1 = mysqli_query($con,$query1);
		if(mysqli_num_rows($res1) > 0){
			while($row1 = mysqli_fetch_assoc($res1)){
				if($row1['is_active'] == 0){
					echo "Please activate your account first, Entrepreneur!";
				}else{
					$type="1";
					$random = rand(10000,500000);
					$random = md5(md5($random));
					$query = "UPDATE student_user set token='{$random}' where email='{$email}'";
					$res = mysqli_query($con,$query);
					if($res){
						$body = "Dear ".$name."\n\n"."Click on the following link to change your password on C.I.E portal.\n <a href='http://www.davstartups.com/ajaxFiles/forgotPassChange.php?email=".$email."&token=".$random."&type=".$type."'>Change Password</a>";
						$header= 'Content-type: text/html; charset=utf-8' . "\r\n";
						$header.= "From:contact@advatiya.org";
						$subject = "Change Password CIE";
						$resMail = mail($email, $subject, $body, $header);
						if($resMail){
							echo "Mail sent!";
						}
						else
							echo "Error while sending mail";
					}else{
						echo "Please try again later!";
					}
				}

			}
		}
		$query2 = "SELECT is_active from vent_user where email='{$email}'";
		$res2 = mysqli_query($con,$query2);
		if(mysqli_num_rows($res2) > 0){
			while($row2 = mysqli_fetch_assoc($res2)){
				if($row2['is_active'] == 0){
					echo "Please activate your account first, Venture Capitalist!";
				}else{
					$type="2";
					$random = rand(10000,500000);
					$random = md5(md5($random));
					$query = "UPDATE vent_user set token='{$random}' where email='{$email}'";
					$res = mysqli_query($con,$query);
					if($res){
						$body = "Dear ".$name."\n\n"."Click on the following link to change your password on C.I.E portal.\n <a href='http://www.davstartups.com/ajaxFiles/forgotPassChange.php?email=".$email."&token=".$random."&type=".$type."'>Change Password</a>";
						$header= 'Content-type: text/html; charset=utf-8' . "\r\n";
						$header.= "From:contact@advatiya.org";
						$subject = "Change Password CIE";
						$resMail = mail($email, $subject, $body, $header);
						if($resMail)
							echo "Mail sent!";
						else
							echo "Error while sending mail";
					}else{
						echo "Please try again later!";
					}
				}

			}
		}
		$query3 = "SELECT is_active from investor_user where email='{$email}'";
		$res3 = mysqli_query($con,$query3);
		if(mysqli_num_rows($res3) > 0){
			while($row3 = mysqli_fetch_assoc($res3)){
				if($row3['is_active'] == 0){
					echo "Please activate your account first, Investor!";
				}else{
					$type="3";
					$random = rand(10000,500000);
					$random = md5(md5($random));
					$query = "UPDATE investor_user set token='{$random}' where email='{$email}'";
					$res = mysqli_query($con,$query);
					if($res){
						$body = "Dear ".$name."\n\n"."Click on the following link to change your password on C.I.E portal.\n <a href='http://www.davstartups.com/ajaxFiles/forgotPassChange.php?email=".$email."&token=".$random."&type=".$type."'>Change Password</a>";
						$header= 'Content-type: text/html; charset=utf-8' . "\r\n";
						$header.= "From:contact@advatiya.org";
						$subject = "Change Password CIE";
						$resMail = mail($email, $subject, $body, $header);
						if($resMail)
							echo "Mail sent!";
						else
							echo "Error while sending mail";
					}else{
						echo "Please try again later!";
					}
				}

			}
		}
	}
 ?>