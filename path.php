<?php
	$url = __DIR__;	
	$url = explode("\\",$url);
	$url1 = $url[3];
	$url1.="/";
	$path = implode("/",$url);
	$path.="/";
	!defined("BASEPATH")?define("BASEPATH",$path):NULL;
	!defined("BASEURL")?define("BASEURL","http://localhost/".$url1):NULL;
 ?>