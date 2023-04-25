<html>
<head>
<?php
session_start();
if(isset($_SESSION['emailID']))
	session_destroy();
?>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="JS/scripts.js"></script>
</head>
<body class = "mainBody">
<center>
		<a href = "login.php?login=''" class = "drp"><button style="width: 200px; height: 65px; font-size: 24px;" name = "loginOption" id = "loginOption" onclick = "login()">Login</button></a>
		<a href = "signup.php" class = "drp"><button style="width: 200px; height: 65px; font-size: 24px;" name = "signupOption" id = "signupOption" onclick = "signup()">Sign-Up</button></a>
		<br>
		<br>
		<br>
		<a href = "home.php" class = "drp"><button style="width: 200px; height: 65px; font-size: 24px;" name = "guest" id = "guest">Continue as a Guest</button></a>
	</center>
</body>

</html>

