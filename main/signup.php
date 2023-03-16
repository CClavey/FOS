<html>
<header>
	<?php include ("header.php") ?>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="JS/scripts.js"></script>
</header>
<body>
<form name="signup-form" method="POST" action="signupProcess.php" >
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
		<td><label for="email"></label> <input type="email" id="emailID" name="emailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></td>
	</tr>
	<tr>
		<td> Password</td>
		<td><input type="password" name="pwd" id="pwd"/></td>
	</tr>
	<tr>
		<td> Confirm Password</td>
		<td><input type="password" name="confirm" id="confirm"/></td>
	</tr>
	<tr style="height:40px;">
		<td align="center"><button name = "reset" id = "reset" onclick = "reset()">Reset</button></td>
		<td align="center"><input type="submit" value="Signup"></td>
	</tr>
	</table>
</body>
</html>
