<html>
<header>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="JS/scripts.js"></script>
</header>
<body class = "mainBody">
	<form name="login-form" method="POST" action="loginProcess.php" >
		<table border="1" align="center">
			<tr>
				<td>Enter your Email ID</td>
				<td><label for="email"></label> <input type="email" id="emailID" name="emailID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="example@email.com"></td>
			</tr>
			<tr>
				<td>Enter your Password</td>
				<td><input type="password" name="pwd" id="pwd" value = ""/><a id="pwdReset" href="#">Forgot Your Password?</a></td>
			</tr>
			<tr style="height:40px;">
				<td align="center"><button name = "reset" id = "reset" onclick = "reset()">Reset</button></td>
				<td align="center"><input type="submit" value="Login"></td>
			</tr>
		</table>
		<?php
			if($_GET['login'] == 'fail')
				echo "<center>Email ID or password incorrect, try again</center>";
		?>
	</form>

</body>

</html>


