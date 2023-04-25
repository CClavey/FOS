<html>
<header>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body class = "mainBody">
<center>
	<?php
		session_start();
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
			?>
			<?php
			header('Location: index.php');
			$_SESSION['emailID'] = $emailID;
		}
	?>

</center>
</body>
</html>
