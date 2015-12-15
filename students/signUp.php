<?php 
	include_once("../header.php");
 ?>
<div class="container">
	<div class="row" style="margin-top:80px;overflow:hidden;">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12 text-center">Entrepreneur - Team Leader<hr/></div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<h4>Personal Details</h4><hr/>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input type="text" class="form-control" name="fname" id="fname" placeholder="First name" onblur="checkfname(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="fname_error"></div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<input type="text" class="form-control" id="lname" placeholder="Last name" onblur="checklname(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="lname_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" name="email" id="email" placeholder="Email" onblur="emailid(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="email_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" onblur="checkPass(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="pass_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" name="phno" id="phno" placeholder="Phone number" onblur="checkPhno(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="phone_error"></div>
						</div>
						<div class="col-lg-4">
							<div>Day</div>
							<select class="form-control" name="day" id="day" onblur="days(this.id)">
								<option value="0">Select</option>
										<?php
											for($a=1;$a<=31;$a++)
											{
												echo "<option value='{$a}'>{$a}</option>";												
											}
										?>
							</select>
							<div style="width:auto;height:auto;color:#ff0000" id="day_error"></div>
						</div>
						<div class="col-lg-4">
							<div>Month</div>
							<select class="form-control" name="month" id="month" onblur="months(this.id)">
							<option value="0">Select</option>
										<?php
											for($a=1;$a<=12;$a++)
											{
												echo "<option value='{$a}'>{$a}</option>";												
											}
										?>
							</select>
							<div style="width:auto;height:auto;color:#ff0000" id="month_error"></div>
						</div>
						<?php
				                    $cyear = (int)date("Y");
				                    $years = $cyear - 100;
				                ?>
						<div class="col-lg-4">
							<div>Year</div>
							<select class="form-control" name="years" id="year" onblur="years(this.id)">
								<option value="0">Select</option>
                                <?php
                                while($cyear >= $years)
                                {
                                    echo "<option value='{$cyear}'>{$cyear}</option>";
                                    $cyear--;
                                }
                                ?>
							</select>
							<div style="width:auto;height:auto;color:#ff0000" id="year_error"></div>
						</div> 
						<div class="col-lg-12" style="margin-top:15px;">
							<div class="form-group">
								<textarea type="text" row="5" class="form-control" placeholder="Address" id="address" onblur="checkEmpty(this.id)"></textarea>
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="address_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Company name (optional)" id="comp_name" />
							</div>
						</div>
						<div class="col-lg-12">
							<h4>Institute Details</h4><hr/>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control"  id="names" placeholder="Name" onblur="checkname(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="name_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<textarea row="5" class="form-control" id="address2" placeholder="Address" onblur="checkEmpty2(this.id)"></textarea>
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="address2_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="phone" placeholder="Contact number" onblur="phonee(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="phones_error"></div>
						</div>
						<!-- <div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="website" placeholder="Website" onblur="checkEmpty3(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="web_error"></div>
						</div> -->
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="university" placeholder="University" onblur="checkEmpty4(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="univ_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="profile" placeholder="Current Profile for eg. student, Web developer, CEO etc" onblur="checkEmpty6(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="profile_error"></div>
						</div>
						<div class="col-lg-12" style="margin-bottom:0px;"><h4>Team Member Details</h4></div>
						<div class="col-lg-12" style="margin-top:5px;"><h5><b>Team Members:</b></h5></div>
						<div class="col-lg-12">
							<select class="form-control" onblur="yeahh()" id="member">
							<option value="0">-- Select excluding team members and press tab --</option>
								<?php
								 for($i = 1; $i <= 25 ; $i++)
								 	{
								 		echo '<option id="'.$i.'" value="'.$i.'">'.$i.'</option>';
								 	}
								 ?>
							</select>
						</div>

						<!-- replicate from this  -->
						<div id="generate_members">
							
						</div>
						<!-- replication div ends -->


						<div class="col-lg-12" style="margin-top:15px;">
							<div class="form-group">
								<button class="btn btn-primary btn-md btn-block" style="background-color:#212A3F;;" onclick="stu_signup()">Sign Up</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>