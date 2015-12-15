<?php 
	include_once("../header.php");
 ?>
<div class="container">
	<div class="row" style="margin-top:80px;">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading text-center" style="background-color:#fff;">Sign Up - Investors </div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<input type="text" class="form-control" id="fname" placeholder="First name" onblur="checkfname(this.id)">
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
								<input type="password" class="form-control" id="password" placeholder="Password" onblur="checkPass(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="pass_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="phno" placeholder="Phone number" onblur="checkPhno(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="phone_error"></div>
						</div><!-- 
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="linkedin" placeholder="Linkedin profile" onblur="checkEmpty5(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="linkedin_error"></div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="companyName" placeholder="Current company name" onblur="checkEmpty8(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="company_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="profile" placeholder="Current Profie" onblur="checkEmpty6(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="profile_error"></div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="years_experience" placeholder="Years of Experience" onblur="checkEmpty9(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="exp_error"></div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="about_company" placeholder="About Company" onblur="checkEmpty7(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="about_error"></div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="website" placeholder="Website" onblur="checkEmpty3(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="web_error"></div>
						</div> -->
						<!-- <div class="col-lg-12">
							<div class="form-group">
								<input type="text" class="form-control" id="revenue" placeholder="Revenue" onblur="checkEmpty10(this.id)">
							</div>
							<div style="width:auto;height:auto;color:#ff0000" id="revenue_error"></div>
						</div> -->
						<div class="col-lg-12">
							<div class="form-group">
								<button class="btn btn-primary btn-md btn-block" onclick="investor_signup()" style="background-color:#212A3F;">Sign Up</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>