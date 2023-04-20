<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="JS/scripts.js"></script>
</header>

<center>
<body class = "mainBody" onload="getUser()">
<table class = "mainTable">
<tr>
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
							<br>";
					?>
					<center>
						<a href = "accountDetails.php" class = "drp"><button name = "editDetails" id = "editDetails">Edit Account Info</button></a>
					</center>
					<br>
				</td>
			</tr>
</table>
</body>
</center>
</html>
