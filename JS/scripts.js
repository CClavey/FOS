function signup()
{
	reset()
	document.getElementById("signupDIV").style.display = "block";
	document.getElementById("loginDIV").style.display = "none";
}

function login()
{
	reset()
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
		alert("First Name: " + firstName + "\nLast Name: " + lastName + "\nGender: " + genderVar + "\nDOB: " + DOBVar + "\nEmail ID: " + emailIDVar)
		if (document.getElementById("HS").checked)
		{
			alert("You have a highschool diploma.")
		}
		if (document.getElementById("BS").checked)
		{
			alert("You have a Bachelor's Degree.")
		}
		if (document.getElementById("MS").checked)
		{
			alert("You have a Master's Degree.")
		}
		if (document.getElementById("PhD").checked)
		{
			alert("You have a PhD.")
		}
		if (document.getElementById("Cybersecurity").checked)
		{
			alert("You are in Cybersecurity.")
		}
		else if (document.getElementById("WebDesign").checked)
		{
			alert("You are in Web Design.")
		}
		else if (document.getElementById("Electrical").checked)
		{
			alert("You are in Electrical Engineering.")
		}
		else if (document.getElementById("Mechanical").checked)
		{
			alert("You are in Mechanical Engineering.")
		}
		else if (document.getElementById("other").checked)
		{
			var otherMajor = document.getElementById("otherField").value;
			alert("You are in " + otherMajor + ".")
		}
		
		if (document.getElementById("C++").checked)
		{
			alert("You know C++.")
		}
		if (document.getElementById("Python").checked)
		{
			alert("You know Python.")
		}
		if (document.getElementById("C#").checked)
		{
			alert("You know C#.")
		}
		if (document.getElementById("HTML").checked)
		{
			alert("You know HTML.")
		}
		if (document.getElementById("Java").checked)
		{
			alert("You know Java.")
		}
		if (document.getElementById("SQL").checked)
		{
			alert("You know SQL.")
		}
		
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
	document.getElementById("HS").checked = false;
	document.getElementById("BS").checked = false;
	document.getElementById("MS").checked = false;
	document.getElementById("PhD").checked = false;
	document.getElementById("Cybersecurity").checked = false;
	document.getElementById("WebDesign").checked = false;
	document.getElementById("Electrical").checked = false;
	document.getElementById("Mechanical").checked = false;
	document.getElementById("C++").checked = false;
	document.getElementById("Python").checked = false;
	document.getElementById("C#").checked = false;
	document.getElementById("HTML").checked = false;
	document.getElementById("Java").checked = false;
	document.getElementById("SQL").checked = false;
	document.getElementById("emailID").value = "";
	document.getElementById("password").value = "";
	document.getElementById("confirm").value = "";
	document.getElementById("userid").value = "";
	document.getElementById("pwd").value = "";
	document.getElementById("other").checked = false;
	document.getElementById("otherField").style.display = "none";
	document.getElementById("otherField").value = "";
}

function other()
{
	var box = document.getElementById("other");
	if (box.checked == true)
	{
		document.getElementById("otherField").style.display = "block";
	}
	else
	{
		document.getElementById("otherField").style.display = "none";
	}
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
