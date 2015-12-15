a=0;
$(document).ready(function(){
	alert("aagyaa");
});	
function openInput(id)
{
	alert("heyy");
	alert(id);
	// for(var i=)
}
function checkfname(id)
	{
		alert(id);
		var x = document.getElementById(id).value;
		alert(x);
		if(x == "" || isNaN(x) == false)
		{
			var result="*Enter valid name";
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
		alert(id);
		var x = document.getElementById(id).value;
		alert(x);
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
		alert(id);
		var x = document.getElementById(id).value;
		if(x == "")
		{
			var result="Password cannot be blank";
			document.getElementById("pass_error").innerHTML=result;
			a=1;
			return false;
		}
	}