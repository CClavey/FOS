<html>
<header>
	<?php include ("header.php") ?>
	<link rel="stylesheet" href="CSS/styles.css">
	<script src="JS/scripts.js"></script>
</header>
<body>
	<form name="login-form" method="POST" action="loginProcess.php" >
		<table border="1" align="center">
			<tr>
				<td>Enter your Email ID</td>
				<td><input type="text" name="emailID" id="emailID" value = ""/></td>
			</tr>
			<tr>
				<td>Enter your Password</td>
				<td><input type="text" name="pwd" id="pwd" value = ""/><a id="pwdReset" href="#">Forgot Your Password?</a></td>
			</tr>
			<tr style="height:40px;">
				<td align="center"><button name = "reset" id = "reset" onclick = "reset()">Reset</button></td>
				<td align="center"><input type="submit" value="Login"></td>
			</tr>
		</table>
		<?php
			if($_GET['login'] == 'fail')
				echo "<center>Email ID or password incorrect, try agian</center>";
		?>
	</form>

</body>

</html>
