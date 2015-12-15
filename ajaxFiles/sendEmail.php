<?php 
	require_once("../includes/connection.php");
	if(is_array($_POST))
	{
		foreach($_POST as $key=>$value)
		{
			$key = $key;
			$$key = mysqli_real_escape_string($con,(htmlentities($value)));
		}
		$header= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$header.= "From:".$from;
		$resMail = mail($to, $subject, $body, $header);
		if($resMail)
			echo "Mail Sent";
		else
			echo "Error while sending mail..Please try again";
	}
 ?>