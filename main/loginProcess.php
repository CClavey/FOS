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
		$password = $_POST['pwd'];

		$sql = "SELECT pwd FROM users_tab WHERE emailID = '".$emailID."'";
		$result = $connect->query($sql);
		$pwd = mysqli_fetch_assoc($result);

		if($password == $pwd['pwd']) {
			if($emailID == "fos.admin@gmail.com")
				header('Location: adminOrders.php');
			else
				header('Location: home.php');
			$_SESSION['emailID'] = $emailID;
		} else {
			header("Location: login.php?login=fail");
			exit();
		}
	?>

</center>
</body>
</html>
