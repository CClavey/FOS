<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>
<!INCLUDE A SCRIPT TO AUTOMATICALLY PUT CURRENT INFO INTO THE FIELDS SO A USER DOES NOT HAVE TO RE-ENTER ALL OF THEIR INFO>

<center>
<body class = "mainBody">
<table class = "mainTable">
<tr>
	<td colspan="2">
		<hr>
	</td>
	<td colspan="2">
		<hr>
	</td>
</tr>
<tr>
	<td colspan="2" class = "tdMain">
		<h1>Account Details</h1>
		<br>
		<h3>Username: ClaveyC</h3>
		<h3>Email: ClaveyC@jbu.edu</h3>
		<h3>Phone Number: </h3>
		<h3>Birthday: </h3>
		<h3>Payment Method: **********78</h3>
	</td>
	<td colspan="2" class = "tdMain">
		<h1>Update Details</h1>
		<br>
		<h3>Username: ClaveyC</h3>
		<h3>Update Email: <input type = "text" name = "updateEmail" id = "updateEmail"/></h3>
		<h3>Update Phone Number: <input type = "text" name = "updatePhone" id = "updatePhone"/></h3>
		<h3>Update Birthday: <input type = "date" name = "updateBirthday" id = "updateBirthday"/></h3>
		<h3>Update Payment Method: <input type = "text" name = "updatePay" id = "updatePay"/></h3>
		<h3>Update Info: <a href = "detailsProcess.php" class ="drp"><button name = "update" id = "update">Update</button></a>
	</td>
</tr>
</table>
</body>
</center>

</html>