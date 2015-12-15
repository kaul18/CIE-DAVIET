$(document).ready(function(){
$("#upload_form").on('submit',function(e){
		e.preventDefault();
		$.ajax({
		url: "../ajaxFiles/student_new_idea.php",
		type: "POST",
		data:  new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success: function(data){
		// alert(data);return false;
		data = parseInt(data);
		if(data==0)
		{
			alert("upload the executive summary in pdf or docx format only");
			return false;
		}else if(data==2)
		{
			alert("upload the logo in jpeg/jpg, png or gif format only");
			return false;
		}
		title = $("#ideaTitle").val();
		desc = $("#ideaDesc").val();
		area = $("#ideaArea").val();
		file = $("#file").val().split('\\').pop();
		file2 = $("#file2").val().split('\\').pop();
		if(data==3 || title==0 || desc==0 || area==0 || file==0 || file2==0)
		{
			alert("please fill all the fields");
			return false;
		}
		else if(data == 1)
		{
			alert("Please wait for a moment..!! Donot submit or refresh or close the window");
			// alert("inside");
			$.post("../ajaxFiles/student_new_idea.php",{title:title,desc:desc,area:area,file:file,file2:file2},function(datas){
				//$("h4").html(datas);
				alert(datas);
				 $("input[type=text],input[type=file],input[type=email],textarea").val("");
			});
		}
 		
	},
		error: function(){} 	        
		});
		});
// $("#loginn").click(function(){
// 	$("#loginEmail").focus();
// });
});

// login script starts
function heyy(id)
{
	alert("yooo");
}
function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}
function emaill(id)
	{
		var x = document.getElementById(id).value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			alert("Enter valid email id");
			$("#cemail").val("");
			return false;
		}else{
			return true;
		}
		
		if(isValidEmailAddress(x))
			{	
				return true;	
			}
			else{
				alert("Wrong use of special character");
				return false;	
			}
			return true;
	}
// login for header.php page
function loginAll()
{
	email = $("#loginEmail").val();
	password = $("#loginPassword").val();
	$.post("../ajaxFiles/loginForAll.php",{email:email,password:password},function(data){
		if(data == 1)
			window.location = "../students/dashboard.php";
		else if(data == 2)
			window.location = "../investor/ideas.php";
		else if(data == 3)
			window.location = "../ventures/ideas.php";
		else
			alert(data);
	});
}

// login script ends

// student add new ides script starts

// function addidea()
// {
// 		title = $("#ideaTitle").val();
// 		desc = $("#ideaDesc").val();
// 		area = $("#ideaArea").val();
// 		file = $("#file").val().split('\\').pop();
// 		if(title==0 || desc==0 || area==0)
// 		{
// 			alert("please fill all the fields");
// 			return false;
// 		}
// 		else
// 		{
// 			$.post("../ajaxFiles/student_new_idea.php",{title:title,desc:desc,file:file,area:area},function(data){
// 				if(data!=0)
// 				{
// 					alert(data);
// 					$("input[type=text],input[type=file],input[type=email],textarea").val("");	
// 				}
// 			});
// 		}
// }

// student add new ides script ends

// contact us script starts
function contactForm()
{
	name = $("#cname").val();
	email = $("#cemail").val();
	msg = $("#ctext").val();
	if(name == "" || email == "" || msg == "")
	{
		alert("fill all the fields then click submit");
	}else{
		$.post("../ajaxFiles/contact_us.php",{name:name,email:email,msg:msg},function(data){
			alert(data);
			window.location = "index.php#section4";
			$("input[type=text],input[type=email],textarea").val("");
		});
	}
}
// contact us script ends

//divs contain u in editProfile() coz its update 
function editProfileStu()
{
	updateBtn = "<button class='btn btn-default' onclick='updateProfileStu()'><span class='glyphicon glyphicon-edit' ></span> Update</button>";
	$("#editUpdate").html(updateBtn);

	u_username = $("#u_username").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_username"></div>';
	$("#u_username").html(textbox);
	$("#t_username").val(u_username);

	u_phone = $("#u_phone").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_phone"></div>';
	$("#u_phone").html(textbox);
	$("#t_phone").val(u_phone);

	u_address = $("#u_address").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_address"></div>';
	$("#u_address").html(textbox);
	$("#t_address").val(u_address);

	u_comp = $("#u_comp").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_comp"></div>';
	$("#u_comp").html(textbox);
	$("#t_comp").val(u_comp);

	u_iname = $("#u_iname").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_iname"></div>';
	$("#u_iname").html(textbox);
	$("#t_iname").val(u_iname);

	u_iadd = $("#u_iadd").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_iadd"></div>';
	$("#u_iadd").html(textbox);
	$("#t_iadd").val(u_iadd);

	u_ino = $("#u_ino").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_ino"></div>';
	$("#u_ino").html(textbox);
	$("#t_ino").val(u_ino);

	u_uni = $("#u_uni").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_uni"></div>';
	$("#u_uni").html(textbox);
	$("#t_uni").val(u_uni);

	u_profile = $("#u_profile").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_profile"></div>';
	$("#u_profile").html(textbox);
	$("#t_profile").val(u_profile);

}
function editProfileInvestor()
{
	updateBtn = "<button class='btn btn-default' onclick='updateProfileInvestor()'><span class='glyphicon glyphicon-edit' ></span> Update</button>";
	$("#editUpdate").html(updateBtn);

	e_username = $("#e_username").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_username"></div>';
	$("#e_username").html(textbox);
	$("#t_username").val(e_username);

	e_phone = $("#e_phone").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_phone"></div>';
	$("#e_phone").html(textbox);
	$("#t_phone").val(e_phone);
}

function editProfileVent(){
	updateBtn = "<button class='btn btn-default' onclick='updateProfileVent()'><span class='glyphicon glyphicon-edit' ></span> Update</button>";
	$("#editUpdate").html(updateBtn);

	e_username = $("#e_username").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_username"></div>';
	$("#e_username").html(textbox);
	$("#t_username").val(e_username);

	e_email = $("#e_email").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_email"></div>';
	$("#e_email").html(textbox);
	$("#t_email").val(e_email);

	e_phone = $("#e_phone").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_phone"></div>';
	$("#e_phone").html(textbox);
	$("#t_phone").val(e_phone);

	e_linkedin = $("#e_linkedin").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_linkedin"></div>';
	$("#e_linkedin").html(textbox);
	$("#t_linkedin").val(e_linkedin);

	e_comname = $("#e_comname").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_comname"></div>';
	$("#e_comname").html(textbox);
	$("#t_comname").val(e_comname);

	e_website = $("#e_website").html();
	textbox = '<div class="form-group"><input type="text" class="form-control" name="" id="t_website"></div>';
	$("#e_website").html(textbox);
	$("#t_website").val(e_website);

}

function updateProfileVent(){
	t_username = $("#t_username").val();		
	t_email = $("#t_email").val();		
	t_phone = $("#t_phone").val();		
	t_linkedin = $("#t_linkedin").val();		
	t_comname = $("#t_comname").val();		
	t_website = $("#t_website").val();	
	$.post("../ajaxFiles/updateProfileVent.php",{name:t_username,email:t_email,phone:t_phone,link:t_linkedin,company:t_comname,web:t_website},function(data){
			alert(data);
			window.location = "profilePage.php";
	});
}
function updateProfileStu()
{
	t_username = $("#t_username").val();		
	t_phone = $("#t_phone").val();		
	t_address = $("#t_address").val();		
	t_comp = $("#t_comp").val();		
	t_iname = $("#t_iname").val();	
	t_iadd = $("#t_iadd").val();	
	t_ino = $("#t_ino").val();	
	t_uni = $("#t_uni").val();	
	t_profile = $("#t_profile").val();
	$.post("../ajaxFiles/updateProfileStudents.php",{t_username:t_username,t_phone:t_phone,t_address:t_address,t_comp:t_comp,t_iname:t_iname,t_iadd:t_iadd,t_ino:t_ino,t_uni:t_uni,t_profile:t_profile},function(data){
		alert(data);
		location.reload();
	});

}

function updateProfileInvestor()
{
	t_username = $("#t_username").val();		
	x = $("#t_phone").val();	
	if((isNaN(x) == true)||(x == "")||(x.length<10)){ 
		alert('Enter valid phone number.');return false;
	}
	$.post("../ajaxFiles/updateProfileInvestor.php",{name:t_username,phone:x},function(data){
			alert(data);
			window.location = "profilePage.php";
	});

}

// All about ent 
// select ideas in ent
	function confirm_idea(id,iid)
	{
		id=id;
		iid=iid;
		$.post("../ajaxFiles/addInvestorIdea.php",{id:id,iid:iid},function(data){
			alert(data);
			location.reload();
		});
	}


// select ideas in ent endzz
function update_present_idea(id,iid)
	{
		id=id;
		iid=iid;
		$.post("../ajaxFiles/updateInvestorIdea.php",{id:id,iid:iid},function(data){
			alert(data);
			location.reload();
		});
	}
function remove_shortlisted(id, iid)
{
	id=id;
	iid=iid;
	$.post("../ajaxFiles/remove_shortlistedInvestor.php",{id:id,iid:iid},function(data){
		alert(data);
		location.reload();
	});
}
function remove_selection_vent(id, iid)
{
	id=id;
	iid=iid;
	$.post("../ajaxFiles/remove_selectionVent.php",{id:id,iid:iid},function(data){
		alert(data);
		location.reload();
	});
}

// ent js ends

// vent js starts

function confirm_idea_vent(id, iid)
{
	id=id;
	iid=iid;
	$.post("../ajaxFiles/addVentIdea.php",{id:id,iid:iid},function(data){
		alert(data);
		location.reload();
	});
}
function update_present_idea_vent(id,iid)
	{
		id=id;
		iid=iid;
		$.post("../ajaxFiles/updateVentIdea.php",{id:id,iid:iid},function(data){
			alert(data);
			location.reload();
		});
	}
function remove_shortlisted_vent(id, iid)
{
	id=id;
	iid=iid;
	$.post("../ajaxFiles/remove_shortlistedVent.php",{id:id,iid:iid},function(data){
		alert(data);
		location.reload();
	});
}
function remove_selection(id, iid)
{
	id=id;
	iid=iid;
	$.post("../ajaxFiles/remove_selectionInvestor.php",{id:id,iid:iid},function(data){
		alert(data);
		location.reload();
	});
}

// vent js ends

//investor password change at profile page
function password_change(type){
	if(type === 'investor'){
		cpass = $("#curr_password").val();
		npass = $("#new_password").val();
		cnpass= $("#confirm_new_password").val();
		if((cpass == "") || (npass == "") || (cnpass == ""))
		{
			alert("Fill complete details.");
		}else if(cpass.length < 5){
			alert("Current password can not be less than 5 characters/digits.");
		}else if(npass !== cnpass){
			alert("New password and confirm new passwords don't match");
		}else{
			$.post("../ajaxFiles/changePasswordInvestor.php",{cpass:cpass, npass:npass, cnpass:cnpass},function(data){
				if(data == 1){
					alert("Enter all the details.");
				}else if(data == 2){
					alert("Enter Valid current password");
				}else if(data == 3){
					alert("New password and confirm new passwords don't match");
				}else if(data == 4){
					alert("New password can't be less than 5 characters/digits");
				}else if(data == 5){
					alert("Password updated");
					window.location = "../investor/profilePage.php";
				}else if(data ==6){
					alert("Error while updating the password. Please try again!");
					window.location = "../investor/profilePage.php";
				}else{
					alert(data);
				}
			});
		}

	}else if(type === 'vent'){
		cpass = $("#v_curr_password").val();
		npass = $("#v_new_password").val();
		cnpass= $("#v_confirm_new_password").val();
		if((cpass == "") || (npass == "") || (cnpass == ""))
		{
			alert("Fill complete details.");
		}else if(cpass.length < 5){
			alert("Current password can not be less than 5 characters/digits.");
		}else if(npass !== cnpass){
			alert("New password and confirm new passwords don't match");
		}else{
			$.post("../ajaxFiles/changePasswordVenture.php",{cpass:cpass, npass:npass, cnpass:cnpass},function(data){
				if(data == 1){
					alert("Enter all the details.");
				}else if(data == 2){
					alert("Enter Valid current password");
				}else if(data == 3){
					alert("New password and confirm new passwords don't match");
				}else if(data == 4){
					alert("New password can't be less than 5 characters/digits");
				}else if(data == 5){
					alert("Password updated");
					window.location = "../ventures/profilePage.php";
				}else if(data ==6){
					alert("Error while updating the password. Please try again!");
					window.location = "../ventures/profilePage.php";
				}else{
					alert(data);
				}
			});
		}
	}
}

// investor password ends

//email function starts
function sendEmailEntre(){
	// alert("yess");return false;
	to = $("#mailto").val();
	from  = $("#mailfrom").val();
	subject = $("#subjectmail").val();
	body = $("#mailbody").val();
	$.post("../ajaxFiles/sendEmail.php",{to:to,from:from,subject:subject,body:body},function(data){
		alert(data);
		$("#myModal").modal('hide');
	});
}

//email function ends

function forgotPassword(){
	email = $("#email").val();
	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");
	if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
		alert("Enter valid email id");
		return false;
	}
	if(isValidEmailAddress(email)){
		alert("yes");
		$.post("../ajaxFiles/forgotPasswordEmail.php",{email:email},function(data){
			alert(data);
		});
	}
}

function passwordChange(){
		pass = $("#passwordchange").val();
		pass1 = $("#passwordchange1").val();
		if(pass.length < 5){
			alert("Password can not be less than 5 characters/digits..");
			return false;
		}
		if(pass != pass1){
			alert("Change password and confirm password do not match!");return false;
		}
		email = $("#pcemail").val();
		var atpos = email.indexOf("@");
		var dotpos = email.lastIndexOf(".");
		if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length)
		{
			alert("Invalid Link");
			return false;
		}
		token = $("#pctoken").val();
		if(token == ""){
			alert("Invalid Link");
			return false;
		}
		type = $("#pctype").val();
		if((type != 1)||(type != 2)||(type !=3 )){
			alert("Invalid Link");
			return false;
		}
		$.post("../ajaxFiles/changePasswordNow.php",{pass:pass,pass1:pass1,email:email,token:token,type:type},function(data){
			alert(data);
		});
}