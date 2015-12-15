a=0;
$(document).ready(function(){
	 $('[data-toggle="tooltip"]').tooltip()
	// alert("aagyaa");
	// $("#fname").focus();
});	
function yeahh()
{
	num = $("#member :selected").val();
	num = parseInt(num);
	elem = '';
	for (i=1; i<=num;i++)
	{
		elem += '<div class="col-lg-12" style="margin-top:15px;">Team Member '+(i+1)+'</div><div style="margin-top:15px;"><div class="col-lg-4" ><div class="form-group"><input type="text" class="form-control" name="email1" id="mfname'+i+'" placeholder="First name"></div></div><div class="col-lg-4"><div class="form-group"><input type="text" class="form-control" id="mlname'+i+'" name="email1" placeholder="Last name"></div></div><div class="col-lg-4"><div class="form-group"><input type="text" class="form-control" name="email1" id="memail'+i+'" placeholder="Email"></div></div></div>';
	}
	$("#generate_members").html(elem);
}
	
function checkfname(id)
	{
		var x = document.getElementById(id).value;
		if(x == "" || isNaN(x) == false)
		{

			var result="*Enter valid First name ";
			document.getElementById("fname_error").innerHTML=result;
			a=1;
			return false;
		}else{
			document.getElementById("fname_error").innerHTML="";
			a=0;
			return true;
			//textboxColor(id,formid);
		}
	}
	function checkname(id)
	{
		var x = document.getElementById(id).value;
		if(x == "" || isNaN(x) == false)
		{
			var result="*Enter valid name";
			document.getElementById("name_error").innerHTML=result;
			a=1;
			return false;
		}else{
			document.getElementById("name_error").innerHTML="";
			a=0;
			return true;
			//textboxColor(id,formid);
		}
	}

function checklname(id)
{
		var x = document.getElementById(id).value;
		if(x == "" || isNaN(x) == false)
		{
			var result="*Enter valid name";
			document.getElementById("lname_error").innerHTML=result;
			a=1;
			return false;
		}else{
			document.getElementById("lname_error").innerHTML="";
			a=0;
			return true;
			//textboxColor(id,formid);
		}
	}
	function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}
function emailid(id)
	{
		var x = document.getElementById(id).value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length)
		{
			var result="Enter valid email id";
			document.getElementById("email_error").innerHTML=result;
			a=1;
			return false;
		}else{
			a=0;
		}
		
		if(isValidEmailAddress(x))
			{	
				document.getElementById("email_error").innerHTML="";
				$.post("../ajaxFiles/check_email.php",{email:x},function(data){
					if(data != 0)
						{
							alert(data);
							var result="Enter another email id";
							document.getElementById("email_error").innerHTML=result;
							document.getElementById("email").value = "";
							a=1;
							return false;
						}
				});
				a=0;
			}else{
				var result="Wrong use of special character";
				document.getElementById("email_error").innerHTML=result;
				a=1;
				return false;	
			}
			return true;
	}
	function checkPass(id)
	{
		var x = document.getElementById(id).value;
		if(x == "")
		{
			var result="Password cannot be blank";
			document.getElementById("pass_error").innerHTML=result;
			a=1;
			return false;
		}else if(x.length<5)
		{
			var result="Password cannot be less than 5 letters";
			document.getElementById("pass_error").innerHTML=result;	
			a=1;
			return false;
		}
		else{
			document.getElementById("pass_error").innerHTML="";
			a=0;
			return true;
		}
	}
	function checkPhno(id)
	{
		var x = document.getElementById(id).value;
		if((isNaN(x) == true)||(x == "")||(x.length<10)){ 
		var result="*Enter valid phone number with not more than 10 digits";
		document.getElementById("phone_error").innerHTML=result; 
		a=1;
		return false;
	}
	else{
		document.getElementById("phone_error").innerHTML="";
		a=0;
		return true;
	}
}
function phonee(id)
	{
		var x = document.getElementById(id).value;
		if((isNaN(x) == true)||(x == "")||(x.length<10)){ 
		var result="*Enter valid phone number with not more than 10 digits";
		document.getElementById("phones_error").innerHTML=result; 
		a=1;
		return false;
	}
	else{
		document.getElementById("phones_error").innerHTML="";
		a=0;
		return true;
	}
}
function days(id)
	{
		var x = document.getElementById(id).value;
		if((isNaN(x) == true)||(x == "")||(x == "0")){ 
		var result="*Enter day";
		document.getElementById("day_error").innerHTML=result; 
		a=1;
		return false;
	}
	else{
		document.getElementById("day_error").innerHTML="";
		a=0;
		return true;
	}
}
	function months(id)
	{
		var x = document.getElementById(id).value;
		if((isNaN(x) == true)||(x == "")||(x == "0")){ 
		var result="*Enter month";
		document.getElementById("month_error").innerHTML=result; 
		a=1;
		return false;
	}
	else{
		document.getElementById("month_error").innerHTML="";
		a=0;
		return true;
	}
}
	function years(id)
	{
		var x = document.getElementById(id).value;
		if((isNaN(x) == true)||(x == "")||(x == "0")){ 
		var result="*Enter year";
		document.getElementById("year_error").innerHTML=result; 
		a=1;
		return false;
	}
	else{
		document.getElementById("year_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Address cannot be blank";
		document.getElementById("address_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("address_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty2(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Address cannot be blank";
		document.getElementById("address2_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("address2_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty3(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Website cannot be blank";
		document.getElementById("web_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("web_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty4(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*University cannot be blank";
		document.getElementById("univ_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("univ_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty5(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Enter your linkedin profile";
		document.getElementById("linkedin_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("linkedin_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty6(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Enter your current profile for eg. student, Web developer, CEO etc";
		document.getElementById("profile_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("profile_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty7(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Tell us something about your company";
		document.getElementById("about_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("about_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty8(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Enter Company name";
		document.getElementById("company_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("company_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty9(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Enter your experience in terms of years";
		document.getElementById("exp_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("exp_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty10(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Enter Revenue";
		document.getElementById("revenue_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("revenue_error").innerHTML="";
		a=0;
		return true;
	}
}
function checkEmpty11(id)
{
	var x = document.getElementById(id).value;
	if( x == "")
	{
		var result="*Enter Firm name";
		document.getElementById("firm_error").innerHTML=result; 
		a=1;
		return false;
	}else
	{
		document.getElementById("firm_error").innerHTML="";
		a=0;
		return true;
	}
}
// student signup beginzz..
function stu_signup()
{
	if(checkfname('fname') && checklname('lname') && checkname('names') && emailid('email') && checkPass('password') && days('day') && months('month') && years('year') && checkPhno('phno') && phonee('phone') && checkEmpty6('profile'))
	{
		fname = $("#fname").val();
		lname = $("#lname").val();
		fullname = fname+" "+lname;
		email = $("#email").val();
		password = $("#password").val();
		phno = $("#phno").val();
		day = $("#day").val();
		month = $("#month").val();
		year = $("#year").val();
		dob= day+"/"+month+"/"+year;
		addrs = $("#address").val();
		names = $("#names").val();
		addrs2 = $("#address2").val();
		phone = $("#phone").val();
		website = $("#website").val();
		univ = $("#university").val();
		profile = $("#profile").val();
		selectbox = $("#member :selected").val();
		members = "";
		for (var i=1; i<selectbox; i++)
		{
			members += $("#mfname"+i).val() + "/" + $("#mlname"+i).val() + "/" + $("#memail"+i).val() + "/";
		}
		members += $("#mfname"+selectbox).val() + "/" + $("#mlname"+selectbox).val() + "/" + $("#memail"+selectbox).val();
			$.post("../ajaxFiles/signUp_stu.php",{name:fullname,email:email,pass:password,phno:phno,dob:dob,addrs1:addrs,names:names,addrs2:addrs2,phone:phone,website:website,univ:univ,profile:profile,selectbox:selectbox,members:members,isStud:1},function(data){
			if(data != 0)
			{
				alert(data);
			}
			$("input[type=text],input[type=password],input[type=email],textarea").val("");
			$("select").val(0);
		});
	}else 
	{
		alert("please fill the sign up properly..!!");
	}
}
// student signup endzz

// enterprenuers signup beginzz

function investor_signup()
{
	if(checkfname('fname') && checklname('lname') && emailid('email') && checkPass('password') && checkPhno('phno'))
	{
		fname = $("#fname").val();
		lname = $("#lname").val();
		username = fname + " " + lname;
		email = $("#email").val();
		pass = $("#password").val();
		phno = $("#phno").val();
		linkedin = $("#linkedin").val();
		company = $("#companyName").val();
		profile = $("#profile").val();
		exp = $("#years_experience").val();
		about = $("#about_company").val();
		website = $("#website").val();
		revenue = $("#revenue").val();

		$.post("../ajaxFiles/signUp_investor.php",{name:username,email:email,pass:pass,phno:phno,linkedin:linkedin,company:company,profile:profile,exp:exp,about:about,website:website,revenue:revenue,isInvestor:1},function(data){
			if(data !=0)
			{
				alert(data);
			}
				$("input[type=text],input[type=password],input[type=email],textarea").val("");
				$("select").val(0);
		});
	}else{
		alert("please fill the sign up properly..!!");
	}
}
// enterprenuers signup endzzz
function vent_signUp()
{
	if(checkfname('fname') && checklname('lname') && emailid('email') && checkPass('password') && checkPhno('phno'))
		{
			fname = $("#fname").val();
			lname = $("#lname").val();
			username = fname + " " + lname;
			email = $("#email").val();
			pass = $("#password").val();
			phno = $("#phno").val();
			firm = $("#firm").val();
			linkedin = $("#linkedin").val();
			website = $("#website").val();
			$.post("../ajaxFiles/signUp_vent.php",{name:username,email:email,pass:pass,phno:phno,firm:firm,linkedin:linkedin,website:website,isVent:1},function(data){
			if(data !=0)
			{
				alert(data);
			}
			
				$("input[type=text],input[type=password],input[type=email],textarea").val("");
				$("select").val(0);
		});
	}else{
		alert("please fill the sign up properly..!!");
	}

}