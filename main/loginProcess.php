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
				echo "<a href = 'adminOrders.php' class = 'drp'><button style='width: 200px; height: 65px; font-size: 24px;' name = 'return' id = 'return'>Admin Page</button></a>";
			else
				echo "<a href = 'home.php' class = 'drp'><button style='width: 200px; height: 65px; font-size: 24px;' name = 'return' id = 'return'>HomePage</button></a>";
			echo "<br><br><br><center>Login Successful</center>";
			$_SESSION['emailID'] = $emailID;
		} else {
			header("Location: login.php?login=fail");
			exit();
		}
	?>

</center>
</body>
</html>
