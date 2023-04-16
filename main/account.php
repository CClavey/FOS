<html>
<header>
<?php include ("header.php") ?>
<!-- Need to add session variables so the USER ID can move across the files -->
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
					
					<?php
						include("fos-db-connection.php");

						$emailID = $_GET['user'];

						$sql = "SELECT * FROM users_tab WHERE emailID = '".$emailID."'"; //this is susceptible to SQL injection, but i forgot how to do safe queries
						$result = $connect->query($sql);
						$row = $result->fetch_assoc();
						
						echo "<h3>Name: ".$row['firstname']." ".$row['lastname']."</h3>
							<h3>Email: ".$emailID."</h3>
							<h3>Birthday: ".$row['dob']."</h3>
							<h3>Gender: ".$row['gender']."</h3>
							<h3>Points? (Only included if we do points rather than coupons)</h3>
							<br>";
					?>
	</td>
	<td colspan="2" class = "tdMain">
		<h1>Update Details</h1>
		<br>
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
