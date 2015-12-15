<?php 
	session_start();
	if(!isset($_SESSION['type'])){
		header("location: signUp.php",true);exit;
	}else{
		if($_SESSION['type'] === 'student'){
			header("location: ../students/dashboard.php",true); exit;
		}
		if($_SESSION['type'] === 'vent'){
			header("location: ../ventures/ideas.php",true); exit;
		}
	}
	require_once("../includes/connection.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link href="../css/lightbox.css" rel="stylesheet">
	<!-- <link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic' rel='stylesheet' type='text/css'>
 -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../js/functions.js"></script>
    <script type="text/javascript" src="../js/functions2.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.countTo.js"></script>
    <script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
    <!--<script src="https://maps.googleapis.com/maps/api/js"></script> -->
    <script src="../js/lightbox.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-fixed-top">
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-4 ">
						<div class="navbar-header">
							    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
							        <span class="glyphicon glyphicon-align-justify"></span>
							    </button>
		    			</div>
					</div>
					<div class="col-md-8">
						<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
							<ul class="nav navbar-nav navbar-right menu">
									<!-- <li><a href="dashboard.php">Dashboard</a></li> -->
									<li><a href="ideas.php">Ideas</a></li>
									<!-- <li><a href="">Teams</a></li> -->
									<li><a href="profilePage.php">Profile</a></li>
									<li><a href="../logout.php">Logout</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
	</nav>