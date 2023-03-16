<html>
<header>
	<?php include ("header.php") ?>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="JS/scripts.js"></script>
</header>
<body>
<div class = "signupDIV" id = "signupDIV">
	<table border="1" align="center" width="15%">
	<tr>
		<td> First Name</td>
		<td><input type="text" name="firstname" id="firstname"/></td>
	</tr>
	<tr>
		<td> Last Name</td>
		<td><input type="text" name="lastname" id="lastname"/></td>
	</tr>
	<tr>
		<td> Gender </td>
		<td><select id = "gender" name = "gender" value = "gender">
				<option value = "Male">Male</option>
				<option value = "Female">Female</option>
			</select></td>
	<tr>
		<td> Date of Birth</td>
		<td><input type="date" name="dob" id="dob" value = "dob"/></td>
	</tr>
		<td> Email ID</td>
		<td><input type="text" name="emailID" id="emailID"/></td>
	</tr>
	<tr>
		<td> Password</td>
		<td><input type="text" name="password" id="password"/></td>
	</tr>
	<tr>
		<td> Confirm Password</td>
		<td><input type="text" name="confirm" id="confirm"/></td>
	</tr>
	<tr>
		<td align="center"><h3><button name = "reset" id = "reset" onclick = "reset()">Reset</button><h3></td>
		<td align="center"><h3><a href = "home.php" class = "drp"><button name = "signup" id = "signup" onclick = "passwordCheck()">Sign-Up</button></a><h3></td>
	</tr>
	</table>
</div>
</body>
</html>