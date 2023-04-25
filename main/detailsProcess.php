<html>
<header>
<?php include ("header.php") ?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body>
<center>
	<?php
		include("fos-db-connection.php");

		$emailID = $_POST['updateEmail'];
		$pwd = $_POST['updatePwd'];
		if($pwd == null)
			$pwd = $connect->query("SELECT pwd FROM users_tab WHERE emailID = '".$emailID."'")->fetch_object()->pwd;
		$firstname = $_POST['updateFName'];
		$lastname = $_POST['updateLName'];
		$gender = $_POST['updateGender'];
		$dob = $_POST['updateDob'];

		$sql = "UPDATE users_tab SET emailID = '$emailID', firstname = '$firstname', lastname = '$lastname', gender = '$gender', pwd = '$pwd', dob = '$dob' WHERE emailID = '$emailID'";
		$result = $connect->query($sql);

		if($result == FALSE){
			echo "error:".$connect->error;
		} else {
			?>
			<?php
			header('Location: account.php');
			$_SESSION['emailID'] = $emailID;
		}
	?>
</center>
</body>
</html>
