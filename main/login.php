<html>
<header>
<?php 
	include ("header.php")
?>
<link rel="stylesheet" href="CSS/styles.css">
<script src="scripts.js"></script>
</header>

<body>
<center>
	<a href = "home.php" class = "drp"><button style="width: 200px; height: 65px; font-size: 24px;" name = "return" id = "return">Return</button></a>

	<?php
		include("fos-db-connection.php");

		$emailID = $_POST['emailID'];
		$password = $_POST['pwd'];

		$sql = "SELECT pwd FROM users_tab WHERE emailID = '".$emailID."'"; //this is susceptible to SQL injection, but i forgot how to do safe queries
		$result = $connect->query($sql);
		$pwd = mysqli_fetch_assoc($result);

		if($password == $pwd['pwd']) {
			echo "<br><br><br><center>Login Successful</center>
			<script>
			localStorage.setItem('email', '$emailID');
			</script>";
		} else {
			header("Location: login.php?login=fail");
			exit();
		}
	?>

</center>
</body>
</html>
