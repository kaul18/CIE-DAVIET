<?php 
	session_start();
	session_unset("type");
	session_unset("id");
	session_unset("username");
	session_destroy("type");
	session_destroy("id");
	session_destroy("username");
	header("location: index/index.php",true);
?>