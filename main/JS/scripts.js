function signup()
{
	reset();
	document.getElementById("signupDIV").style.display = "block";
	document.getElementById("loginDIV").style.display = "none";
}

function login()
{
	reset();
	document.getElementById("loginDIV").style.display = "block";
	document.getElementById("signupDIV").style.display = "none";
}
function passwordCheck()
{
	if (document.getElementById("password").value == document.getElementById("confirm").value)
	{
		var firstName = document.getElementById("firstname").value
		var lastName = document.getElementById("lastname").value
		var genderVar = document.getElementById("gender").value
		var DOBVar = document.getElementById("dob").value
		var emailIDVar = document.getElementById("emailID").value
	}
	else
	{
		alert("Invalid. Passwords do not match!")
	}
}

function reset()
{
	document.getElementById("firstname").value = "";
	document.getElementById("lastname").value = "";
	document.getElementById("gender").value = "";
	document.getElementById("dob").value = "";
	document.getElementById("emailID").value = "";
	document.getElementById("password").value = "";
	document.getElementById("confirm").value = "";
	document.getElementById("emailID2").value = "";
	document.getElementById("pwd").value = "";
}

function display()
	{
		var id = document.getElementById("userid").value
		var password = document.getElementById("pwd").value
		if (id == "ClaveyC")
		{
			if (password == "password123")
			{
				alert("Valid login credentials. Logging in.")
			}
			else
			{
				alert("Invalid login credentials")
			}
		}
		else
		{
			alert("Invalid login credentials")
		}
	}
function popupfunction(x)
{
	document.getElementById('popup'+x).style.display='block';
	document.getElementById('fade'+x).style.display='block';
}

function popupclose(x)
{
	document.getElementById('popup'+x).style.display='none';
	document.getElementById('fade'+x).style.display='none';
}
