<html>
<header>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
<center>
	<a href = "home.php" class = "drp"><button style="width: 200px; height: 65px; font-size: 24px;" name = "return" id = "return">Return</button></a>

	<?php
		include("fos-db-connection.php");

		$emailID = $_POST['emailID'];
		$pwd = $_POST['pwd'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];

		$sql = "INSERT INTO users_tab (emailID, firstname, lastname, gender, pwd, dob) 
				VALUES ('$emailID', '$firstname', '$lastname', '$gender', '$pwd', '$dob')";
		$result = $connect->query($sql);

		if($result == FALSE){
			echo "error:".$connect->error;
		} else {
			echo "<br><br><br><center>User successfully added</center>
			<script>
			localStorage.setItem('email', '".$emailID."');
			</script>";
		}
	?>

</center>
</body>
</html>
