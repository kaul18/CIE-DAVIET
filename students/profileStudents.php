<?php 
	include_once("header.php");
	$query = "select username,phone,address,insti_name,comp_name, insti_add,insti_no,univ,current_profile,count_team,team_members from student_user where id=".$_SESSION['id'];
	$res = mysqli_query($con,$query);
?>
<div class="container" style="margin-top:80px;">
	<div class="row">
		<div class="col-lg-12 text-center"><h3><?php echo $_SESSION['username']; ?>'s Team</h3></div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="row">
				<div class="col-lg-10"><b>Team leader Details</b></div>
				<div class="col-lg-2 pull-right" id="editUpdate"><button id="updateButton" onclick="editProfileStu()" class="btn btn-default"><span class="glyphicon glyphicon-pencil" ></span> edit</button></div>
			</div><hr/>
			<?php 
				while($row = mysqli_fetch_assoc($res)){
					echo '  <div class="row">
								<div class="col-lg-6">Name</div>
								<div class="col-lg-6" id="u_username">'.$row["username"].'</div>
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
								<div class="col-lg-6">Company Name</div>
								<div class="col-lg-6" id="u_comp">'.$row["comp_name"].'</div>
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
								<div class="col-lg-6">University</div>
								<div class="col-lg-6" id="u_uni">'.$row["univ"].'</div>
							</div>
							<hr/>
							<div class="row">
								<div class="col-lg-6">Current Profile</div>
								<div class="col-lg-6" id="u_profile">'.$row["current_profile"].'</div>
							</div><hr/>
							<br/><br/><br/>';
							if($row["count_team"] > 0){
								echo '<div class="row">
							<div class="col-lg-12"><h5><b>Team Member Details</b><hr/></h5></div>
							</div>';
							}
							$team = explode("/",$row['team_members']);
							$j=0;
							for($i=1; $i <= $row["count_team"];$i++){
								echo '<div class="row">
										<div class="col-lg-12"><h5><b>Team member '.($i+1).'</b></h5></div></div><hr/>';
								echo '<div class="row">
												<div class="col-lg-6">First Name</div>
												<div class="col-lg-6">'.$team[$j].'</div>
											</div>
											<hr/>
											<div class="row">
												<div class="col-lg-6">last Name</div>
												<div class="col-lg-6">'.$team[$j+1].'</div>
											</div>
											<hr/>
											<div class="row">
												<div class="col-lg-6">Email</div>
												<div class="col-lg-6">'.$team[$j+2].'</div>
											</div>
											<hr/>';
									$j= $j+3;

							}

					}
			 ?>
			<br/><br/><br/>
		</div>
	</div>
</div>