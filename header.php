<?php
	session_start();
	if(isset($_SESSION['type'])){
		if($_SESSION['type'] === 'investor'){
			header("location: ../investor/ideas.php",true); 
		}else if($_SESSION['type'] === 'vent'){
		header("location: ../ventures/ideas.php",true); 
		}else{
			header("location: ../students/dashboard.php",true); 
		}
	}
	require_once("../includes/connection.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DAV startup's | CIE</title>
 
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css" type="text/css">
	<link href="../css/lightbox.css" rel="stylesheet">
	<!-- <link href='http://fonts.googleapis.com/css?family=Poppins:400,600,700,500,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,400italic,500,500italic,300,100italic,100,300italic' rel='stylesheet' type='text/css'> -->

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
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../js/lightbox.min.js"></script>


</head>
<body>
<nav class="navbar navbar-fixed-top">
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1" id="aho">
					<div class="navbar-header">
						    <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target="#myNavbar">
						        <span class="glyphicon glyphicon-align-justify"></span>
						    </button>
						    <div class="col-xs-3 col-lg-12">
	      					<a class="navbar-brand logo"  style="" href="../index/index.php">
	      						<img class="img-responsive logoimg" src="../images/images.png"/>
	      					</a>
	      					</div>
	    			</div>
				</div>
				<div class="col-md-11">
					<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
						<ul class="nav navbar-nav navbar-right menu">
								<li><a href="../index/index.php" class="page-scroll active"><strong>Home</strong></a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>About Us</strong> <span class="caret"></span></a>
									<ul class="dropdown-menu">
									<li><a href="http://www.davcmc.net.in/" target="_blank"><strong>DAV CMC</strong></a></li>
									<li><a href="http://davietjal.org/" target="_blank"><strong>DAVIET</strong></a></li>
									</ul>
								</li>
								<li><a href="../investor/signUp.php"><strong>Investors</strong></a></li>
								<li><a href="../ventures/signUp.php"><strong>Venture Capitalists</strong></a></li>
								<li><a href="../students/signUp.php"><strong>Entrepreneurs</strong></a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CIE Committe <span class="caret"></span></a>
									<ul class="dropdown-menu">
									<li><a href="../index/index.php#section2">Objectives </a></li>
									<li><a href="#">Committe </a></li>
									</ul>
								</li> -->
								<li><a type="button" data-toggle="modal" data-target="#myModal" style="cursor:pointer;"><strong>Login</strong></a></li>
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up <span class="caret"></span></a>
									<ul class="dropdown-menu">
									<li><a href="../students/signUp.php">Team</a></li>
									<li><a href="../ent/signUp.php">Entrepreneur</a></li>
									<li><a href="../ventures/signUp.php">Venture</a></li>
									</ul>
								</li> -->
								<li><a href="../index/successStories.php"><strong>Success Stories</strong></a></li>
								<li><a href="../index/index.php#section4" class="page-scroll"><strong>Contact Us</strong></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
</nav>

<div id="myModal" class="modal fade" role="dialog" style="margin-top:100px;">
	<div class="modal-dialog modal-md">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Login (Entrepreneur / Investors / Venture Capitalists)</h4>
	      	</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" tabindex="1" class="form-control" id="loginEmail" placeholder="Enter Email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<label for="pwd" class="pull-right"><a href="../ajaxFiles/forgotPassword.php">Forgot password?</a></label>
					<input type="password" tabindex="2" class="form-control" id="loginPassword" placeholder="Enter Password">
				</div>
				Don't have an account? Register (<a href="../students/signUp.php">Entrepreneur</a> / <a href="../investor/signUp.php">Investors </a>/ <a href="../ventures/signUp.php">Venture Capitalists</a>)
				
				<button tabindex="3" name="loginButton" class="btn pull-right" style="background-color:#212A3F;color:#eee;" onclick="loginAll()">Login</button>
				<br/><br/>
			</div>
		</div>

	</div>
</div>