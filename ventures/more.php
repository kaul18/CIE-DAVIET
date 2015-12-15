<?php
	include_once("header.php");
	$idea_number = mysqli_real_escape_string($con,(htmlentities($_GET['idea_number'])));
	$query = "select id,u_id,title, description, upload,logo, area, create_time from newideas where id='{$idea_number}'";
	$res = mysqli_query($con, $query);
	$u_id = "";
	if(mysqli_num_rows($res) == 0){
		echo "<script type='text/javascript'>alert('Invalid URL');</script>";
		echo "<div class='container'><div style='margin-top:80px;'><a href='dashboard.php'>Click Here</a> to go to Dashboard.</div></div>";
		exit;
	}else
	{
	while($row = mysqli_fetch_assoc($res)){
		// start of while loop
		$u_id = $row['u_id'];
 ?>
<div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-lg-12">
			<h3><b>COMPLETE DESCRIPTION OF IDEA</b></h3><hr/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4"><b>Uploaded Time</b></div>
		<div class="col-lg-8"><?php echo $row['create_time']; ?></div>
	</div><hr/>
	<div class="row">
		<div class="col-lg-4"><b>Title</b></div>
		<div class="col-lg-8"><?php echo $row['title']; ?></div>
	</div><hr/>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4"><b>Description</b></div>
		<div class="col-lg-8"><?php echo $row['description']; ?></div>
	</div><hr/>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4"><b>Area to target</b></div>
		<div class="col-lg-8"><?php echo $row['area']; ?></div>
	</div><hr/>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4"><b>Executive Summary</b></div>
		<div class="col-lg-8"><?php echo "<a href='../students/uploads/".$row['upload']."'>".$row['upload']."</a>"; ?></div>
	</div><hr/>
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4"><b>Logo</b></div>
		<div class="col-lg-8"><?php echo "<a href='../students/logos/".$row['logo']."'>".$row['logo']."</a>"; ?></div>
	</div><hr/>	
	<div class="row" style="margin-top:30px;">
		<div class="col-lg-4"><button class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-envelope"></span> Send Mail to Entrepreneur</button></div>
	</div>
</div><br/>
<?php 
// end of the while loop
	}
}
 ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3><b>ENTREPRENEUR DETAILS</b></h3>
		</div>
	</div>
	<?php 
	$emaill = "";
	$query1 = "SELECT email from vent_user where id='{$_SESSION['id']}'";
	$res1 = mysqli_query($con,$query1);
	if($res1){
		while($row1 = mysqli_fetch_assoc($res1)){
			$emaill = $row1['email'];
		}
	}
	$emailto = "";
	$query = "SELECT username,email,phone,dob,address,comp_name,insti_name,insti_add,insti_no,univ,current_profile,count_team,team_members from student_user where id='{$u_id}'";
	$res = mysqli_query($con,$query);
	if($res){
		while($row = mysqli_fetch_assoc($res)){
			$emailto= $row['email'];
			echo '
				<div class="row">
					<div class="col-lg-12"><h5><b>Team Leader Details</b></h5></div>
				</div><hr/>
				<div class="row">
					<div class="col-lg-6">Name</div>
					<div class="col-lg-6" id="u_username">'.$row["username"].'</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">Email</div>
					<div class="col-lg-4" id="u_email">'.$row["email"].'</div>
					<div class="col-lg-2"><button class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-envelope"></span> Send Mail</button></div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">Phone</div>
					<div class="col-lg-6" id="u_phone">'.$row["phone"].'</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">Address</div>
					<div class="col-lg-6" id="u_address">'.$row["address"].'</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">Institute Name</div>
					<div class="col-lg-6" id="u_iname">'.$row["insti_name"].'</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">Institute Address</div>
					<div class="col-lg-6" id="u_iadd">'.$row["insti_add"].'</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">Institute Number</div>
					<div class="col-lg-6" id="u_ino">'.$row["insti_no"].'</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">Institute Number</div>
					<div class="col-lg-6" id="u_ino">'.$row["insti_no"].'</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">University</div>
					<div class="col-lg-6" id="u_uni">'.$row["univ"].'</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-6">Current Profile</div>
					<div class="col-lg-6" id="u_profile">'.$row["current_profile"].'</div>
				</div><hr/>
				<div class="row">
					<div class="col-lg-6">Total Team Members</div>
					<div class="col-lg-6" id="">'.($row["count_team"]+1).'</div>
				</div><hr/>

			';
		}
	}
	 ?>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  	<div class="modal-dialog modal-lg">

    <!-- Modal content-->
	    <div class="modal-content">
	    	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">Compose Email</h4>
	      	</div>
	      	<div class="modal-body">
	      		<div class="row">
        			<div class="col-lg-3">To:</div>
        			<div class="col-lg-9">
        				<div class="form-group">
    						<input type="text" class="form-control" id="mailto" value="<?php echo $emailto; ?>" disabled>
 						</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-lg-3">From:</div>
        			<div class="col-lg-9">
        				<div class="form-group">
    						<input type="text" class="form-control" id="mailfrom" value="<?php echo $emaill; ?>" disabled>
 						</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-lg-3">Subject:</div>
        			<div class="col-lg-9">
        				<div class="form-group">
    						<input type="text" class="form-control" id="subjectmail" >
 						</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-lg-3">Body:</div>
        			<div class="col-lg-9">
        				<div class="form-group">
    						<textarea rows="13" class="form-control" id="mailbody"></textarea>
 						</div>
        			</div>
        		</div>

	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" onclick="sendEmailEntre()">Send</button>
	      	</div>
	    </div>

  	</div>
</div>